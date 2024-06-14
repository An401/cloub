<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy("id","desc")->get();
        $total = Book::count();
        return view('admin.book.home', compact(['books','total']));
    }

    public function create()
    {
        return view('admin.book.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
        'urlLivro'=> 'required',
        'nome'=> 'required',
        'editora'=> 'required',
        'categoria'=> 'required',
        ]);
        $data = Book::create($validation);
        if ($data) {
            session ()->flash('success','Livro cadastrado com sucesso!');
            return redirect(route('books.index'));
        } else {
            session ()->flash('error','Ocorreu um erro');
            return redirect(route('admin.books/create'));
        }
    }
    public function edit($id)
    {
        $books = Book::findOrFail($id);
        return view('admin.book.update', compact(['books']));
    }

    public function delete($id)
    {
        $books = Book::findOrFail($id)->delete();
        if ($books) {
            session()->flash('success','Livro excluído com sucesso');
            return redirect(route('books.index'));
        } else {
            session()->flash('error','Ocorreu um erro');
            return redirect(route('books.index'));
        }
    }

    public function update(Request $request, $id)
    {
        $books = Book::findOrFail($id);

        $books->urlLivro = $request->urlLivro;
        $books->nome = $request->nome;
        $books->editora = $request->editora;
        $books->categoria = $request->categoria;
        $data = $books->save();
        if ($data) {
            session ()->flash('success','Dados atualizados com sucesso!');
            return redirect(route('books.index'));
        } else {
            session ()->flash('error','Ocorreu um erro');
            return redirect(route('books.update'));
        }
    }
}
