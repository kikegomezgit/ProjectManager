@extends('layouts.app')

@section('content')

<form class="form-edit" method="GET" action="{{ url('admin_edit') }}">
    <div class="row"><div class="col-md-2"></div>
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Proyectos</h5>
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
                            
                            <th>nombre</th>
                            <th>empresa</th>
                           <!-- <th>costo</th>-->
                            <th>status</th>
                            <td></td> 
                            <!--<th></th>-->
                           <!-- <th>comandos</th>-->
                            @foreach($availableAdmins as $item)
                            <tr>
                                
                                <input type="hidden" name="Id" value="{{$item->Proyecto_id}}">
                                
                                
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->empresa}}</td>
                               <!-- <td>{{$item->costo}}</td>-->
                                <td>{{$item->status}}</td>
                                
                               <td>
                               <!-- <button type="button" class="btn btn-info">
                                <span class="glyphicon glyphicon-search"></span>
                                </button>-->
                               <button type="button" class="btn btn-info" 
                               data-mynombre="{{$item->nombre}}" 
                               data-mycosto="{{$item->costo}}" 
                               data-mydescripcion="{{$item->descripcion}}" 
                               data-mystatus="{{$item->status}}" 
                               data-myempresa="{{$item->empresa}}" 
                               data-myid="{{$item->Proyecto_id}}" 
                               data-toggle="modal" data-target="#ver"><span class="glyphicon glyphicon-search"></span>
                               </button>
                               <a class="btn btn-white btn-bitbucket" 
                               data-mynombre="{{$item->nombre}}" 
                               data-mycosto="{{$item->costo}}" 
                               data-mydescripcion="{{$item->descripcion}}" 
                               data-mystatus="{{$item->status}}" 
                               data-myempresa="{{$item->empresa}}" 
                               data-myid="{{$item->Proyecto_id}}" 
                               data-toggle="modal" data-target="#edit"><i class="fa fa-wrench"></i></a>
                                <button type="button" class="btn btn-w-s btn-danger"  name="{{$item->Proyecto_id}}">__</button></td>
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
                <div class="panel-heading">Crear Nuevo Proyecto</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('proyectos_create') }}">
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
                            <label for="descripcion" class="col-md-4 control-label">descripcion</label>
                            <div class="col-md-8">
                                <textarea rows="4" cols="50" id="descripcion" type="text" class="form-control" name="descripcion" value="" required></textarea>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="costo" class="col-md-4 control-label">costo</label>
                            <div class="col-md-8">
                                <input id="costo" type="text" class="form-control" name="costo" value="" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                       
                                <label for="empresa" class="col-md-4 control-label">empresa</label>
                                <div class="col-md-8">
                                <select class="form-control m-b" id="empresa" name="empresa">
                                  @foreach($availableCategories as $categs)                                   
                                  <option value="{{$categs->empresa}}">{{$categs->empresa}}</option>
                                  @endforeach     
                              </select>
                              </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                       
                                <label for="status" class="col-md-4 control-label">status</label>
                                <div class="col-md-8">
                                <select class="form-control m-b" id="status" name="status">                            
                                  <option value="activo" >activo</option>
                                  <option value="pendiente" >pendiente</option>
                                  <option value="cancelado" >cancelado</option>
                                  <option value="finalizado" >finalizado</option>
                              </select>
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
        <h4 class="modal-title">Editar Proyecto</h4>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" method="POST" action="{{ url('proyectos_update') }}">
                <div class="form-group">
                    <div class="col-md-8">
                    <label>Nombre</label> 
                    <input id="nombre" type="text" class="form-control" name="nombre" value="" required>  
                    </div>
                </div>
                 {{ csrf_field() }}
                 <div class="form-group">
                    <div class="col-md-8">
                    <label>descripcion</label> 
                    <textarea rows="4" cols="50" id="descripcion" type="text" class="form-control" name="descripcion" value="" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8">
                    <label for="costo" class="">costo</label>
                        <input id="costo" type="text" class="form-control" name="costo" value="" required>
                    </div>
                </div>

                <div class="form-group">                       
                    <div class="col-md-8">
                        <label for="empresa" class="">empresa</label>
                        <select class="form-control m-b" id="empresa" name="empresa">
                          @foreach($availableCategories as $categs)                                   
                          <option value="{{$categs->empresa}}" >{{$categs->empresa}}</option>
                          @endforeach     
                      </select>
                      </div>
                </div>

                <div class="form-group">     
                        <div class="col-md-8">                  
                        <label for="status" class="">status</label>
                        <select class="form-control m-b" id="status" name="status">                            
                          <option value="activo" >activo</option>
                          <option value="pendiente" >pendiente</option>
                          <option value="cancelado" >cancelado</option>
                          <option value="finalizado" >finalizado</option>
                      </select>
                      </div>
                </div>
                       
                <input id="proyectoId" type="hidden" class="form-control" name="proyectoId"  value="">
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

<!--Ver proyecto-->
<div id="ver" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ver Proyecto</h4>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" method="POST" action="{{ url('proyectos_update') }}">
                <div class="form-group">
                    <div class="col-md-8">
                    <label>Nombre</label> 
                    <input id="nombre" type="text" class="form-control" name="nombre" value="" disabled>  
                    </div>
                </div>
                 {{ csrf_field() }}
                 <div class="form-group">
                    <div class="col-md-8">
                    <label>descripcion</label> 
                    <textarea rows="4" cols="50" id="descripcion" type="text" class="form-control" name="descripcion" value="" disabled></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8">
                    <label for="costo" class="">costo</label>
                        <input id="costo" type="text" class="form-control" name="costo" value="" disabled>
                    </div>
                </div>

                <div class="form-group">                       
                    <div class="col-md-8">
                        <label for="empresa" class="">empresa</label>
                        <select class="form-control m-b" id="empresa" name="empresa" disabled>
                          @foreach($availableCategories as $categs)                                   
                          <option value="{{$categs->empresa}}">{{$categs->empresa}}</option>
                          @endforeach     
                      </select>
                      </div>
                </div>

                <div class="form-group">     
                        <div class="col-md-8">                  
                        <label for="status" class="">status</label>
                        <select class="form-control m-b" id="status" name="status" disabled>                            
                          <option value="activo" >activo</option>
                          <option value="pendiente" >pendiente</option>
                          <option value="cancelado" >cancelado</option>
                          <option value="finalizado" >finalizado</option>
                      </select>
                      </div>
                </div>
                       
                <input id="proyectoId" type="hidden" class="form-control" name="proyectoId"  value="" >
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
<!--ver proyecto-->


<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$('#edit').on('show.bs.modal',function(event){
     //var category_id = $(this).attr('name');
     var button = $(event.relatedTarget)
     var proyectoId = button.data('myid')
     var nombre = button.data('mynombre')
     var costo = button.data('mycosto')
     var descripcion = button.data('mydescripcion')
     var status = button.data('mystatus')
     var empresa = button.data('myempresa')
     var modal = $(this)
     modal.find('.modal-body #nombre').val(nombre)
     modal.find('.modal-body #costo').val(costo)
     modal.find('.modal-body #descripcion').val(descripcion)
     modal.find('.modal-body #status').val(status)
     modal.find('.modal-body #empresa').val(empresa)
     modal.find('.modal-body #proyectoId').val(proyectoId)
     //$('#myModal').modal('show');
});
$('#ver').on('show.bs.modal',function(event){
     //var category_id = $(this).attr('name');
     var button = $(event.relatedTarget)
     var proyectoId = button.data('myid')
     var nombre = button.data('mynombre')
     var costo = button.data('mycosto')
     var descripcion = button.data('mydescripcion')
     var status = button.data('mystatus')
     var empresa = button.data('myempresa')
     var modal = $(this)
     modal.find('.modal-body #nombre').val(nombre)
     modal.find('.modal-body #costo').val(costo)
     modal.find('.modal-body #descripcion').val(descripcion)
     modal.find('.modal-body #status').val(status)
     modal.find('.modal-body #empresa').val(empresa)
     modal.find('.modal-body #proyectoId').val(proyectoId)
     //$('#myModal').modal('show');
});
    $(document).on("click", ".btn-danger", function() {
        //   console.log("inside";   <-- here it is
        console.log($(this).attr('name'));
        window.location.href = "/proyectos_delete/"+$(this).attr('name');
    });
</script>
@endsection
