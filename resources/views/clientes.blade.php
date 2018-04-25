@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
    <div class="">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Clientes</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('admin_create') }}">
                        {{ csrf_field() }}
                        <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Numero de cliente</th>
                                  <th scope="col">Numero de cuenta</th>
                                  <th scope="col">Tipo de cuenta</th>
                                  <th scope="col">Fecha</th>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">Apellidos</th>
                                 
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>66669584</td>
                                  <td>Credito</td>
                                  <td>24-marzo-2018</td>
                                  <td>Nicolas Maduro</td>
                                  <td>Argueta Simon</td>
                                </tr>
                              </tbody>
                        </table>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-w-m btn-warning" style="width: 40%">
                                    Editar
                                </button>

                                <button type="submit" class="btn btn-w-m btn-warning" style="width: 40%">
                                    Borrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
