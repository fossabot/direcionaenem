<?php

namespace App\Http\Controllers\Web\Site;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login');
    }

    public function logar(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('senha')])) {
            return redirect()->route(auth()->user()->papel . '.dashboard');
        }

        return redirect()->back()
            ->withErrors(['Usuário ou senha inválidos'])
            ->withInput($request->only('email'));
    }

    public function deslogar()
    {
        Auth::logout();

        return redirect()->to('login');
    }

    public function facebook()
    {
        return \Socialite::driver('github')->redirect();
    }

}
