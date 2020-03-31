@extends('layouts.login')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Acesso ao Sistema {{ \App\Config::SITE_NAME }}</h3></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @error('email')
                        <p class="alert alert-danger" role="alert"><strong>{{ $message }}</strong></p>
                        @enderror
                        <div class="form-group">
                            <label class="small mb-1" for="email">Email</label>
                            <input required class="form-control py-4 @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="Endereço de e-mail" value="{{ old('email') }}" />
                        </div>
                        @error('password')
                        <p class="alert alert-danger" role="alert"><strong>{{ $message }}</strong></p>
                        @enderror
                        <div class="form-group">
                            <label class="small mb-1" for="password">Senha</label>
                            <input required class="form-control py-4 @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="Senha de acesso" />
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" class="btn btn-primary">Acessar</button>
                            <a href="{{ route('password.request') }}">Esqueceu a senha?
                            </a>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small">Acesso ao sistema Administrativo</div>
                </div>
            </div>
        </div>
    </div>
@endsection
