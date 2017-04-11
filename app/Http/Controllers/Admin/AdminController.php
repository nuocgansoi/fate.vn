<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        if(\auth()->check()) {
            return redirect()->route('admin.dashboard');
        }

        $this->setTitle(trans('string.login'));

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'role' => User::ROLE_ADMIN,
        ])
        ) {

            return redirect()->intended('admin/dashboard');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
