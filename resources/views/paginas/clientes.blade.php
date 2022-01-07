@extends('layouts.app')
@include('layouts.navbar')
@include('layouts.sidebar')
@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Lista de Clientes</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div class="table-responsive">
                      <div class="row justify-content-between">
                         <div class="col-sm-12 col-md-6">
                            <div id="user_list_datatable_info" class="dataTables_filter">
                               <form class="mr-3 position-relative">
                                  <div class="form-group mb-0">
                                     <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                  </div>
                               </form>
                            </div>
                         </div>
                         <div class="col-sm-12 col-md-6">
                            <div class="user-list-files d-flex float-right">
                               <a class="iq-bg-primary" href="javascript:void();" >
                                  Print
                                </a>
                               <a class="iq-bg-primary" href="javascript:void();">
                                  Excel
                                </a>
                                <a class="iq-bg-primary" href="javascript:void();">
                                  Pdf
                                </a>
                              </div>
                         </div>
                      </div>
                      <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
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
                               <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ url('dark-html/images/user/01.jpg') }}" alt="profile"></td>
                               <td>Anna Sthesia</td>
                               <td>(760) 756 7568</td>
                               <td>000.000.000-00</td>
                               <td>Acme Corporation</td>
                               <td>123456489456</td>
                               <td>
                                  <div class="flex align-items-center list-user-action">
                                     <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar" href="#"><i class="ri-pencil-line"></i></a>
                                     <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Deletar" href="#"><i class="ri-delete-bin-line"></i></a>
                                     <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver" href="#"><i class="ri-eye-line"></i></a>
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
                                     <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
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
