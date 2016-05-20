<?php

namespace App\Http\Controllers\Web\Admin;

use App\Entities\Instrutor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InstrutoresController extends Controller
{
    public function index()
    {
        $instrutores = Instrutor::paginate(5);

        return view('instrutor.index', compact('instrutores'));
    }

    public function editar($id)
    {
        $instrutor = Instrutor::find($id);

        return view('admin.instrutores.editar', compact('instrutor'));
    }
}
