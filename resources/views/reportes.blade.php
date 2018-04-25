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
                  Clientes Registrados: <img src="http://www.coordinadora.com/wp-content/uploads/sidebar_usuario-corporativo.png" width="30" height="30"><strong>{{$toTalClientes}} </strong>
                  <br>
                  <br>
                  Proyectos Registrados : <img src="https://images.vexels.com/media/users/3/141626/isolated/preview/acbf24eebb168dbc694b5eb6dd5c46bf-dibujos-del-proyecto-de-ingenier-a-de-la-construcci-n-by-vexels.png" width="30" height="30"><strong>{{$toTalPRoyects}}</strong>
                  <br>
                  <br>
                  Proyectos Activos : <img src="https://vignette.wikia.nocookie.net/thecrew/images/0/08/Check-mark.png/revision/latest?cb=20140810135849" width="30" height="30"><strong>{{$toTalPRoyectsActivos}}</strong>
                  <br>
                  <br>
                  Proyectos Pendientes : <img src="https://pbs.twimg.com/profile_images/1590687792/Twitter_icon2.png" width="30" height="30"><strong>{{$toTalPRoyectsPendientes}}</strong>
                  <br>
                  <br>
                  Proyectos Cancelados : <img src="https://vignette.wikia.nocookie.net/outlast/images/6/60/X_mark.png/revision/latest?cb=20151113142709&path-prefix=es" width="30" height="30"><strong>{{$toTalPRoyectsCancelados}}</strong>
                  <br>
                  <br>
                  Proyectos Finalizados : <img src="http://www.clker.com/cliparts/j/g/V/V/b/B/hammer-outline-hi.png" width="30" height="30"><strong>{{$toTalPRoyectsFinalizados}}</strong>
                  <br>
                  <br>
                  





                </div>
            </div>
        </div>
    </div>
</div>





@endsection
