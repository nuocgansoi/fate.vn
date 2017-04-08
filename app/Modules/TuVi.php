<?php
namespace App\Modules;

class TuVi
{
    //  Return data
    public $data = [];
    const GIO_AM = 'gio_am';
    const NGAY_AM = 'ngay_am';
    const THANG_AM = 'thang_am';
    const NAM_AM = 'nam_am';
    const AM_DUONG = 'am_duong';
    const CUNG_MENH = 'cung_menh';
    const CAN_MENH = 'can_menh';
    const CUNG_THAN = 'cung_than';
    const CUC_MENH = 'cuc_menh';
    const CHINH_TINH_INDEX_MAP = 'chinh_tinh_index_map';
    const LAY_SAO_XUNG_CHIEU = 'lay_sao_xung_chieu';
    //  Return data/

    //Xung Chieu
    const XUNG_CHIEU = 'xung_chieu';
    const CUNG_THE = 'cung_the';
    const CUNG_TAT = 'cung_tat';

    //  Const
    /// Gender + Âm Dương
    const MALE = 1;
    const FEMALE = 0;
    const DUONG_NAM = 'duong_nam';
    const AM_NAM = 'am_nam';
    const DUONG_NU = 'duong_nu';
    const AM_NU = 'am_nu';

    /// Can (Thiên can)
    const GIAP = 'giap';
    const AT = 'at';
    const BINH = 'binh';
    const DINH = 'dinh';
    const MAU = 'mau';
    const KY = 'ky';
    const CANH = 'canh';
    const TAN = 'tan';
    const NHAM = 'nham';
    const QUY = 'quy';

    /// Chi (Địa chi)
    const TI = 'ti';    // Tí (chuột)
    const SUU = 'suu';
    const DAN = 'dan';
    const MAO = 'mao';
    const THIN = 'thin';
    const TY = 'ty';    // Tỵ (rắn)
    const NGO = 'ngo';
    const MUI = 'mui';
    const THAN = 'than';
    const DAU = 'dau';
    const TUAT = 'tuat';
    const HOI = 'hoi';

    /// Cung chức (trên Địa bàn)
    const CC_MENH = 'menh';
    const CC_PHU_MAU = 'phu_mau';
    const CC_PHUC_DUC = 'phuc_duc';
    const CC_DIEN_TRACH = 'dien_trach';
    const CC_QUAN_LOC = 'quan_loc';
    const CC_NO_BOC = 'no_boc';
    const CC_THIEN_DI = 'thien_di';
    const CC_TAT_ACH = 'tat_ach';
    const CC_TAI_BACH = 'tai_bach';
    const CC_TU_TUC = 'tu_tuc';
    const CC_PHU_THE = 'phu_the';
    const CC_HUYNH_DE = 'huynh_de';

    /// Cục
    const KIM_TU_CUC = 'kim_tu_cuc';
    const THUY_NHI_CUC = 'thuy_nhi_cuc';
    const HOA_LUC_CUC = 'hoa_luc_cuc';
    const THO_NGU_CUC = 'tho_ngu_cuc';
    const MOC_TAM_CUC = 'moc_tam_cuc';

    /// Chính Tinh
    const SAO_TU_VI = 'tu_vi';
    const SAO_THIEN_CO = 'thien_co';
    const SAO_THAI_DUONG = 'thai_duong';
    const SAO_VU_KHUC = 'vu_khuc';
    const SAO_THIEN_DONG = 'thien_dong';
    const SAO_LIEM_TRINH = 'liem_trinh';
    const SAO_THIEN_PHU = 'thien_phu';
    const SAO_THAI_AM = 'thai_am';
    const SAO_THAM_LANG = 'tham_lang';
    const SAO_CU_MON = 'cu_mon';
    const SAO_THIEN_TUONG = 'thien_tuong';
    const SAO_THIEN_LUONG = 'thien_luong';
    const SAO_THAT_SAT = 'that_sat';
    const SAO_PHA_QUAN = 'pha_quan';

    /// ThaiTinhHe
    const SAO_THIEU_DUONG = 'thieu_duong';
    const SAO_TANG_MON = 'tang_mon';
    const SAO_THIEU_AM = 'thieu_am';
    const SAO_QUAN_PHU = 'quan_phu';
    const SAO_TU_PHU = 'tu_phu';
    const SAO_TUE_PHA = 'tue_pha';
    const SAO_LONG_DUC = 'long_duc';
    const SAO_BACH_TO = 'bach_to';
    const SAO_PHUC_DUC = 'phuc_duc';
    const SAO_DIEU_KHACH = 'dieu_khach';
    const SAO_TRUC_PHU = 'truc_phu';

    /// Loc ton Tinh He
    const SAO_LUC_SI = 'luc_si';
    const SAO_THANH_LONG = 'thanh_long';
    const SAO_TIEU_HAO = 'tieu_hao';
    const SAO_TUONG_QUAN = 'luc_si';
    const SAO_TAU_THO = 'tau_tho';
    const SAO_PHI_LIEM = 'phi_liem';
    const SAO_HI_THAN = 'hi_than';
    const SAO_BENH_PHU = 'benh_phu';
    const SAO_DAI_HAO = 'dai_hao';
    const SAO_PHUC_BINH = 'phuc_binh';

    /// Truong sinh tinh he
    const SAO_MOC_DUC = 'moc_duc';
    const SAO_QUAN_DOI = 'quan_doi';
    const SAO_LAM_QUAN = 'lam_quan';
    const SAO_DE_VUONG = 'de_vuong';
    const SAO_BENH = 'benh';
    const SAO_TU = 'tu';
    const SAO_MO = 'mo';
    const SAO_TUYET = 'tuyet';
    const SAO_THAI = 'thai';
    const SAO_DUONG = 'duong';

    /// SAO LUC SAT
    const SAO_KINH_DUONG = 'kinh_duong';
    const SAO_DA_LA = 'da_la';
    const SAO_DIA_KIEP = 'dia_kiep';
    const SAO_DIA_KHONG = 'dia_khong';
    const SAO_HOA_TINH = 'hoa_tinh';
    const SAO_LINH_TINH = 'linh_tinh';

    /// TA HUU
    const SAO_TA_PHU = 'ta_phu';
    const SAO_HUU_BAT = 'huu_bat';

    /// XUONG KHUC
    const SAO_VAN_XUONG = 'van_xuong';
    const SAO_VAN_KHUC = 'van_khuc';

    /// LONG PHUONG
    const SAO_LONG_TRI = 'long_tri';
    const SAO_PHUONG_CAC = 'phuong_cac';

    /// KHOI VIET
    const SAO_THIEN_KHOI = 'thien_khoi';
    const SAO_THIEN_VIET = 'thien_viet';

    /// KHOC HU
    const SAO_THIEN_KHOC = 'thien_khoc';
    const SAO_THIEN_HU = 'thien_hu';

    /// THAI TOA
    const SAO_TAM_THAI = 'tam_thai';
    const SAO_BAT_TOA = 'bat_toa';

    /// QUANG QUI
    const SAO_AN_QUANG = 'an_quang';
    const SAO_THIEN_QUI = 'thien_qui';
    //  Const/

    //  Đổi giờ dương sang giờ âm (24h -> 12 canh - giờ âm)
    public function getGioAm($gioDuong) // Đổi giờ dương sang giờ âm. Trả về tên giờ âm
    {
        $gioMap = [
            23 => TuVi::TI,
            0 => TuVi::TI,
            1 => TuVi::SUU,
            2 => TuVi::SUU,
            3 => TuVi::DAN,
            4 => TuVi::DAN,
            5 => TuVi::MAO,
            6 => TuVi::MAO,
            7 => TuVi::THIN,
            8 => TuVi::THIN,
            9 => TuVi::TY,
            10 => TuVi::TY,
            11 => TuVi::NGO,
            12 => TuVi::NGO,
            13 => TuVi::MUI,
            14 => TuVi::MUI,
            15 => TuVi::THAN,
            16 => TuVi::THAN,
            17 => TuVi::DAU,
            18 => TuVi::DAU,
            19 => TuVi::TUAT,
            20 => TuVi::TUAT,
            21 => TuVi::HOI,
            22 => TuVi::HOI,
        ];

        return $gioMap[$gioDuong];
    }

    //  Danh sách Cung vị trên Địa Bàn(Thuận - theo chiều kim đồng hồ)
    public function getCungMap()
    {
        $cungMap = [
            0 => TuVi::DAN,
            1 => TuVi::MAO,
            2 => TuVi::THIN,
            3 => TuVi::TY,
            4 => TuVi::NGO,
            5 => TuVi::MUI,
            6 => TuVi::THAN,
            7 => TuVi::DAU,
            8 => TuVi::TUAT,
            9 => TuVi::HOI,
            10 => TuVi::TI,
            11 => TuVi::SUU,
        ];

        return $cungMap;
    }

    public function getCungIndexes()
    {
        return array_flip($this->getCungMap());
    }

    public function getCung($cungIndex)
    {
        return $this->getCungMap()[$cungIndex];
    }

    public function getCungIndex($cung)
    {
        return $this->getCungIndexes()[$cung];
    }

    // Danh sách Cung chức trên Địa Bàn (Thuận - theo chiều kim đồng hồ)
    public function getCungChucMap()
    {
        $cungChucMap = [
            0 => TuVi::CC_MENH,
            1 => TuVi::CC_PHU_MAU,
            2 => TuVi::CC_PHUC_DUC,
            3 => TuVi::CC_DIEN_TRACH,
            4 => TuVi::CC_QUAN_LOC,
            5 => TuVi::CC_NO_BOC,
            6 => TuVi::CC_THIEN_DI,
            7 => TuVi::CC_TAT_ACH,
            8 => TuVi::CC_TAI_BACH,
            9 => TuVi::CC_TU_TUC,
            10 => TuVi::CC_PHU_THE,
            11 => TuVi::CC_HUYNH_DE,
        ];

        return $cungChucMap;
    }

    //  Danh sách Can trên Địa Bàn (Thuận - theo chiều kim đồng hồ)
    public function getCanMap()
    {
        $canMap = [
            0 => TuVi::GIAP,
            1 => TuVi::AT,
            2 => TuVi::BINH,
            3 => TuVi::DINH,
            4 => TuVi::MAU,
            5 => TuVi::KY,
            6 => TuVi::CANH,
            7 => TuVi::TAN,
            8 => TuVi::NHAM,
            9 => TuVi::QUY,
        ];

        return $canMap;
    }

    public function getCanIndexMap()
    {
        $canIndexMap = array_flip($this->getCanMap());

        return $canIndexMap;
    }

    // Danh sách Giờ Âm
    public function getGioAmMap()
    {
        $gioAmMap = [
            0 => TuVi::TI,
            1 => TuVi::SUU,
            2 => TuVi::DAN,
            3 => TuVi::MAO,
            4 => TuVi::THIN,
            5 => TuVi::TY,
            6 => TuVi::NGO,
            7 => TuVi::MUI,
            8 => TuVi::THAN,
            9 => TuVi::DAU,
            10 => TuVi::TUAT,
            11 => TuVi::HOI,
        ];

        return $gioAmMap;
    }

    public function getGioAmIndex($gioAm)
    {
        return array_flip($this->getGioAmMap())[$gioAm];
    }


    // Xác định Âm - Dương (Nam - Nữ)
    public function getAmDuong($can, $gender)
    {
        $canAmDuongMap = [
            TuVi::GIAP => 1,
            TuVi::BINH => 1,
            TuVi::MAU => 1,
            TuVi::CANH => 1,
            TuVi::NHAM => 1,

            TuVi::AT => 0,
            TuVi::DINH => 0,
            TuVi::KY => 0,
            TuVi::TAN => 0,
            TuVi::QUY => 0,
        ];
        $canGender = $canAmDuongMap[$can] . $gender;
        if ($canGender == '11') return TuVi::DUONG_NAM;
        if ($canGender == '01') return TuVi::AM_NAM;
        if ($canGender == '10') return TuVi::DUONG_NU;
        if ($canGender == '00') return TuVi::AM_NU;

        return null;
    }

    // Xác định cung của Mệnh
    public function getCungMenh($thangAm, $gioAm)
    {
        $thangAmIndex = $thangAm - 1;
        $gioAmIndex = $this->getGioAmIndex($gioAm);

        $cungMenhIndex = $thangAmIndex - $gioAmIndex;
        if ($cungMenhIndex < 0) {
            $cungMenhIndex += 12;
        }
        $cungMenh = $this->getCungMap()[$cungMenhIndex];

        return $cungMenh;
    }

    // Xác định cung của Thân
    public function getCungThan($thangAm, $gioAm)
    {
        $thangAmIndex = $thangAm - 1;
        $gioAmIndex = $this->getGioAmIndex($gioAm);
        $cungThanIndex = ($thangAmIndex + $gioAmIndex) % 12;
        $cungThan = $this->getCungMap()[$cungThanIndex];

        return $cungThan;
    }

    // Xác định index của Cung vị
    public function getCungViIndex($cungVi)
    {
        return array_flip($this->getCungMap())[$cungVi];
    }

    // Xác định can của Mệnh dựa vào năm Âm, cung của Mệnh
    public function getCanMenh($namAm, $cungMenh)
    {
        $canNamSinh = $this->getCanNam($namAm);
        $canNamSinhOrder = $this->getCanOrder($canNamSinh);
        $canCungDanOrder = (2 * $canNamSinhOrder + 1) % 10;
        $canCungDanIndex = $canCungDanOrder - 1;

        $cungMenhIndex = $this->getCungViIndex($cungMenh);
        $canMenhIndex = $this->getCanMenhIndex($canCungDanIndex, $cungMenhIndex);
        $canMenh = $this->getCanMap()[$canMenhIndex];

        return $canMenh;
    }

    public function getCanMenhIndex($canCungDanIndex, $cungMenhIndex)
    {
        $canMenhIndex = $canCungDanIndex + $cungMenhIndex;
        $canMenhIndex %= 10;

        return $canMenhIndex;
    }

    public function getCanOrder($can)
    {
        return $this->getCanIndexMap()[$can] + 1;
    }

    //  Can năm <= đuôi năm [0, 9]
    public function getCanNamMap()
    {
        $canNamMap = [
            0 => TuVi::CANH,
            1 => TuVi::TAN,
            2 => TuVi::NHAM,
            3 => TuVi::QUY,
            4 => TuVi::GIAP,
            5 => TuVi::AT,
            6 => TuVi::BINH,
            7 => TuVi::DINH,
            8 => TuVi::MAU,
            9 => TuVi::KY,
        ];

        return $canNamMap;
    }

    public function getCanNam($namSinh)
    {
        $duoi = $namSinh % 10;

        return $this->getCanNamMap()[$duoi];
    }

    //  Chi năm <= Số năm % 12
    public function getChiNamMap()  // Index = số dư
    {
        $chiNamMap = [
            0 => TuVi::THAN,
            1 => TuVi::DAU,
            2 => TuVi::TUAT,
            3 => TuVi::HOI,
            4 => TuVi::TI,
            5 => TuVi::SUU,
            6 => TuVi::DAN,
            7 => TuVi::MAO,
            8 => TuVi::THIN,
            9 => TuVi::TY,
            10 => TuVi::NGO,
            11 => TuVi::MUI,
        ];

        return $chiNamMap;
    }

    public function getChiNam($namSinh)
    {
        $soDu = $namSinh % 12;

        return $this->getChiNamMap()[$soDu];
    }

    // Xác định Cục của Mệnh
    public function getCuc($cungMenh, $canMenh)
    {
        $cucOrderMap = [
            1 => TuVi::KIM_TU_CUC,
            2 => TuVi::THUY_NHI_CUC,
            3 => TuVi::HOA_LUC_CUC,
            4 => TuVi::THO_NGU_CUC,
            5 => TuVi::MOC_TAM_CUC,
        ];
        $cucOrder = $this->get5HanhNapAmMap()[$cungMenh] + $this->get5HanhNapAmMap()[$canMenh];
        if ($cucOrder > 5) $cucOrder -= 5;

        return $cucOrderMap[$cucOrder];
    }

    /// Quy ước Ngũ hành nạp âm
    public function get5HanhNapAmMap()
    {
        $valueMap = [
            TuVi::GIAP => 1,
            TuVi::AT => 1,

            TuVi::BINH => 2,
            TuVi::DINH => 2,

            TuVi::MAU => 3,
            TuVi::KY => 3,

            TuVi::CANH => 4,
            TuVi::TAN => 4,

            TuVi::NHAM => 5,
            TuVi::QUY => 5,

            TuVi::TI => 0,
            TuVi::SUU => 0,
            TuVi::NGO => 0,
            TuVi::MUI => 0,

            TuVi::DAN => 1,
            TuVi::MAO => 1,
            TuVi::THAN => 1,
            TuVi::DAU => 1,

            TuVi::THIN => 2,
            TuVi::TY => 2,
            TuVi::TUAT => 2,
            TuVi::HOI => 2,
        ];

        return $valueMap;
    }

    // Lấy số Cục
    public function getCucValue($cucName)
    {
        $cucValueMap = [
            TuVi::KIM_TU_CUC => 4,
            TuVi::THUY_NHI_CUC => 2,
            TuVi::HOA_LUC_CUC => 6,
            TuVi::THO_NGU_CUC => 5,
            TuVi::MOC_TAM_CUC => 3,
        ];

        return $cucValueMap[$cucName];
    }

    // Danh sách Lục Cung (xác định nhanh sao Tử Vi)
    public function getLucCungMap()
    {
        $lucCung = [
            0 => TuVi::DAN,
            1 => TuVi::SUU,
            2 => TuVi::THIN,
            3 => TuVi::NGO,
            4 => TuVi::HOI,
            5 => TuVi::DAU,
        ];

        return $lucCung;
    }

    // Xác định sao Tử Vi
    public function getSaoTuViIndex($ngayAm, $cucMenhValue)
    {
        $thuong = (int)floor($ngayAm / $cucMenhValue);
        $soDu = $ngayAm % $cucMenhValue;
        if ($soDu == 0) {
            $thuong -= 1;
            $soDu = $cucMenhValue;
        }
        $lucCung = $this->getLucCungMap();
        $tuviFirstIndex = $lucCung[$cucMenhValue - $soDu];
        $tuviIndex = array_flip($this->getCungMap())[$tuviFirstIndex] + $thuong;
        if ($tuviIndex > 11) {
            $tuviIndex -= 12;
        }

        return $tuviIndex;
    }

    // Xác định vị trí các chính tinh
    public function getChinhTinhIndexMap($tuviIndex)
    {
        $chinhTinhIndexMap = [
            TuVi::SAO_TU_VI => $tuviIndex,
            TuVi::SAO_THIEN_CO => $this->getChinhTinhIndexFromSaoTuVi($tuviIndex, TuVi::SAO_THIEN_CO),
            TuVi::SAO_THAI_DUONG => $this->getChinhTinhIndexFromSaoTuVi($tuviIndex, TuVi::SAO_THAI_DUONG),
            TuVi::SAO_VU_KHUC => $this->getChinhTinhIndexFromSaoTuVi($tuviIndex, TuVi::SAO_VU_KHUC),
            TuVi::SAO_THIEN_DONG => $this->getChinhTinhIndexFromSaoTuVi($tuviIndex, TuVi::SAO_THIEN_DONG),
            TuVi::SAO_LIEM_TRINH => $this->getChinhTinhIndexFromSaoTuVi($tuviIndex, TuVi::SAO_LIEM_TRINH),
            TuVi::SAO_THIEN_PHU => $this->getChinhTinhIndexFromSaoTuVi($tuviIndex, TuVi::SAO_THIEN_PHU),
            TuVi::SAO_THAI_AM => $this->getChinhTinhIndexFromSaoTuVi($tuviIndex, TuVi::SAO_THAI_AM),
            TuVi::SAO_THAM_LANG => $this->getChinhTinhIndexFromSaoTuVi($tuviIndex, TuVi::SAO_THAM_LANG),
            TuVi::SAO_CU_MON => $this->getChinhTinhIndexFromSaoTuVi($tuviIndex, TuVi::SAO_CU_MON),
            TuVi::SAO_THIEN_TUONG => $this->getChinhTinhIndexFromSaoTuVi($tuviIndex, TuVi::SAO_THIEN_TUONG),
            TuVi::SAO_THIEN_LUONG => $this->getChinhTinhIndexFromSaoTuVi($tuviIndex, TuVi::SAO_THIEN_LUONG),
            TuVi::SAO_THAT_SAT => $this->getChinhTinhIndexFromSaoTuVi($tuviIndex, TuVi::SAO_THAT_SAT),
            TuVi::SAO_PHA_QUAN => $this->getChinhTinhIndexFromSaoTuVi($tuviIndex, TuVi::SAO_PHA_QUAN),
        ];

        return $chinhTinhIndexMap;
    }

    public function getChinhTinhIndex($chinhTinh, $chinhTinhIndexMap)
    {
        return $chinhTinhIndexMap[$chinhTinh];
    }

    public function getChinhTinhIndexFromSaoTuVi($tuViIndex, $chinhTinh)
    {
        $result = 0;
        switch ($chinhTinh) {
            case TuVi::SAO_TU_VI:
                $result = $tuViIndex;
                break;
            case TuVi::SAO_THIEN_CO:
                $result = $tuViIndex - 1;
                break;
            case TuVi::SAO_THAI_DUONG:
                $result = $tuViIndex - 3;
                break;
            case TuVi::SAO_VU_KHUC:
                $result = $tuViIndex - 4;
                break;
            case TuVi::SAO_THIEN_DONG:
                $result = $tuViIndex - 5;
                break;
            case TuVi::SAO_LIEM_TRINH:
                $result = $tuViIndex - 8;
                break;
            case TuVi::SAO_THIEN_PHU:
                $result = 12 - $tuViIndex;
                break;
            case TuVi::SAO_THAI_AM:
                $result = 12 - $tuViIndex + 1;
                break;
            case TuVi::SAO_THAM_LANG:
                $result = 12 - $tuViIndex + 2;
                break;
            case TuVi::SAO_CU_MON:
                $result = 12 - $tuViIndex + 3;
                break;
            case TuVi::SAO_THIEN_TUONG:
                $result = 12 - $tuViIndex + 4;
                break;
            case TuVi::SAO_THIEN_LUONG:
                $result = 12 - $tuViIndex + 5;
                break;
            case TuVi::SAO_THAT_SAT:
                $result = 12 - $tuViIndex + 6;
                break;
            case TuVi::SAO_PHA_QUAN:
                $result = 12 - $tuViIndex + 10;
                break;
        }
        if ($result > 11) $result -= 12;
        elseif ($result < 0) $result += 12;

        return $result;
    }

    ///Thai Tinh He Map
    public function getThaiTinhHeMap()
    {
        $thaiTinhHeMap = [
            TuVi::SAO_THIEU_DUONG,
            TuVi::SAO_TANG_MON,
            TuVi::SAO_THIEU_AM,
            TuVi::SAO_QUAN_PHU,
            TuVi::SAO_TU_PHU,
            TuVi::SAO_TUE_PHA,
            TuVi::SAO_LONG_DUC,
            TuVi::SAO_BACH_TO,
            TuVi::SAO_PHUC_DUC,
            TuVi::SAO_DIEU_KHACH,
            TuVi::SAO_TRUC_PHU,
        ];

        return $thaiTinhHeMap;
    }

    //Loc TON TINH HE

    public function getLocTonMap()
    {
        $locTonMap = [
            TuVi::GIAP => TuVi::DAN,
            TuVi::AT => TuVi::MAO,
            TuVi::BINH => TuVi::TY,
            TuVi::DINH => TuVi::NGO,
            TuVi::MAU => TuVi::TY,
            TuVi::KY => TuVi::NGO,
            TuVi::CANH => TuVi::THAN,
            TuVi::TAN => TuVi::DAU,
            TuVi::NHAM => TuVi::HOI,
            TuVi::QUY => TuVi::TI,
        ];

        return $locTonMap;
    }

    public function getLocTonTinhHeMap()
    {
        $locTonTinhHeMap = [
            TuVi::SAO_THANH_LONG,
            TuVi::SAO_TIEU_HAO,
            TuVi::SAO_TUONG_QUAN,
            TuVi::SAO_TAU_THO,
            TuVi::SAO_PHI_LIEM,
            TuVi::SAO_HI_THAN,
            TuVi::SAO_BENH_PHU,
            TuVi::SAO_DAI_HAO,
            TuVi::SAO_PHUC_BINH,
            TuVi::SAO_QUAN_PHU,
        ];

        return $locTonTinhHeMap;
    }

    public function getLocTonTinhHeIndexMap($canNamSinh, $gioiTinh)
    {
        /// Tim diem bat dau
        $locTonMap = $this->getLocTonMap();
        $viTriSring = $locTonMap[$canNamSinh];
        /// Tim chieu an sao
        $amDuong = $this->getAmDuong($canNamSinh, $gioiTinh);
        if ($amDuong == TuVi::DUONG_NAM || $amDuong == TuVi::AM_NU) {
            $thuan = true;
        } else {
            $thuan = false;
        }
        $locTonTinhHeIndexMap = $this->anSaoTaiViTri($viTriSring, $this->getLocTonTinhHeMap(), $thuan);

        return $locTonTinhHeIndexMap;
    }

    /// TRUONG SINH TINH HE
    public function getTruongSinhMap()
    {
        $truongSinhMap = [
            TuVi::MOC_TAM_CUC => TuVi::HOI,
            TuVi::HOA_LUC_CUC => TuVi::DAN,
            TuVi::THUY_NHI_CUC => TuVi::THAN,
            TuVi::THO_NGU_CUC => TuVi::THAN,
        ];

        return $truongSinhMap;
    }

    public function getTruongSinhTinhHeMap()
    {
        $truongSinhTinhHeMap = [
            TuVi::SAO_MOC_DUC,
            TuVi::SAO_QUAN_DOI,
            TuVi::SAO_LAM_QUAN,
            TuVi::SAO_DE_VUONG,
            TuVi::SAO_BENH,
            TuVi::SAO_TU,
            TuVi::SAO_MO,
            TuVi::SAO_TUYET,
            TuVi::SAO_THAI,
            TuVi::SAO_DUONG,
        ];

        return $truongSinhTinhHeMap;
    }

    public function getTruongSinhTinhHeIndexMap($cuc, $canNamSinh, $gioiTinh)
    {
        // Tim diem bat dau
        $truongSinhMap = $this->getTruongSinhMap();
        $viTriSring = $truongSinhMap[$cuc];
        $amDuong = $this->getAmDuong($canNamSinh, $gioiTinh);
        if ($amDuong == TuVi::DUONG_NAM || $amDuong == TuVi::AM_NU) {
            $thuan = true;
        } else {
            $thuan = false;
        }
        $truongSinhTinhHeIndexMap = $this->anSaoTaiViTri($viTriSring, $this->getTruongSinhTinhHeMap(), $thuan);

        return $truongSinhTinhHeIndexMap;
    }

    /// SAO LUC SAT

    public function getBatDauHoaTinhMap()
    {
        $batDauHoaTinhMap = [
            TuVi::DAN => TuVi::SUU,
            TuVi::NGO => TuVi::SUU,
            TuVi::TUAT => TuVi::SUU,

            TuVi::THAN => TuVi::DAN,
            TuVi::TI => TuVi::DAN,
            TuVi::THIN => TuVi::DAN,

            TuVi::TY => TuVi::MAO,
            TuVi::DAU => TuVi::MAO,
            TuVi::SUU => TuVi::MAO,

            TuVi::HOI => TuVi::DAN,
            TuVi::MAO => TuVi::DAN,
            TuVi::MUI => TuVi::DAN,
        ];

        return $batDauHoaTinhMap;
    }

    public function getBatDauHoaTinhIndex($chiNamSinhString)
    {
        $batDauHoaTinhMap = $this->getBatDauHoaTinhMap();
        $batDauHoaTinh = $batDauHoaTinhMap[$chiNamSinhString];
        $batDauHoaTinhIndex = $this->getCungIndex($batDauHoaTinh);

        return $batDauHoaTinhIndex;
    }

    public function getBatDauLinhTinhMap()
    {
        $batDauHoaTinhMap = [
            TuVi::DAN => TuVi::MAO,
            TuVi::NGO => TuVi::MAO,
            TuVi::TUAT => TuVi::MAO,

            TuVi::THAN => TuVi::TUAT,
            TuVi::TI => TuVi::TUAT,
            TuVi::THIN => TuVi::TUAT,

            TuVi::TY => TuVi::TUAT,
            TuVi::DAU => TuVi::TUAT,
            TuVi::SUU => TuVi::TUAT,

            TuVi::HOI => TuVi::TUAT,
            TuVi::MAO => TuVi::TUAT,
            TuVi::MUI => TuVi::TUAT,
        ];

        return $batDauHoaTinhMap;
    }

    public function getBatDauLinhTinhIndex($chiNamSinhString)
    {
        $batDauLinhTinhMap = $this->getBatDauLinhTinhMap();
        $batDauLinhTinh = $batDauLinhTinhMap[$chiNamSinhString];
        $batDauLinhTinhIndex = $this->getCungIndex($batDauLinhTinh);

        return $batDauLinhTinhIndex;
    }

    public function getLucSatIndexMap($canNamSinhString, $gioSinh, $chiNamSinhString)
    {
        $lucSatIndexMap = [];
        //Tim vi tri an Loc Ton
        $cung = $this->getLocTonMap()[$canNamSinhString];
        $indexCung = $this->getCungIndex($cung);
        //Kinh duong
        if ($indexCung == 11) {
            $lucSatIndexMap[TuVi::SAO_KINH_DUONG] = 0;
        } else {
            $lucSatIndexMap[TuVi::SAO_KINH_DUONG] = $indexCung + 1;
        }
        //Da la
        if ($indexCung == 11) {
            $lucSatIndexMap[TuVi::SAO_DA_LA] = 0;
        } else {
            $lucSatIndexMap[TuVi::SAO_DA_LA] = $indexCung - 1;
        }
        //Gio Sinh Index
        $gioSinhIndex = $this->getGioAmIndex($gioSinh);
        // Dia Kiep
        $hoiIndex = $this->getCungIndex(TuVi::HOI);
        $diaKiepIndex = $this->demXuoi($hoiIndex, $gioSinhIndex);
        $lucSatIndexMap[TuVi::SAO_DIA_KIEP] = $diaKiepIndex;

        //Dia Khong
        $diaKhongindex = $this->demNguoc($hoiIndex, $gioSinhIndex);
        $lucSatIndexMap[TuVi::SAO_DIA_KHONG] = $diaKhongindex;

        //Hoa Tinh
        $batDauHoaTinh = $this->getBatDauHoaTinhIndex($chiNamSinhString);
        $hoaTinhIndex = $this->demXuoi($batDauHoaTinh, $gioSinhIndex);
        $lucSatIndexMap[TuVi::SAO_HOA_TINH] = $hoaTinhIndex;

        //Linh Tinh
        $batDauLinhTinh = $this->getBatDauLinhTinhIndex($chiNamSinhString);
        $linhTinhIndex = $this->demNguoc($batDauLinhTinh, $gioSinhIndex);
        $lucSatIndexMap[TuVi::SAO_LINH_TINH] = $linhTinhIndex;

        return $lucSatIndexMap;
    }

    // Ham Dung CHung LONG Phuong, TA HUU, Xuong KHUC
    public function thinDemXuoi($thangAmIndex)
    {
        $cungThinIndex = $this->getCungIndex(TuVi::THIN);
        $index = $this->demXuoi($cungThinIndex, $thangAmIndex);

        return $index;
    }

    public function tuatDemNguoc($thangAmIndex)
    {
        $cungTuatIndex = $this->getCungIndex(TuVi::TUAT);
        $index = $this->demNguoc($cungTuatIndex, $thangAmIndex);

        return $index;
    }

    // TA HUU TINH
    public function getTaHuuTinhIndexMap($thangAmIndex)
    {
        $taHuuTinhIndexMap = [];
        //Ta phu
        $taPhuIndex = $this->thinDemXuoi($thangAmIndex);
        $taHuuTinhIndexMap[TuVi::SAO_TA_PHU] = $taPhuIndex;

        // Huu Bat
        $huuBatIndex = $this->tuatDemNguoc($thangAmIndex);
        $taHuuTinhIndexMap[TuVi::SAO_HUU_BAT] = $huuBatIndex;

        return $taHuuTinhIndexMap;
    }

    // XUONG KHUC TINH
    public function getXuongKhucTinhIndexMap($thangAmIndex)
    {
        $xuongKhucTinhIndexMap = [];

        //Van Xuong
        $vanXuongIndex = $this->tuatDemNguoc($thangAmIndex);
        $xuongKhucTinhIndexMap[TuVi::SAO_VAN_XUONG] = $vanXuongIndex;

        //Van Khuc
        $vanKhucIndex = $this->thinDemXuoi($thangAmIndex);
        $xuongKhucTinhIndexMap[TuVi::SAO_VAN_KHUC] = $vanKhucIndex;

        return $xuongKhucTinhIndexMap;
    }

    // LONG PHUONG TINH
    public function getLongPhuongTinhIndexMap($thangAmIndex)
    {
        $longPhuongTinhIndexMap = [];

        //Long tri
        $longTriIndex = $this->thinDemXuoi($thangAmIndex);
        $longPhuongTinhIndexMap[TuVi::SAO_VAN_XUONG] = $longTriIndex;

        //Phuong Cac
        $phuongCacIndex = $this->tuatDemNguoc($thangAmIndex);
        $longPhuongTinhIndexMap[TuVi::SAO_VAN_KHUC] = $phuongCacIndex;

        return $longPhuongTinhIndexMap;
    }

    //KHOI VIET TINH
    public function getThienKhoiMap()
    {
        $thienKhoiMap = [
            TuVi::GIAP => TuVi::SUU,
            TuVi::MAU => TuVi::SUU,

            TuVi::AT => TuVi::TI,
            TuVi::KY => TuVi::TI,

            TuVi::CANH => TuVi::NGO,
            TuVi::TAN => TuVi::NGO,

            TuVi::BINH => TuVi::HOI,
            TuVi::DINH => TuVi::HOI,

            TuVi::NHAM => TuVi::MAO,
            TuVi::QUY => TuVi::MAO,
        ];

        return $thienKhoiMap;
    }

    public function getThienVietMap()
    {
        $thienVietMap = [
            TuVi::GIAP => TuVi::MUI,
            TuVi::MAU => TuVi::MUI,

            TuVi::AT => TuVi::THAN,
            TuVi::KY => TuVi::THAN,

            TuVi::CANH => TuVi::DAN,
            TuVi::TAN => TuVi::DAN,

            TuVi::BINH => TuVi::DAU,
            TuVi::DINH => TuVi::DAU,

            TuVi::NHAM => TuVi::TY,
            TuVi::QUY => TuVi::TY,
        ];

        return $thienVietMap;
    }

    public function getKhoiVietTinhIndexMap($canNamSinh)
    {
        $khoiVietTinhIndexMap = [];

        //Thien Khoi
        $thienKhoiMap = $this->getThienKhoiMap();
        $thienKhoiIndex = $this->getCungIndex($thienKhoiMap[$canNamSinh]);
        $khoiVietTinhIndexMap[TuVi::SAO_THIEN_KHOI] = $thienKhoiIndex;

        //Thien Viet
        $thienVietMap = $this->getThienVietMap();
        $thienVietIndex = $this->getCungIndex($thienVietMap[$canNamSinh]);
        $khoiVietTinhIndexMap[TuVi::SAO_THIEN_VIET] = $thienVietIndex;

        return $khoiVietTinhIndexMap;
    }

    // THAI TOA TINH
    public function getThaiToaTinhIndexMap($thangAmIndex, $ngayAm)
    {
        $thaiToaTinhIndexMap = [];
        $ngaySinhIndex = $ngayAm - 1;
        $taHuuTinhIndexMap = $this->getTaHuuTinhIndexMap($thangAmIndex);

        //Tam Thai
        $taPhuIndex = $taHuuTinhIndexMap[TuVi::SAO_TA_PHU];
        $tamThaiIndex = $this->demXuoi($taPhuIndex, $ngaySinhIndex);
        $thaiToaTinhIndexMap[TuVi::SAO_TAM_THAI] = $tamThaiIndex;

        //Bat Toa
        $huuBatIndex = $taHuuTinhIndexMap[TuVi::SAO_HUU_BAT];
        $batToaIndex = $this->demNguoc($huuBatIndex, $ngaySinhIndex);
        $thaiToaTinhIndexMap[TuVi::SAO_BAT_TOA] = $batToaIndex;

        return $thaiToaTinhIndexMap;
    }

    //QUANG QUI TINH
    public function getQuangQuiTinhIndexMap($thangAmIndex, $ngayAm)
    {
        $quangQuiTinhIndexMap = [];
        $ngayAmIndex = $ngayAm - 1;
        $xuongKhucTinhIndexMap = $this->getXuongKhucTinhIndexMap($thangAmIndex);

        //An Quang
        $vanXuongIndex = $xuongKhucTinhIndexMap[TuVi::SAO_VAN_XUONG];
        $anQuangIndex = $this->demXuoi($vanXuongIndex, $ngayAmIndex);
        $quangQuiTinhIndexMap[TuVi::SAO_AN_QUANG] = $anQuangIndex;

        //Thien Qui
        $vanKhucIndex = $xuongKhucTinhIndexMap[TuVi::SAO_VAN_KHUC];
        $thienQuiIndex = $this->demNguoc($vanKhucIndex, $ngayAmIndex);
        $quangQuiTinhIndexMap[TuVi::SAO_THIEN_QUI] = $thienQuiIndex;

        return $quangQuiTinhIndexMap;

    }

    public function demXuoi($batDau, $soDem, $limit = 12)
    {
        $ketQua = $batDau + $soDem;
        $ketQua = $ketQua % $limit;

        return $ketQua;
    }

    public function demNguoc($batDau, $soDem, $limit = 12)
    {
        $ketQua = $batDau - $soDem;
        if ($ketQua < 0) {
            $thuong = abs($ketQua) / $limit;
            $ketQua = $ketQua + intval(ceil($thuong) * $limit);
        };

        return $ketQua;
    }

    public function anSaoTaiViTri($viTriString, $saoMap, $thuan = true)
    {
        $viTri = $this->getCungIndex($viTriString);
        $chinhTinhIndexMap = [];
        $j = 0;
        // Chieu Thuan
        if ($thuan) {
            /// Chay vong lap tu @vitri den cuoi $cungMap
            for ($i = $viTri; $i < 12; $i++) {
                if (isset($saoMap[$j])) {
                    $chinhTinhIndexMap[$saoMap[$j]] = $i;
                }
                $j++;
            }
            /// Chay vong lap tu 0 den $vitri
            for ($i = 0; $i < $viTri; $i++) {
                if (isset($saoMap[$j])) {
                    $chinhTinhIndexMap[$saoMap[$j]] = $i;
                }
                $j++;
            }
        } else {
            /// Chay vong lap tu $viTri den 0
            for ($i = $viTri; $i >= 0; $i--) {
                if (isset($saoMap[$j])) {
                    $chinhTinhIndexMap[$saoMap[$j]] = $i;
                }
                $j++;
            }
            /// Chay vong lap tu 11 den vi tri - 1;
            for ($i = 11; $i > $viTri; $i--) {
                if (isset($saoMap[$j])) {
                    $chinhTinhIndexMap[$saoMap[$j]] = $i;
                }
                $j++;
            }
        }

        return $chinhTinhIndexMap;
    }
}
