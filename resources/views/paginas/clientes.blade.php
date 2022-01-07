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
                                        <th>Perfil</th>
                                        <th>Name</th>
                                        <th>Telefone</th>
                                        <th>CPF</th>
                                        <th>Requerimento</th>
                                        <th>Processo</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><img class="rounded-circle img-fluid avatar-40"
                                                src="{{ url('dark-html/images/user/01.jpg') }}" alt="profile"></td>
                                        <td>Anna Sthesia</td>
                                        <td>(760) 756 7568</td>
                                        <td>000.000.000-00</td>
                                        <td>Acme Corporation</td>
                                        <td>123456489456</td>
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
                <div class="modal-body">
                    <form id="form-wizard1" class="text-center mt-4">
                        <ul id="top-tab-list" class="p-0">
                            <li class="active" id="account">
                                <a href="javascript:void();">
                                    <i class="ri-lock-unlock-line"></i><span>Cliente</span>
                                </a>
                            </li>
                            <li id="personal">
                                <a href="javascript:void();">
                                    <i class="ri-user-fill"></i><span>Endereço</span>
                                </a>
                            </li>
                            <li id="payment">
                                <a href="javascript:void();">
                                    <i class="ri-camera-fill"></i><span>Foto</span>
                                </a>
                            </li>
                            <li id="confirm">
                                <a href="javascript:void();">
                                    <i class="ri-check-fill"></i><span>Finalizar</span>
                                </a>
                            </li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4">Informações do Cliente:</h3>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nome:</label>
                                            <input type="text" class="form-control" name="email" placeholder="Nome do cliente" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Data de nascimento: *</label>
                                            <input type="date" class="form-control" name="uname" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Conjuguê: *</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Selecione</option>
                                                <option>Casado</option>
                                                <option>Solteiro</option>
                                                <option>Divorciado</option>
                                                <option>Viúvo(a)</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>CPF:</label>
                                            <input type="text" class="form-control" name="email" placeholder="CPF do cliente" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>RG:</label>
                                            <input type="text" class="form-control" name="email" placeholder="RG do cliente" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" name="next" class="btn btn-primary next action-button float-right"
                                value="Next">Próximo</button>
                        </fieldset>
                        <fieldset>
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4">Personal Information:</h3>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 4</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name: *</label>
                                            <input type="text" class="form-control" name="fname"
                                                placeholder="First Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name: *</label>
                                            <input type="text" class="form-control" name="lname"
                                                placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contact No.: *</label>
                                            <input type="text" class="form-control" name="phno"
                                                placeholder="Contact No." />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Alternate Contact No.: *</label>
                                            <input type="text" class="form-control" name="phno_2"
                                                placeholder="Alternate Contact No." />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" name="next" class="btn btn-primary next action-button float-right"
                                value="Next">Próximo</button>
                            <button type="button" name="previous"
                                class="btn btn-dark previous action-button-previous float-right mr-3"
                                value="Previous">Anterior</button>
                        </fieldset>
                        <fieldset>
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4">Image Upload:</h3>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Upload Your Photo:</label>
                                    <input type="file" class="form-control" name="pic" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label>Upload Signature Photo:</label>
                                    <input type="file" class="form-control" name="pic-2" accept="image/*">
                                </div>
                            </div>
                            <button type="button" name="next" class="btn btn-primary next action-button float-right"
                                value="Submit">Submit</button>
                            <button type="button" name="previous"
                                class="btn btn-dark previous action-button-previous float-right mr-3"
                                value="Previous">Previous</button>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4 text-left">Finish:</h3>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="text-success text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="images/page-img/img-success.png"
                                            class="fit-image" alt="fit-image"> </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
