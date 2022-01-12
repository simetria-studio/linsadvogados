@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Editar cliente {{ $audiencias->name }}</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="new-user-info">
                            <form method="POST" action="{{ route('audiencia.update', $audiencias->id) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" class="form-control" value="{{ $audiencias->name }}"
                                                name="name" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Dia:</label>
                                            <input type="text" class="form-control" value="{{ $audiencias->dia }}"
                                                name="dia"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Horario:</label>
                                            <input type="date" class="form-control" value="{{ $audiencias->horario }}"
                                                name="horario"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Vara:</label>
                                            <input type="text" class="form-control" value="{{ $audiencias->vara }}"
                                                name="vara"/>
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
