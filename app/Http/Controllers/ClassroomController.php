<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::orderBy("id","desc")->get();
        $total = Classroom::count();
        return view('admin.classroom.home', compact(['classrooms','total']));
    }

    public function create()
    {
        return view('admin.classroom.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
        'serie'=> 'required',
        'turma'=> 'required',
        'turno'=> 'required',
        ]);
        $data = Classroom::create($validation);
        if ($data) {
            session ()->flash('success','Livro cadastrado com sucesso!');
            return redirect(route('classrooms.index'));
        } else {
            session ()->flash('error','Ocorreu um erro');
            return redirect(route('admin.classrooms/create'));
        }
    }
    public function edit($id)
    {
        $classrooms = Classroom::findOrFail($id);
        return view('admin.classroom.update', compact(['classrooms']));
    }

    public function delete($id)
    {
        $classrooms = Classroom::findOrFail($id)->delete();
        if ($classrooms) {
            session()->flash('success','Livro excluído com sucesso');
            return redirect(route('classrooms.index'));
        } else {
            session()->flash('error','Ocorreu um erro');
            return redirect(route('classrooms.index'));
        }
    }

    public function update(Request $request, $id)
    {
        $classrooms = Classroom::findOrFail($id);

        $classrooms->serie = $request->serie;
        $classrooms->turma = $request->turma;
        $classrooms->turno = $request->turno;
        $data = $classrooms->save();
        if ($data) {
            session ()->flash('success','Dados atualizados com sucesso!');
            return redirect(route('classrooms.index'));
        } else {
            session ()->flash('error','Ocorreu um erro');
            return redirect(route('classrooms.update'));
        }
    }
}
