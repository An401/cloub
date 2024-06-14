<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Livros') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">Cadastrar Livro</h1>
                        <p><a href="{{ route('books.index') }}" class="btn btn-primary">Voltar</a></p>
                    </div>
                    <hr />
                    @if (session()->has('error'))
                    <div>
                        {{session('error')}}
                    </div>
                    @endif
                    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="livro">URL do Livro:</label>
                                <input type="string" name="urlLivro" class="form-control" placeholder="" required>
                                @error('urlLivro')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" class="form-control" placeholder="" required>
                                @error('nome')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="editora">Editora:</label>
                                <input type="text" name="editora" class="form-control" placeholder="" required>
                                @error('editora')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="categoria">Categoria:</label>
                                <input type="text" name="categoria" class="form-control" placeholder="" required>
                                @error('categoria')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
 <!-- tentar estilizar esse botão de voltar-->
                        <div class="row">
                            <div class="d-grid">
                            <!-- <p><a href="{{ route('books.index') }}" class="btn btn-primary">Voltar</a></p> -->
                                <button class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>