<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

trait LoginActions
{
    public function check(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        if (auth()->guard($this->guard)->attempt(['email' => $request->get('email'), 'password' => $request->get('senha')], true)) {
            return redirect()->to($this->redirectPage);
        }

        return redirect()->back()
            ->withErrors(['Usuário ou senha inválidos'])
            ->withInput($request->only('email'));
    }

    public function logout()
    {
        auth()->guard($this->guard)->logout();

        return redirect()->to($this->redirectAfterLogout);
    }
}