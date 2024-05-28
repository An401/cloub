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

    public function save(Request $request)
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
        $nome = $request->nome;
        $email = $request->email;
        $senha = $request->senha;
        $cpf = $request->cpf;
        $disciplina = $request->disciplina;

        $teachers->nome = $nome;
        $teachers->email = $email;
        $teachers->senha = $senha;
        $teachers->cpf = $cpf;
        $teachers->disciplina = $disciplina;
        $data = $teachers->save();
        if ($data) {
            session ()->flash('success','Dados atualizados com sucesso!');
            return redirect(route('teachers.index'));
        } else {
            session ()->flash('error','Ocorreu um erro');
            return redirect(route('admin/teachers/update'));
        }
    }
}
