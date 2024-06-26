<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Professores') }}
        </h2>
    </x-slot>
 
    <div class="table-responsive py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center">
                        <h1 class="mb-0">Lista de Professores</h1>
                        <a href="{{ route('admin/dashboard')}}"class="btn btn-primary ms-auto me-2">Voltar</a>
                        <a href="{{ route('teachers.create') }}" class="btn btn-primary">Cadastrar Professor</a>
                        
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
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Senha</th>
                                <th>CPF</th>
                                <th>Disciplina</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($teachers as $teacher)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $teacher->nome }}</td>
                                <td class="align-middle">{{ $teacher->email }}</td>
                                <td class="align-middle">{{ $teacher->senha }}</td>
                                <td class="align-middle">{{ $teacher->cpf }}</td>
                                <td class="align-middle">{{ $teacher->disciplina }}</td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('teachers.edit', ['id'=>$teacher->id])}}" type="button" class="btn btn-secondary">Editar</a>
                                        <a href="{{ route('teachers.destroy', ['id'=>$teacher->id])}}" onclick="return confirm ('Você tem certeza?')" type="button" class="btn btn-danger">Deletar</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="5">Nenhum professor foi cadastrado</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>