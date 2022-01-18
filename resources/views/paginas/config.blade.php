@extends('layouts.app')
@section('content')
    <div class="col-md-8">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Editar Usuário</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <p>Pode trocar o nome e senha do usuário</p>
                <form action="{{ route('user.alt', auth()->user()->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Nome:</label>
                        <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" id="email1">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" value="{{ auth()->user()->email }}" name="email" id="email1">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Senha:</label>
                        <input type="password" class="form-control" name="password" id="pwd">
                    </div>

                    <button type="submit" class="btn btn-primary">Alterar</button>

                </form>
            </div>
        </div>
    </div>

@endsection
