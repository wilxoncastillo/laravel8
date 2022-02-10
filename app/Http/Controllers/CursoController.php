<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoRequest;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        $cursos = Curso::paginate();

        return view('cursos.index', compact('cursos'));
    }
    
    public function create() {
        return view('cursos.create');
    }
    
    public function store(CursoRequest $request) {
        $curso = Curso::create($request->all());
        
        return redirect()->route('cursos.show', compact('curso'));
    }

    public function show(Curso $curso) {

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso) {

        return view('cursos.edit', compact('curso'));
    }

    public function update(CursoRequest $request, Curso $curso) {
        $curso->name = $request->get('name');
        $curso->description = $request->get('description');
        $curso->category = $request->get('category');
        $curso->save();
        
        return redirect()->route('cursos.show', compact('curso'));
    }
}
