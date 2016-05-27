<?php

namespace App\Http\Controllers\Web\Instrutor;

use App\Entities\Materia;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Materias as MateriasRequest;
use File, Storage;

class MateriasController extends Controller
{
    public function index()
    {
        $materias = Materia::all();

        return view('instrutor.materias.index', compact('materias'));
    }

    public function adicionar()
    {
        return view('instrutor.materias.adicionar');
    }

    public function salvar(MateriasRequest $request)
    {
        $materia = Materia::create([
            'titulo' => $request->get('titulo')
        ]);

        $file = $request->file('imagem');

        $extension = $file->getClientOriginalExtension();

        Storage::put('materias/' . $materia->id . '.' . $extension, File::get($file));

        $materia->imagem = $materia->id . '.' . $extension;
        $materia->save();

        session()->flash('success', 'Matéria cadastrada com sucesso!');

        return back();
    }

    public function excluir($id)
    {
        //@TODO Verificar se o instrutor possui permissao para excluir

        $materia = Materia::findOrFail($id);

        $materia->delete();

        return back();
    }
}
