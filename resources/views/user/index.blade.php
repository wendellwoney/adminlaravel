@extends('layouts.sistema')

@section('content')

    <div class="container-fluid">
        @if(session()->get('success'))
            <p>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Fechar"><i class="fa fa-times"></i></button>
                </div>
            </p>
        @endif

            @if ($errors->any())
                <p>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        @foreach ($errors->all() as $error)
                            {{ $error }} @if(count($errors->all()) > 1) <br/> @endif<br/>
                        @endforeach
                    <button type="button" class="close" data-dismiss="alert" aria-label="Fechar"><i class="fa fa-times"></i></button>
                </div>
                </p>
            @endif

        <h1 class="mt-4">Usuários</h1>
        <ol class="breadcrumb mb-4">

            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Usuários</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Usuários cadastrados no sistema</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('user.create') }}">
                            <button type="button" class="btn btn-success"> <i class="fa fa-plus"></i> Criar novo Usuário</button>
                        </a>
                        <br/>
                        <br/>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">Ação</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th class="text-center">Ação</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th class="text-center">Ação</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th class="text-center">Ação</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="text-center"><a href="{{ route('user.show', ['user' => $user->id]) }}"> <i class="fa fa-edit"></i></a></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">
                                    <i class="fa fa-times" style="cursor: pointer;" onclick="var conf =  confirm('Deseja deletar {{$user->name}}?'); if(conf) $('#remove').submit()"></i>
                                    <form id="remove" action="{{ route('user.destroy', $user->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
