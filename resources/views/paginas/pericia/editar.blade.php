@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Editar cliente {{ $pericias->name }}</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="new-user-info">
                            <form method="POST" action="{{ route('pericia.update', $pericias->id) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Segurado:</label>
                                            <input type="text" class="form-control" value="{{ $pericias->segurado }}"
                                                name="segurado" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Local:</label>
                                            <input type="text" class="form-control" value="{{ $pericias->local }}"
                                                name="local"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Data:</label>
                                            <input type="date" class="form-control" value="{{ $pericias->data }}"
                                                name="data"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Hora:</label>
                                            <input type="text" class="form-control" value="{{ $pericias->hora }}"
                                                name="hora"/>
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
