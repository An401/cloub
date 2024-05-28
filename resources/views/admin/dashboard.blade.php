<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Olá Admin!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="d-flex align-items-center p-6 text-gray-900">
                    <h1 class="mb-0"> O que você deseja cadastrar?</h1>
                    <div class="ms-auto d-flex">
                        <a href="{{route('teachers.index')}}" class="btn btn-primary me-2">Professores</a>
                        <a href="admins" class="btn btn-primary me-2">Admins</a>
                        <a href="students" class="btn btn-primary me-2">Alunos</a>
                        <a href="books" class="btn btn-primary">Livros</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
