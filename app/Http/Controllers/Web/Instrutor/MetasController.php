<?php

namespace App\Http\Controllers\Web\Instrutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class MetasController extends Controller
{
    public function index()
    {
        return view('instrutor.metas.index');
    }
}
