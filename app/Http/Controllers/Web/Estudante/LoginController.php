<?php

namespace App\Http\Controllers\Web\Estudante;

use App\Http\Controllers\Web\LoginActions;
use App\Http\Requests;
use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    protected $redirectPage = '/inicio';
    protected $redirectAfterLogout = '/login';
    protected $guard = 'estudante';

    use LoginActions;

    public function index()
    {
        return view('estudante.login.index');
    }

}
