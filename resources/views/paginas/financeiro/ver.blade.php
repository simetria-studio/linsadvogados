@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="iq-edit-list-data">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Informação do cliente</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form>
                                <div class=" row align-items-center">
                                    <div class="form-group col-md-12">
                                        <label for="fname">Nome do cliente:</label>
                                        <input type="text" class="form-control" value="{{ $financeiro->name }}" id="fname"
                                            value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">CPF:</label>
                                        <input type="text" class="form-control" value="{{ $financeiro->cpf }}" id="fname"
                                            value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Telefone</label>
                                        <input type="text" class="form-control" value="{{ $financeiro->telefone }}" id="fname"
                                            value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Valor Total:</label>
                                        <input type="text" class="form-control" value="{{ $financeiro->valor_total }}"
                                            id="fname" value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Dividido Em:</label>
                                        <input type="text" class="form-control" value="{{ $financeiro->dividido_em }}"
                                            id="fname" value="Nik" disabled>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="fname">Valor da Parcela:</label>
                                        <input type="text" class="form-control" value="{{ $financeiro->valor_parcela }}"
                                            id="fname" value="Nik" disabled>
                                    </div>




                                </div>
                                <a href="{{ route('financeiro') }}">
                                    <button type="button" class="btn btn-primary mr-2">Voltar</button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
