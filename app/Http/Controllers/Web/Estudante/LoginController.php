<?php

namespace App\Http\Controllers\Web\Estudante;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    protected $redirectPage = '/inicio';
    protected $redirectAfterLogout = '/login';

    public function index()
    {
        return view('estudante.login.index');
    }

    public function check(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('senha')], true)) {
            return redirect()->to($this->redirectPage);
        }

        return redirect()->back()
            ->withErrors(['Usuário ou senha inválidos'])
            ->withInput($request->only('email'));
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->to($this->redirectAfterLogout);
    }
}
