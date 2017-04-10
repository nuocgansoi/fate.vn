<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function soon()
    {
        $this->setTitle(trans('string.coming_soon'));
        return view('soon', $this->viewData);
    }
}
