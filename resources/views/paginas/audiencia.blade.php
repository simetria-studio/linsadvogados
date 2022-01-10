@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Lista Audiência</h4>
                    </div>
                    <div>
                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">Adicionar
                            Novo</button>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <div class="row justify-content-between">
                            <div class="col-sm-12 col-md-6">
                                <div id="user_list_datatable_info" class="dataTables_filter">
                                    <form class="mr-3 position-relative">
                                        <div class="form-group mb-0">
                                            <input type="search" class="form-control" id="exampleInputSearch"
                                                placeholder="Buscar" aria-controls="user-list-table">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid"
                            aria-describedby="user-list-page-info">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Dia</th>
                                    <th>Horario</th>
                                    <th>Vara</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Anna Sthesia</td>
                                    <td>07/01/2022</td>
                                    <td>16:30</td>
                                    <td>nao sei</td>
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Editar" href="#"><i
                                                    class="ri-pencil-line"></i></a>
                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Deletar" href="#"><i
                                                    class="ri-delete-bin-line"></i></a>
                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Ver" href="#"><i
                                                    class="ri-eye-line"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-between mt-3">
                        <div id="user-list-page-info" class="col-md-6">
                            <span>Mostrando 1 a 5 de 5 entradas</span>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"
                                            aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
