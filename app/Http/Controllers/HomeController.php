<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function soon()
    {
        $this->setTitle(trans('string.coming_soon'));
        return view('soon', $this->viewData);
    }
}
