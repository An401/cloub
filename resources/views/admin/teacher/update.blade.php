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
                        <h1 class="mb-0">Editar dados do Professor</h1>
                        <p><a href="{{ route('teachers.index') }}" class="btn btn-primary">Voltar</a></p>
                    </div>
                    <hr />
                    @if (session()->has('error'))
                    <div>
                        {{session('error')}}
                    </div>
                    @endif
                    <form action="{{ route('teachers.update', $teachers->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" class="form-control" placeholder="" value="{{$teachers->nome}}" required>
                                @error('nome')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="" value="{{$teachers->email}}" required>
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="senha">Senha de acesso:</label>
                                <input type="text" name="senha" class="form-control" placeholder="" value="{{$teachers->senha}}" required>
                                @error('senha')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="cpf">CPF:</label>
                                <input type="number" name="cpf" class="form-control" placeholder="" value="{{$teachers->cpf}}" required>
                                @error('cpf')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="disciplina">Disciplina:</label>
                                <input type="text" name="disciplina" class="form-control" placeholder="" value="{{$teachers->disciplina}}" required>
                                @error('disciplina')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-warning">Editar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>