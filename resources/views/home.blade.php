@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <a href="{{ route('clientes') }}" class="col-lg-3">
                <div class="card text-white bg-secondary iq-mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-white">Clientes</h4>
                        <blockquote class="blockquote mb-0">
                            <p class="font-size-14">Veja, cadastre ou altere seus clientes.</p>
                        </blockquote>
                    </div>
                </div>
            </a>
            <a href="{{ route('financeiro') }}" class="col-lg-3">
                <div class="card text-white bg-primary iq-mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-white">Financeiro</h4>
                        <blockquote class="blockquote mb-0">
                            <p class="font-size-14">Controle seus assuntos financeiro.</p>
                        </blockquote>
                    </div>
                </div>
            </a>

            <a href="{{ route('pericia') }}" class="col-lg-3">
                <div class="card text-white bg-success iq-mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-white">Perícia</h4>
                        <blockquote class="blockquote mb-0">
                            <p class="font-size-14">Veja os laudos da perícia.</p>
                        </blockquote>
                    </div>
                </div>
            </a>
            <a href="{{ route('audiencia') }}" class="col-lg-3">
                <div class="card text-white bg-danger iq-mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-white">Audiências</h4>
                        <blockquote class="blockquote mb-0">
                            <p class="font-size-14">Veja e marque o dia de suas Audiêcias</p>
                        </blockquote>
                    </div>
                </div>
            </a>
            <a href="{{ route('prazos') }}" class="col-lg-3">
                <div class="card text-white bg-primary iq-mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-white">Prazos a cumprir</h4>
                        <blockquote class="blockquote mb-0">
                            <p class="font-size-14">Controle os prazos a cumprir.</p>
                        </blockquote>
                    </div>
                </div>
            </a>
            <a href="{{ route('processos') }}" class="col-lg-3">
                <div class="card text-white bg-success iq-mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-white">Processos arquivados</h4>
                        <blockquote class="blockquote mb-0">
                            <p class="font-size-14">Veja, seus processos arquivados.</p>
                        </blockquote>
                    </div>
                </div>
            </a>

        </div>
    </div>
@endsection
