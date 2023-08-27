<?php

namespace App\Http\Controllers\auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;


class loginController extends Controller
{
    function login(){
        return view('pages.backend.auth.login');
    }

    public function loginPost(Request $request)
    {
        $data = $request->only('phone', 'password');

        if (Auth::attempt($data)) {
            return redirect()->intended('/home');
        } else {
            return back()->withErrors(['phone' => 'Invalid credentials']);
        }
    }


}
