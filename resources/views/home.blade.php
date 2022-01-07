@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <a href="{{ route('financeiro') }}" class="col-lg-4">
                <div class="card text-white bg-primary iq-mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-white">Financeiro</h4>
                        <blockquote class="blockquote mb-0">
                            <p class="font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                posuere
                                erat a ante.</p>
                        </blockquote>
                    </div>
                </div>
            </a>
            <a href="{{ route('clientes') }}" class="col-lg-4">
                <div class="card text-white bg-secondary iq-mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-white">Clientes</h4>
                        <blockquote class="blockquote mb-0">
                            <p class="font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                posuere
                                erat a ante.</p>
                        </blockquote>
                    </div>
                </div>
            </a>
            <a href="#" class="col-lg-4">
                <div class="card text-white bg-success iq-mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-white">Perícia</h4>
                        <blockquote class="blockquote mb-0">
                            <p class="font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                posuere
                                erat a ante.</p>
                        </blockquote>
                    </div>
                </div>
            </a>
            <a href="#" class="col-lg-4">
                <div class="card text-white bg-danger iq-mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-white">Primary card title</h4>
                        <blockquote class="blockquote mb-0">
                            <p class="font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                posuere
                                erat a ante.</p>

                        </blockquote>
                    </div>
                </div>
            </a>
            <a href="#" class="col-lg-4">
                <div class="card text-white bg-warning iq-mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-white">Primary card title</h4>
                        <blockquote class="blockquote mb-0">
                            <p class="font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                posuere
                                erat a ante.</p>

                        </blockquote>
                    </div>
                </div>
            </a>
            <a href="#" class="col-lg-4">
                <div class="card text-white bg-info iq-mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-white">Primary card title</h4>
                        <blockquote class="blockquote mb-0">
                            <p class="font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                posuere
                                erat a ante.</p>

                        </blockquote>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
