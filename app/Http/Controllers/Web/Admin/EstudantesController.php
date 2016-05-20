<?php

namespace App\Http\Controllers\Web\Admin;

use App\Entities\Estudante;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EstudantesController extends Controller
{
    public function index()
    {
        $estudantes = Estudante::paginate(5);

        return view('admin.estudantes.index', compact('estudantes'));
    }
}
