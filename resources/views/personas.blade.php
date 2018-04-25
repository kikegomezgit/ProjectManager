@extends('layouts.app')

@section('content')

<form class="form-edit" method="GET" action="{{ url('admin_edit') }}">
    <div class="row"><div class="col-md-2"></div>
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Clientes</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table">
                        <tbody>
                            <!--<th></th>
                            <th>Nombre</th> 
                            <th>Apellidos</th>-->
                             
                            <th>Empresa</th>
                            <th></th>
                            

                            <!--<th></th>-->
                           <!-- <th>comandos</th>-->
                            @foreach($availableAdmins as $item)
                            <tr>
                                
                                <input type="hidden" name="Id" value="{{$item->Cliente_id}}">
                                <!--<td>{{$item->nombre}}</td>
                                <td>{{$item->apellidos}}</td>-->
                                <td class="contact-type"><i class="fa fa-user"> </i>{{$item->empresa}}</td>
                                
                                <!--<td>{{$item->created_at}}</td>-->
                               <!-- <td>{{$item->updated_at}}</td>-->
                               <td>
                               <button type="button" class="btn btn-info" 
                               data-mynombre="{{$item->nombre}}" data-myempresa="{{$item->empresa}}" data-myapellidos="{{$item->apellidos}}" data-myid="{{$item->Cliente_id}}" 
                               data-toggle="modal" data-target="#ver"><span class="glyphicon glyphicon-search"></span>
                               </button>
                               <a class="btn btn-white btn-bitbucket" data-mynombre="{{$item->nombre}}" data-myempresa="{{$item->empresa}}" data-myapellidos="{{$item->apellidos}}" data-myid="{{$item->Cliente_id}}" data-toggle="modal" data-target="#edit"><i class="fa fa-wrench"></i>
                               </a>
                                <button type="button" class="btn btn-w-s btn-danger"  name="{{$item->Cliente_id}}">__</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="">
    <div class="">
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Nuevo Cliente</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('personas_create') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-8">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="" required autofocus>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">apellidos</label>
                            <div class="col-md-8">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="" required>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">empresa</label>
                            <div class="col-md-8">
                                <input id="empresa" type="text" class="form-control" name="empresa" value="" required>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-w-m btn-warning" style="width: 100%">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


 <div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Persona</h4>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" method="POST" action="{{ url('personas_update') }}">
                <div class="form-group">
                    <div class="col-md-8">
                    <label>Nombre</label> 
                    <input id="nombre" type="text" class="form-control" name="nombre" value="" required>  
                    </div>
                </div>
                 {{ csrf_field() }}
                 <div class="form-group">
                    <div class="col-md-8">
                    <label>apellidos</label> 
                    <input id="apellidos" type="text" class="form-control" name="apellidos" value="" required>  
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-md-8">
                    <label>empresa</label> 
                    <input id="empresa" type="text" class="form-control" name="empresa" value="" required>  
                    </div>
                </div>
                       
                        <input id="clienteId" type="hidden" class="form-control" name="clienteId"  value="">
                <div class="form-group">
                    <div class="col-md-8">
                    <button class="btn btn-w-m btn-warning" type="submit"><strong>Actualizar</strong></button>
                    </div>
                </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

 <div id="ver" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ver Persona</h4>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" method="POST" action="{{ url('personas_update') }}">
                <div class="form-group">
                    <div class="col-md-8">
                    <label>Nombre</label> 
                    <input id="nombre" type="text" class="form-control" name="nombre" value="" disabled>  
                    </div>
                </div>
                 {{ csrf_field() }}
                 <div class="form-group">
                    <div class="col-md-8">
                    <label>apellidos</label> 
                    <input id="apellidos" type="text" class="form-control" name="apellidos" value="" disabled>  
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-md-8">
                    <label>empresa</label> 
                    <input id="empresa" type="text" class="form-control" name="empresa" value="" disabled>  
                    </div>
                </div>
                       
                        <input id="clienteId" type="hidden" class="form-control" name="clienteId"  value="">
                <div class="form-group">
                    <div class="col-md-8">
                    
                    </div>
                </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$('#edit').on('show.bs.modal',function(event){
     //var category_id = $(this).attr('name');
     var button = $(event.relatedTarget)
     var clienteId = button.data('myid')
     var nombre = button.data('mynombre')
     var apellidos = button.data('myapellidos')
     var empresa = button.data('myempresa')
     var modal = $(this)
     modal.find('.modal-body #nombre').val(nombre)
     modal.find('.modal-body #apellidos').val(apellidos)
     modal.find('.modal-body #empresa').val(empresa)
     modal.find('.modal-body #clienteId').val(clienteId)
     //$('#myModal').modal('show');
});
$('#ver').on('show.bs.modal',function(event){
     //var category_id = $(this).attr('name');
     var button = $(event.relatedTarget)
     var clienteId = button.data('myid')
     var nombre = button.data('mynombre')
     var apellidos = button.data('myapellidos')
     var empresa = button.data('myempresa')
     var modal = $(this)
     modal.find('.modal-body #nombre').val(nombre)
     modal.find('.modal-body #apellidos').val(apellidos)
     modal.find('.modal-body #empresa').val(empresa)
     modal.find('.modal-body #clienteId').val(clienteId)
     //$('#myModal').modal('show');
});
    $(document).on("click", ".btn-danger", function() {
        //   console.log("inside";   <-- here it is
        console.log($(this).attr('name'));
        window.location.href = "/personas_delete/"+$(this).attr('name');
    });
</script>
@endsection
