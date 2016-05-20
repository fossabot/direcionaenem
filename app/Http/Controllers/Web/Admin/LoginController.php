<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Web\LoginActions;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    use LoginActions;

    protected $redirectPage = 'admin/inicio';
    protected $guard = 'admin';

    public function index()
    {
        return view('admin.login.index');
    }

}
