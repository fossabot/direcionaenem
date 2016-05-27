<?php

namespace App\Http\Controllers\Web\Instrutor;

use App\Http\Controllers\Web\LoginActions;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    protected $redirectPage = '/instrutor/inicio';
    protected $redirectAfterLogout = '/instrutor/login';
    protected $guard = 'instrutor';

    use LoginActions;

    public function index()
    {
        return view('instrutor.login.index');
    }
}
