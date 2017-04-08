<?php
/**
 * Created by IntelliJ IDEA.
 * User: nuocg
 * Date: 08-Dec-16
 * Time: 3:23 PM
 */

namespace App\Modules;


use Carbon\Carbon;

class AnSao extends TuVi
{
    /**
     * @param Carbon $solarDate Ngày sinh
     * @param bool $isLunar Check ngày âm hay dương
     * @throws \Exception
     */
    public function anSao($gender = TuVi::FEMALE, Carbon $solarDate, $isLunar = false)
    {
        // Đổi sang ngày âm lịch
        $lunarDate = $solarDate;
        if (!$isLunar) {
            $lunarDate = date_converter()->solar2Lunar($solarDate); // Chỉ convert ngày/tháng/năm, ko convert giờ
        }
        $namAm = $lunarDate->year;
        $thangAm = $lunarDate->month;
        $ngayAm = $lunarDate->day;
        $gioDuong = $lunarDate->hour;   // $giờ dương: [0, 23]
        $gioAm = $this->getGioAm($gioDuong);
        $canNamSinh = $this->getCanNam($namAm);
        $chiNamSinh = $this->getChiNam($namAm);
        $cungMap = $this->getCungMap();

        // Xác định Âm Dương - Nam Nữ
        $amDuong = $this->getAmDuong($canNamSinh, $gender);

        // Xác định cung Mệnh
        $cungMenh = $this->getCungMenh($thangAm, $gioAm);

        // Xác định cung Thân (body)
        $cungThan = $this->getCungThan($thangAm, $gioAm);

        // Tính Can Mệnh
        $canMenh = $this->getCanMenh($namAm, $cungMenh);

        // Xác định Cục của Mệnh
        $cucMenh = $this->getCuc($cungMenh, $canMenh);
        $cucMenhValue = $this->getCucValue($cucMenh);

        // Tính sao Tử Vi
        $tuviIndex = $this->getSaoTuViIndex($ngayAm, $cucMenhValue);

        // Tính các Chính Tinh
        $chinhTinhIndexMap = $this->getChinhTinhIndexMap($tuviIndex);
        $chinhTinhIndexMap = array_sort($chinhTinhIndexMap, function ($value, $key) {
            return $value;
        });


        /*//Thai tinh he
        $thaiTinhHeIndexMap = $this->anSaoTaiViTri('dan', $this->getThaiTinhHeMap());

        //Loc ton tinh he,
        $locTonTinhHeIndexMap = $this->getLocTonTinhHeIndexMap($canNamSinh, $gender);

        // TRUOng SINH TINH HE
        $truongSinhTinhHeIndexMap = $this->getTruongSinhTinhHeIndexMap($cuc, $canNamSinh, $gender);

        // SAO LUC SAT
        $lucSatIndexMap = $this->getLucSatIndexMap($canNamSinh, $canhName, $chiNamSinh);

        // SAO TA HUU
        $taHuuTinhIndexMap = $this->getTaHuuTinhIndexMap($thangAmIndex);

        //THIEN VIET TINH
        $thienVietTinhIndexMap = $this->getKhoiVietTinhIndexMap($canNamSinh);

        // KHOC HU TINH


        //THAI TOA TINH
        $thaiToaTinhIndexMap = $this->getThaiToaTinhIndexMap($thangAmIndex, $ngayAm);

        //QUANG QUI TINH
        $quangQuiTinhIndexMap = $this->getQuangQuiTinhIndexMap($thangAmIndex, $ngayAm);*/

        $this->data[TuVi::GIO_AM] = $gioAm;
        $this->data[TuVi::NGAY_AM] = $ngayAm;
        $this->data[TuVi::THANG_AM] = $thangAm;
        $this->data[TuVi::NAM_AM] = $namAm;
        $this->data[TuVi::AM_DUONG] = $amDuong;
        $this->data[TuVi::CUNG_MENH] = $cungMenh;
        $this->data[TuVi::CAN_MENH] = $canMenh;
        $this->data[TuVi::CUNG_THAN] = $cungThan;
        $this->data[TuVi::CUC_MENH] = $cucMenh;
        $this->data[TuVi::CHINH_TINH_INDEX_MAP] = $chinhTinhIndexMap;
    }

    public function getSaoCungMenh($gender = TuVi::FEMALE, Carbon $solarDate, $isLunar = false)
    {
        $this->anSao($gender, $solarDate, $isLunar);

        $cungIndexes = $this->getCungIndexes();

        $menhIndex = $cungIndexes[$this->data[TuVi::CUNG_MENH]];

        $listSaoMenh = $this->getListSaoFromIndex($menhIndex, true);
        if (count($listSaoMenh) == 1) {
            $saoCungMenh = head($listSaoMenh);
        } else {
            $saoCungMenh = $this->getSaoCamTinhDongCung($this->data[TuVi::CUNG_MENH], $listSaoMenh);
        }

        return $saoCungMenh;
    }

    public function getSaoCungPhuThe($gender = TuVi::FEMALE, Carbon $solarDate, $isLunar = false)
    {
        $this->anSao($gender, $solarDate, $isLunar);

        $cungIndexes = $this->getCungIndexes();

        $menhIndex = $cungIndexes[$this->data[TuVi::CUNG_MENH]];

        //Cung menh lui 2 ra cung the
        $phuTheIndex = $this->demNguoc($menhIndex, 2);
        $listSaoPhuThe = $this->getListSaoFromIndex($phuTheIndex, true);

        return $this->getSaoTuCung($listSaoPhuThe, $phuTheIndex);
    }

    public function getSaoCungTat($gender = TuVi::FEMALE, Carbon $solarDate, $isLunar = false)
    {
        $this->anSao($gender, $solarDate, $isLunar);

        $cungIndexes = $this->getCungIndexes();

        $menhIndex = $cungIndexes[$this->data[TuVi::CUNG_MENH]];

        //Cung menh lui 5 ra cung tat ach
        $tatIndex = $this->demNguoc($menhIndex, 5);
        $this->data[TuVi::CUNG_TAT] = $this->getCung($tatIndex);
        $listSaoTat = $this->getListSaoFromIndex($tatIndex, true);

        return $this->getSaoTuCung($listSaoTat, $tatIndex);
    }

    private function getSaoTuCung($listSao, $index)
    {
        switch (count($listSao)) {
            case 0:
                $cungXungChieu = $this->getCungXungChieuIndex($index);
                $cung = $this->getCung($cungXungChieu);
                $sao = $this->getSaoCamTinhDongCung($cung, $listSao);
                break;
            case 1:
                $sao = head($listSao);
                break;
            default:
                $cungTat = $this->getCung($index);
                $sao = $this->getSaoCamTinhDongCung($cungTat, $listSao);
                break;
        }

        return $sao;
    }

    public function getVitriCungMenh($gender = TuVi::FEMALE, Carbon $solarDate, $isLunar = false)
    {
        $this->anSao($gender, $solarDate, $isLunar);

        return $this->data[TuVi::CUNG_MENH];
    }

    public function getListSaoFromIndex($index, $checkVoChinhDieu = false, $type = 'main')
    {
        $listSao = [];
        switch ($type) {
            case 'main':
                $listSao = $this->data[TuVi::CHINH_TINH_INDEX_MAP];
                break;
        }
        $result = [];
        foreach ($listSao as $sao => $saoIndex) {
            if ($index == $saoIndex) {
                $result[] = $sao;
            }
        }
        if ($checkVoChinhDieu == true && count($result) === 0) {
            $xungChieuIndex = $this->getCungXungChieuIndex($index);
            $result = $this->getListSaoFromIndex($xungChieuIndex);
        }

        return $result;
    }

    // Xác định index cung xung chiếu
    public function getCungXungChieuIndex($cungIndex)
    {
        $xungChieuIndex = $cungIndex - 6;
        if ($xungChieuIndex < 0) $xungChieuIndex += 12;

        return $xungChieuIndex;
    }

    public function getSaoCamTinhDongCung($vitriCungMenh, $listChinhTinhCungMenh)
    {
        $camTinhMap = [
            TuVi::DAN => [
                TuVi::SAO_TU_VI,
                TuVi::SAO_THIEN_CO,
                TuVi::SAO_THAI_DUONG,
                TuVi::SAO_VU_KHUC,
                TuVi::SAO_THIEN_DONG,
            ],
            TuVi::MAO => [
                TuVi::SAO_THAM_LANG,
                TuVi::SAO_THIEN_CO,
                TuVi::SAO_LIEM_TRINH,
                TuVi::SAO_THAI_DUONG,
                TuVi::SAO_VU_KHUC,
            ],
            TuVi::THIN => [
                TuVi::SAO_THIEN_TUONG,
                TuVi::SAO_THIEN_CO,
                TuVi::SAO_THIEN_PHU,
            ],
            TuVi::TY => [
                TuVi::SAO_THAT_SAT,
                TuVi::SAO_VU_KHUC,
                TuVi::SAO_LIEM_TRINH,
            ],
            TuVi::NGO => [
                TuVi::SAO_LIEM_TRINH,
                TuVi::SAO_THIEN_PHU,    // Example data for test
                TuVi::SAO_THAI_AM,
            ],
            TuVi::MUI => [
                TuVi::SAO_LIEM_TRINH,
                TuVi::SAO_THAI_DUONG,
                TuVi::SAO_VU_KHUC,
                TuVi::SAO_CU_MON,
                TuVi::SAO_TU_VI,
            ],
            TuVi::THAN => [
                TuVi::SAO_THIEN_PHU,
                TuVi::SAO_THAI_AM,
                TuVi::SAO_CU_MON,
                TuVi::SAO_THIEN_TUONG,
                TuVi::SAO_THIEN_LUONG,
            ],
            TuVi::DAU => [
                TuVi::SAO_TU_VI,
                TuVi::SAO_CU_MON,
                TuVi::SAO_PHA_QUAN,
                TuVi::SAO_THIEN_LUONG,
                TuVi::SAO_THAT_SAT,
            ],
            TuVi::TUAT => [
                TuVi::SAO_TU_VI,
                TuVi::SAO_THIEN_LUONG,
                TuVi::SAO_LIEM_TRINH,
            ],
            TuVi::HOI => [
                TuVi::SAO_TU_VI,
                TuVi::SAO_PHA_QUAN,
                TuVi::SAO_THAM_LANG,
            ],
            TuVi::TI => [
                TuVi::SAO_THIEN_TUONG,
                TuVi::SAO_VU_KHUC,  // Example data for test
                TuVi::SAO_THIEN_DONG,
            ],
            TuVi::SUU => [
                TuVi::SAO_THAT_SAT,
                TuVi::SAO_THAI_AM,
                TuVi::SAO_THAM_LANG,
                TuVi::SAO_THIEN_DONG,
                TuVi::SAO_PHA_QUAN,
            ],
        ];

        $listSaoFromCung = $camTinhMap[$vitriCungMenh];
        foreach ($listChinhTinhCungMenh as $chinhTinhCungMenh) {
            if (array_search($chinhTinhCungMenh, $listSaoFromCung) !== false) return $chinhTinhCungMenh;
        }

        return false;
    }
}
