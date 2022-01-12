@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Editar cliente {{ $financeiros->name }}</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="new-user-info">
                            <form method="POST" action="{{ route('financeiro.update', $financeiros->id) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nome:</label>
                                            <input type="text" class="form-control" value="{{ $financeiros->name }}"
                                                name="name" placeholder="Nome do cliente" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>CPF:</label>
                                            <input type="text" class="form-control" value="{{ $financeiros->cpf }}"
                                                name="cpf" placeholder="CPF do cliente" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telefone:</label>
                                            <input type="text" class="form-control" value="{{ $financeiros->telefone }}"
                                                name="telefone" placeholder="Telefone do cliente" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Valor Total:</label>
                                            <input type="text" class="form-control"
                                                value="{{ $financeiros->valor_total }}" name="valor_total"
                                                 />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Dividido Em:</label>
                                            <input type="text" class="form-control"
                                                value="{{ $financeiros->dividido_em }}" name="dividido_em" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Valor da Parcela:</label>
                                            <input type="text" class="form-control"
                                                value="{{ $financeiros->valor_parcela }}" name="valor_parcela" />
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Editar Cliente</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
