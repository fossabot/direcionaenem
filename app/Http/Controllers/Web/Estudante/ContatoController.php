<?php

namespace App\Http\Controllers\Web\Estudante;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContatoController extends Controller
{
    public function index()
    {
        return view('estudante.contato.index');
    }
}
