@extends('layouts.app')

@section('content')


<?php 



 ?>

<div class="container">
         




<br>


</div>


<div class="">
    <div class="">
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"><div class="col-md-2"></div>
                  <img src="http://www.c2digitalagency.es/wp-content/uploads/2014/10/marketing.png" width="150" height="150">
                </div>
                <div class="panel-body">
                  Total proyectos Registrados : {{$toTalPRoyects}}
                  <br>
                  Total proyectos Activos : {{$toTalPRoyectsActivos}}
                  <br>
                  Total proyectos Cancelados : {{$toTalPRoyectsCancelados}}
                  <br>
                  Total proyectos Finalizados : {{$toTalPRoyectsFinalizados}}
                  <br>
                  Total Clientes Registrados: {{$toTalClientes}} 
                  




                </div>
            </div>
        </div>
    </div>
</div>





@endsection
