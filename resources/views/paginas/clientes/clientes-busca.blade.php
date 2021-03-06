@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Lista de Clientes</h4>
                        </div>
                        <div>
                           <a href="{{ route('clientes') }}"><button class="btn btn-success">Voltar</button></a>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <div class="row justify-content-between">
                                <div class="col-sm-12 col-md-6">
                                    <div id="user_list_datatable_info" class="dataTables_filter">
                                        <form class="mr-3 position-relative" action="{{ route('search') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group mb-0 col-md-6">
                                                    <input type="search" name="search" class="form-control"
                                                        id="exampleInputSearch" placeholder="Buscar"
                                                        aria-controls="user-list-table">
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-success">Buscar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid"
                                aria-describedby="user-list-page-info">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>Requerimento</th>
                                        <th>Processo</th>
                                        <th>A????o</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($clientes as $cliente )
                                        <tr>
                                            <td class="text-center"><img class="rounded-circle img-fluid avatar-40"
                                                    src="@if($cliente->image) {{ asset('storage/clientes/' . $cliente->image)}} @else  @endif"
                                                    alt="profile">
                                            </td>
                                            <td>{{ $cliente->name }}</td>
                                            <td>{{ $cliente->cpf }}</td>
                                            <td>{{ $cliente->requerimento }}</td>
                                            <td>{{ $cliente->numero_processo }}</td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Editar"
                                                        href="{{ route('clientes.edit', $cliente->id) }}"><i
                                                            class="ri-pencil-line"></i></a>
                                                    <a class="iq-bg-primary" onclick="deleteItem(this)"
                                                        data-toggle="tooltip" data-original-title="Deletar"
                                                        data-id="{{ $cliente->id }}"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Ver"
                                                        href="{{ route('clientes.show', $cliente->id) }}"><i
                                                            class="ri-eye-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <h3>Nenhum cliente encontrador com esse cpf</h3>
                                    @endforelse



                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-between mt-3">

                            <div class="col-md-6">
                                {{-- {{ $clientes->links() }} --}}
                            </div>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- <div class="modal-body">
                    <form id="form-wizard1" class="text-center mt-4" method="post" action="{{ route('clientes.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4">Informa????es do Cliente:</h3>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 5</h2>
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
                                            <label>Data de nascimento: *</label>
                                            <input type="date" class="form-control" name="date_birth" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Conjugu??: *</label>
                                            <select class="form-control" name="conjugue" id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Selecione</option>
                                                <option value="Casado(a)">Casado(a)</option>
                                                <option value="Solteiro(a)">Solteiro(a)</option>
                                                <option value="Divorciado(a)">Divorciado(a)</option>
                                                <option value="Vi??vo(a)">Vi??vo(a)</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>CPF:</label>
                                            <input type="text" class="form-control" name="cpf"
                                                placeholder="CPF do cliente" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>RG:</label>
                                            <input type="text" class="form-control" name="rg"
                                                placeholder="RG do cliente" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Requerimento:</label>
                                            <input type="text" class="form-control" name="requerimento"
                                                placeholder="Requerimento" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Numero do Processo:</label>
                                            <input type="text" class="form-control" name="numero_processo"
                                                placeholder="N??mero do processo" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Upload documentos:</label>
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" name="next" class="btn btn-primary next action-button float-right"
                                value="Next">Pr??ximo</button>
                        </fieldset>
                        <fieldset>
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4">Endere??o:</h3>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 5</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>cep: *</label>
                                            <input type="text" class="form-control" placeholder="Digite o cep" id="ceping"
                                                name="cep" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-top: 36px;">
                                            <button type="button" id="buscaring" class="btn btn-dark">Buscar <i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Rua: *</label>
                                            <input type="text" id="rua" name="rua" class="form-control"
                                                placeholder="Rua" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bairro: *</label>
                                            <input type="text" id="bairro" name="bairro" class="form-control"
                                                placeholder="Bairro" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cidade: *</label>
                                            <input type="text" id="cidade" name="cidade" class="form-control"
                                                placeholder="Cidade" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Estado: *</label>
                                            <input type="text" id="estado" name="estado" class="form-control"
                                                placeholder="Estado" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Numero: *</label>
                                            <input type="text" class="form-control" name="numero" placeholder="Numero" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Complemento: </label>
                                            <input type="text" class="form-control" name="complemento"
                                                placeholder="Complemento" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" name="next" class="btn btn-primary next action-button float-right"
                                value="Next">Pr??ximo</button>
                            <button type="button" name="previous"
                                class="btn btn-dark previous action-button-previous float-right mr-3"
                                value="Previous">Anterior</button>
                        </fieldset>
                        <fieldset>
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4">Foto do Cliente:</h3>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 5</h2>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Upload da foto do cliente:</label>
                                    <input type="file" class="form-control" name="image" accept="image/*">
                                </div>

                            </div>
                            <button type="button" name="next" class="btn btn-primary next action-button float-right"
                                value="Submit">Pr??ximo</button>
                            <button type="button" name="previous"
                                class="btn btn-dark previous action-button-previous float-right mr-3"
                                value="Previous">Anterior</button>
                        </fieldset>
                        <fieldset>
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4">Refer??ncia:</h3>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 5</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email: </label>
                                            <input type="text" class="form-control" name="email"
                                                placeholder="Email do cliente" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telefone: </label>
                                            <input type="text" class="form-control" name="telefone"
                                                placeholder="Telefone do cliente" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>WhatsApp: </label>
                                            <input type="text" class="form-control" name="whatsapp"
                                                placeholder="Whatsapp do cliente" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Refer??ncia: </label>
                                            <input type="text" class="form-control" name="referencia"
                                                placeholder="Nome da refer??ncia" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telefone: </label>
                                            <input type="text" class="form-control" name="referencia_telefone"
                                                placeholder="Telefone da refer??ncia" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Obs: </label>
                                            <textarea class="form-control" name="obs" id="exampleFormControlTextarea1"
                                                rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="next" class="btn btn-primary next action-button float-right"
                                value="Submit">Cadastrar</button>
                            <button type="button" name="previous"
                                class="btn btn-dark previous action-button-previous float-right mr-3"
                                value="Previous">Anterior</button>
                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4 text-left">Finalizar:</h3>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 5 - 5</h2>
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
                </div> --}}
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
                title: 'Voc?? tem certeza?',
                text: "Est?? deletando permanentemente!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, delete!',
                cancelButtonText: 'N??o, cancelar!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    if (result.isConfirmed) {

                        $.ajax({
                            type: 'DELETE',
                            url: '{{ url('clientesdelete') }}/' + id,
                            data: {
                                "_token": "{{ csrf_token() }}",
                            },
                            success: function(data) {
                                if (data.success) {
                                    swalWithBootstrapButtons.fire(
                                        'Deletado!',
                                        'Seu produto foi deletado!',
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
                        'Este produto est?? seguro!)',
                        'error'
                    );
                }
            });

        }
    </script>
@endsection
