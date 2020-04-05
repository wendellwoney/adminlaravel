@extends('layouts.sistema')

@section('content')

    <div class="container-fluid">
        <h1 class="mt-4">Usuários</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Log das Atividades</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Log das Atividades do usuário</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Data e Hora</th>
                            <th>Tela</th>
                            <th>Ação</th>
                            <th>ID item</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Data e Hora</th>
                            <th>Tela</th>
                            <th>Ação</th>
                            <th>ID item</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($logs as $log)
                            <tr>
                                <td>{{ (new DateTime($log->data))->format('d/m/Y H:i:s') }}</td>
                                <td>{{ $log->tela }}</td>
                                <td>{{ $log->acao }}</td>
                                <td>{{ $log->id_item ?: '-----' }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#table').DataTable(
            {
                "order": [[ 0, "desc" ]]
            }
        );
    </script>
@endsection
