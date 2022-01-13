@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Processos Arquivados</h4>
                        </div>
                        <div>
                            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">Adicionar
                                Novo
                            </button>
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
                                        <th>Name</th>
                                        <th>CPF</th>
                                        <th>Serviço</th>
                                        <th>Motivo</th>
                                        <th>Prazo</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($processos as $processo)
                                        <tr>
                                            <td>{{ $processo->name }}</td>
                                            <td>{{ $processo->cpf }}</td>
                                            <td>{{ $processo->servico }}</td>
                                            <td>{{ $processo->motivo }}</td>
                                            <td>{{ date('d/m/Y', strtotime($processo->prazo)) }}</td>

                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    {{-- <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Editar"
                                                        href="{{ route('financeiro.edit', $processo->id) }}"><i
                                                            class="ri-pencil-line"></i></a> --}}
                                                    <a class="iq-bg-primary" onclick="deleteItem(this)"
                                                        data-toggle="tooltip" data-original-title="Deletar"
                                                        data-id="{{ $processo->id }}">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Processo Arquivado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-wizard1" class="text-center mt-4" method="post" action="{{ route('processos.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4">Informações do Cliente:</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nome:</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Nome do cliente" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>CPF: *</label>
                                            <input type="cpf" class="form-control" name="cpf" placeholder="" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Serviço:</label>
                                            <input type="text" class="form-control" name="servico"
                                                placeholder="Serviço" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Motivo:</label>
                                            <input type="text" class="form-control" name="motivo"
                                                placeholder="Motivo" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Data:</label>
                                            <input type="date" class="form-control" name="data" />
                                        </div>
                                    </div>



                                </div>
                                <button type="submit" name="next" class="btn btn-primary next action-button float-right"
                                    value="Submit">Cadastrar</button>
                            </div>

                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4 text-left">Finalizar:</h3>
                                    </div>
                                </div> <br><br>
                                <h2 class="text-success text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img
                                            src="{{ url('dark-html/images/page-img/img-success.png') }}"
                                            class="fit-image" alt="fit-image"> </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">Cliente cadastrado com sucesso!</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="application/javascript">
        function deleteItem(e) {

            let id = e.getAttribute('data-id');

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: 'Você tem certeza?',
                text: "Está deletando permanentemente!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, delete!',
                cancelButtonText: 'Não, cancelar!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    if (result.isConfirmed) {

                        $.ajax({
                            type: 'DELETE',
                            url: '{{ url('precessosDelete') }}/' + id,
                            data: {
                                "_token": "{{ csrf_token() }}",
                            },
                            success: function(data) {
                                if (data.success) {
                                    swalWithBootstrapButtons.fire(
                                        'Deletado!',
                                        'Seu processo foi deletada!',
                                        "success"

                                    );

                                }

                            }
                        });

                    }
                    location.reload();
                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelado',
                        'Este produto está seguro!)',
                        'error'
                    );
                }
            });

        }
    </script>
@endsection