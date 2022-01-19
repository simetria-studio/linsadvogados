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
                            <div>
                                <a href="{{ route('clientes') }}"><button class="btn btn-success">Voltar</button></a>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form>
                                <div class="form-group row align-items-center">
                                    <div class="col-md-12">
                                        <div class="profile-img-edit">
                                            <img class="profile-pic"
                                                src="{{ asset('storage/clientes/' . $cliente->image) }}"
                                                alt="profile-pic">
                                            <div class="p-image">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" row align-items-center">
                                    <div class="form-group col-md-12">
                                        <label for="fname">Nome do cliente:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->name }}" id="fname"
                                            value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">CPF:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->cpf }}" id="fname"
                                            value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">RG:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->rg }}" id="fname"
                                            value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Numero do processo:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->numero_processo }}"
                                            id="fname" value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Requerimento:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->requerimento }}"
                                            id="fname" value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Data de nascimento:</label>
                                        <input type="text" class="form-control"
                                            value="{{ date('d/m/Y', $cliente->birth_date) }}" id="fname" value="Nik"
                                            disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Telefone:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->telefone }}"
                                            id="fname" value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Whatsapp:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->whatsapp }}"
                                            id="fname" value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Email:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->email }}"
                                            id="fname" value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Rua e numero:</label>
                                        <input type="text" class="form-control"
                                            value="{{ $cliente->adress->rua ?? '' }}, {{ $cliente->adress->numero ?? '' }}"
                                            id="fname" value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Bairro:</label>
                                        <input type="text" class="form-control"
                                            value="{{ $cliente->adress->bairro ?? '' }}" id="fname" value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Cidade:</label>
                                        <input type="text" class="form-control"
                                            value="{{ $cliente->adress->cidade ?? '' }}" id="fname" value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Estado:</label>
                                        <input type="text" class="form-control"
                                            value="{{ $cliente->adress->estado ?? '' }}" id="fname" value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Cep:</label>
                                        <input type="text" class="form-control"
                                            value="{{ $cliente->adress->cep ?? '' }}" id="fname" value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Complemento:</label>
                                        <input type="text" class="form-control"
                                            value="{{ $cliente->adress->complemento ?? '' }}" id="fname" value="Nik"
                                            disabled>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="fname">Nome Referência:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->referencia }}"
                                            id="fname" value="Nik" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="fname">Telefone Referência:</label>
                                        <input type="text" class="form-control"
                                            value="{{ $cliente->referencia_telefone }}" id="fname" value="Nik" disabled>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="fname">Obs:</label>
                                        <input type="text" class="form-control" value="{{ $cliente->obs }}" id="fname"
                                            value="Nik" disabled>
                                    </div>


                                </div>
                                <a href="{{ route('clientes') }}">
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
