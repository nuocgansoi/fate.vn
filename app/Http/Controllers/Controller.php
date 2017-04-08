<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $data = [];
    /**
     * @var Service
     */
    public $service;

    protected $viewData = [];

    /**
     * Controller constructor.
     */

    protected function setTitle($title, $brandingSubfix = false)
    {
        if ($brandingSubfix) {
            $title .= ' ' . config('app.name');
        }
        $this->viewData['title'] = $title;

        return $this;
    }

    protected function viewData($key, $value = null)
    {
        if (is_string($key)) {
            $this->viewData[$key] = $value;
        }

        if (is_array($key)) {
            $this->viewData = array_merge($key, $this->viewData);
        }

        return $this;
    }

    protected function renderView($view, $mergeData = [])
    {
        return view($view, $this->viewData, $mergeData);
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service)
    {
        $this->service = app($service);
    }
}
