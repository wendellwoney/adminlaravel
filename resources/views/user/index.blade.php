@extends('layouts.sistema')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Usuários</h1>
        <ol class="breadcrumb mb-4">

            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Usuários</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
            <div class="card-body">
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
                        <tr>
                            <td class="text-center"><i class="fa fa-edit"></i></td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td class="text-center"><i class="fa fa-times"></i></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
