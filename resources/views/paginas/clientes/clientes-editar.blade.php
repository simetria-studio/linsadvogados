@extends('layouts.app')
@section('content')

    <div class="row">

        <div class="col-md-9">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Editar cliente {{ $cliente->name }}</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="new-user-info">
                        <form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nome:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->name }}" name="name"
                                            placeholder="Nome do cliente" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Data de nascimento: *</label>
                                        <input type="date" class="form-control" value="{{ $cliente->date_birth }}" name="date_birth" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Conjuguê: *</label>
                                        <select class="form-control" name="conjugue" id="exampleFormControlSelect1">
                                            <option @if($cliente->conjugue) selected value="{{ $cliente->conjugue }}" @endif>{{ $cliente->conjugue }}</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Solteiro">Solteiro</option>
                                            <option value="Divorciado">Divorciado</option>
                                            <option value="Viúvo">Viúvo(a)</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>CPF:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->cpf }}" name="cpf" placeholder="CPF do cliente" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>RG:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->rg }}" name="rg" placeholder="RG do cliente" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Requerimento:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->requerimento }}" name="requerimento"
                                            placeholder="Requerimento" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Numero do Processo:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->numero_processo }}" name="numero_processo"
                                            placeholder="Número do processo" />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Editar Cliente</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
