@extends('layouts.login')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Redefinição de senha</h3></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        @error('email')
                        <p class="alert alert-danger" role="alert"><strong>{{ $message }}</strong></p>
                        @enderror
                        <div class="form-group">
                            <label class="small mb-1" for="email">Email</label>
                            <input required class="form-control py-4 @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="Endereço de e-mail" value="{{ old('email') }}" autocomplete="email" autofocus/>
                        </div>

                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" class="btn btn-primary">Enviar link de redefinição de senha</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small">Redefinição de senha</div>
                </div>
            </div>
        </div>
    </div>
@endsection
