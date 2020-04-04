@extends('layouts.sistema')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Usuários</h1>
        <ol class="breadcrumb mb-4">

            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Usuários</a></li>
            <li class="breadcrumb-item active">Editar</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header"><i class="fa fa-user-edit mr-1"></i>Editar Usuário
                <strong>{{ $usuario->name }}</strong></div>
            <div class="card-body">
                <form action="{{ route('user.update', ['user' => $usuario->id]) }}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="small mb-1" for="name">Nome do usuário</label>
                                <input required class="form-control py-4" id="name" name="name" type="text" placeholder="Informe o nome" value="{{ $usuario->name }}"/></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="small mb-1" for="inputemail">E-mail do usuário</label>
                                <input required class="form-control py-4" id="inputemail" name="inputemail" type="email" placeholder="Informe o e-mail" value="{{ $usuario->email }}"/></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="small mb-1" for="inputsenha">Senha <i class="fa fa-exclamation-triangle popoverOption" data-content="Preencha este campo caso deseje alterar a senha do usuário {{ $usuario->name }}!" rel="popover" data-placement="right" data-original-title="Modificação de senha"></i></label>
                                <input class="form-control py-4" id="inputsenha" name="inputsenha" type="text" placeholder="Informe a senha para modificar"/></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Editar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('.popoverData').popover();
            $('.popoverOption').popover({ trigger: "hover" });
        })
    </script>
@endsection
