<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
                       
<body class="gray-bg">
                        
                        @guest
                        
                        @else
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="http://www.bolpegas.com/Resources/Uploads/Image/57ed79e9d5433.png" height="100" width="100" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Administracion Proyectos</strong>
                             </span> </span> </a>
                            
                        </div>
                        
                    </li>
                    <li>
                        <a href="{!!url('/home')!!}"><i class="fa fa-desktop"></i> <span class="nav-label">Inicio</span></a>
                    </li>
                    <li class="active">
                        <a><i class="fa fa-database"></i> <span class="nav-label">Acciones</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <!-- <li><a href="{!!url('/altclientes')!!}">Alta de clientes</a></li>
                            <li><a href="{!!url('/alta_cuenta')!!}">Alta de cuenta</a></li>
                            <li><a href="{!!url('/transferencias')!!}">Transferencias</a></li>
                            <li><a href="{!!url('/clientes')!!}">Lista de clientes</a></li>
                            <li><a href="{!!url('/cuentas')!!}">Resumen de cuentas</a></li>
                            <li><a href="{!!url('/personas')!!}">Personas</a></li>
                            <li><a href="{!!url('/clientes')!!}">Clientes</a></li>
                            <li><a href="{!!url('/libros')!!}">Libros</a></li> -->
                            
                            <li><a href="{!!url('/personas')!!}">Clientes</a></li>
                            <li><a href="{!!url('/proyectos')!!}">Proyectos</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Bienvenido {{ Auth::user()->name }}</span>
                        </li>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                            <form id="logout-form" action="{{ route('logout_admin') }}" method="POST" style="display: none;">
                                        @csrf
                            </form>
                        </li>
                        
                    </ul>

                </nav>
            </div>
            @endguest
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            // setTimeout(function() {
            //     toastr.options = {
            //         closeButton: true,
            //         progressBar: true,
            //         showMethod: 'slideDown',
            //         timeOut: 4000
            //     };
            //     toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

            // }, 1300);
        });
    </script>
</body>
                   
                       

</html>
