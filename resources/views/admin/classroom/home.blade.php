<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Classes') }}
        </h2>
    </x-slot>
 
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center">
                        <h1 class="mb-0">Lista de Classes</h1>
                        <a href="{{ route('admin/dashboard')}}"class="btn btn-primary ms-auto me-2">Voltar</a>
                        <a href="{{ route('classrooms.create') }}" class="btn btn-primary">Cadastrar Classe</a>
                        
                    </div>
                    <hr />
                    @if (Session::has ('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>#</th>
                                <th>Série</th>
                                <th>Turma</th>
                                <th>Turno</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($classrooms as $classroom)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $classroom->serie }}</td>
                                <td class="align-middle">{{ $classroom->turma }}</td>
                                <td class="align-middle">{{ $classroom->turno }}</td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('classrooms.edit', ['id'=>$classroom->id])}}" type="button" class="btn btn-secondary">Editar</a>
                                        <a href="{{ route('classrooms.destroy', ['id'=>$classroom->id])}}" onclick="return confirm ('Você tem certeza?')" type="button" class="btn btn-danger">Deletar</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="5">Nenhuma classe foi cadastrada</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>