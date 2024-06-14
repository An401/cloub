<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::orderBy("id","desc")->get();
        $total = Teacher::count();
        return view('admin.teacher.home', compact(['teachers','total']));
    }

    public function create()
    {
        return view('admin.teacher.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
        'nome' => 'required',
        'email'=> 'required',
        'senha'=> 'required',
        'cpf'=> 'required',
        'disciplina'=> 'required',
        ]);
        $data = Teacher::create($validation);
        if ($data) {
            session ()->flash('success','Professor cadastrado com sucesso!');
            return redirect(route('teachers.index'));
        } else {
            session ()->flash('error','Ocorreu um erro');
            return redirect(route('admin.teachers/create'));
        }
    }
    public function edit($id)
    {
        $teachers = Teacher::findOrFail($id);
        return view('admin.teacher.update', compact(['teachers']));
    }

    public function delete($id)
    {
        $teachers = Teacher::findOrFail($id)->delete();
        if ($teachers) {
            session()->flash('success','Professor excluído com sucesso');
            return redirect(route('teachers.index'));
        } else {
            session()->flash('error','Ocorreu um erro');
            return redirect(route('teachers.index'));
        }
    }

    public function update(Request $request, $id)
    {
        $teachers = Teacher::findOrFail($id);

        $teachers->nome = $request->nome;
        $teachers->email = $request->email;
        $teachers->senha = $request->senha;
        $teachers->cpf = $request->cpf;
        $teachers->disciplina = $request->disciplina;
        $data = $teachers->save();
        if ($data) {
            session ()->flash('success','Dados atualizados com sucesso!');
            return redirect(route('teachers.index'));
        } else {
            session ()->flash('error','Ocorreu um erro');
            return redirect(route('teachers.update'));
        }
    }
}
