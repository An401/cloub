<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Professores') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">Cadastrar Professor</h1>
                        <p><a href="{{ route('teachers.index') }}" class="btn btn-primary">Voltar</a></p>
                    </div>
                    <hr />
                    @if (session()->has('error'))
                    <div>
                        {{session('error')}}
                    </div>
                    @endif
                    <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" class="form-control" placeholder="">
                                @error('nome')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="senha">Senha de acesso:</label>
                                <input type="text" name="senha" class="form-control" placeholder="">
                                @error('senha')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="cpf">CPF:</label>
                                <input type="number" name="cpf" class="form-control" placeholder="">
                                @error('cpf')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="disciplina">Disciplina:</label>
                                <input type="text" name="disciplina" class="form-control" placeholder="">
                                @error('disciplina')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
 <!-- tentar estilizar esse botão de voltar-->
                        <div class="row">
                            <div class="d-grid">
                            <!-- <p><a href="{{ route('teachers.index') }}" class="btn btn-primary">Voltar</a></p> -->
                                <button class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>