@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
    <div class="">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Resumen de Cuentas</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('admin_create') }}">
                        {{ csrf_field() }}
                        <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Cuenta</th>
                                  <th scope="col">Saldo</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">6666659</th>
                                  <td>$11,000</td>
                                </tr>
                              </tbody>
                        </table>
                         <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Cuenta</th>
                                  <th scope="col">Saldo</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">66699998</th>
                                  <td>$15,000</td>
                                </tr>
                              </tbody>
                        </table>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">$26,000</th>
                                </tr>
                              </tbody>
                        </table>    
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
