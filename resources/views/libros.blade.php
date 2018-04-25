@extends('layouts.app')

@section('content')

<form class="form-edit" method="GET" action="{{ url('admin_edit') }}">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Personas</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table">
                        <tbody>
                            <th></th>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Editorial</th>
                            <th></th>
                            <th>comandos</th>
                            @foreach($availableAdmins as $item)
                            <tr>
                                <td></td> <input type="hidden" name="Id" value="{{$item->libro_id}}">
                                <td>{{$item->titulo}}</td>
                                <td>{{$item->autor}}</td>
                                <td>{{$item->editorial}}</td>
                                <td class="contact-type"></td>
                               
                                <!--<td>{{$item->created_at}}</td>-->
                               <!-- <td>{{$item->updated_at}}</td>-->
                               <td>
                               <a class="btn btn-white btn-bitbucket" data-mytitulo="{{$item->titulo}}" data-myautor="{{$item->autor}}" data-myeditorial="{{$item->editorial}}" data-myid="{{$item->libro_id}}" data-toggle="modal" data-target="#edit"><i class="fa fa-wrench"></i></a>
                                <button type="button" class="btn btn-w-s btn-danger"  name="{{$item->libro_id}}">Eliminar</button></td>
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
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Nueva persona</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('libros_create') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Titulo</label>
                            <div class="col-md-8">
                                <input id="titulo" type="text" class="form-control" name="titulo" value="" required autofocus>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Autor</label>
                            <div class="col-md-8">
                                <input id="autor" type="text" class="form-control" name="autor" value="" required autofocus>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Editorial</label>
                            <div class="col-md-8">
                                <input id="editorial" type="text" class="form-control" name="editorial" value="" required autofocus>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
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
        <h4 class="modal-title">Editar Libro</h4>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" method="POST" action="{{ url('libros_update') }}">
                <div class="form-group">
                    <div class="col-md-8">
                    <label>Titulo</label> 
                    <input id="titulo" type="text" class="form-control" name="titulo" value="" required>  
                    </div>
                </div>
                 {{ csrf_field() }}
                 <div class="form-group">
                    <div class="col-md-8">
                    <label>Autor</label> 
                    <input id="autor" type="text" class="form-control" name="autor" value="" required>  
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-md-8">
                    <label>Editorial</label> 
                    <input id="editorial" type="text" class="form-control" name="editorial" value="" required>  
                    </div>
                </div>
                        <input id="libroId" type="hidden" class="form-control" name="libroId"  value="">
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


<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$('#edit').on('show.bs.modal',function(event){
     //var category_id = $(this).attr('name');
     var button = $(event.relatedTarget)
     var libroId = button.data('myid')
     var titulo = button.data('mytitulo')
     var autor = button.data('myautor')
     var editorial = button.data('myeditorial')
     var modal = $(this)
     modal.find('.modal-body #titulo').val(titulo)
     modal.find('.modal-body #autor').val(autor)
     modal.find('.modal-body #editorial').val(editorial)
     modal.find('.modal-body #libroId').val(libroId)
     //$('#myModal').modal('show');
});
    $(document).on("click", ".btn-danger", function() {
        //   console.log("inside";   <-- here it is
        console.log($(this).attr('name'));
        window.location.href = "/libros_delete/"+$(this).attr('name');
    });
</script>
@endsection
