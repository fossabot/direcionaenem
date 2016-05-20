<?php

namespace App\Http\Controllers\Web\Estudante;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{
    public function index()
    {
    	return view('estudante.usuarios.index');
    }

    public function editar()
    {
    	return view('estudante.usuarios.editar');
    }

    public function ajuda ()
    {
    	return view('estudante.usuarios.ajuda');
    }

    public function faleconosco ()
    {
    	return view('estudante.usuarios.fale-conosco');
    }

}
