<?php
require_once('../../model/conexion.php');
require_once('../../model/validarSesion.php');
require_once('../../controller/seguridadAdmin.php');

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin Dashboard</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Toastr -->
    <link href="../dashboard/css/lib/toastr/toastr.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="../dashboard/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="../dashboard/css/lib/rangSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="../dashboard/css/lib/rangSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bar Rating -->
    <link href="../dashboard/css/lib/barRating/barRating.css" rel="stylesheet">
    <!-- Nestable -->
    <link href="../dashboard/css/lib/nestable/nestable.css" rel="stylesheet">
    <!-- JsGrid -->
    <link href="../dashboard/css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
    <link href="../dashboard/css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
    <!-- Datatable -->
    <link href="../dashboard/css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="../dashboard/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <!-- Calender 2 -->
    <link href="../dashboard/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <!-- Weather Icon -->
    <link href="../dashboard/css/lib/weather-icons.css" rel="stylesheet" />
    <!-- Owl Carousel -->
    <link href="../dashboard/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../dashboard/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Select2 -->
    <link href="../dashboard/css/lib/select2/select2.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link href="../dashboard/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <!-- Calender -->
    <link href="../dashboard/css/lib/calendar/fullcalendar.css" rel="stylesheet" />

    <!-- Common -->
    <link href="../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../dashboard/css/style.css" rel="stylesheet">
</head>

<body>

<?php

include("../include/menuAdministrador.php");

?>



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>registrar usuarios</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">UI-Blank</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>formulario de registro</h4>
                                    <p>por favor complete el formulario para registar un nuevo usuario</p>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="../../controller/insertUserAdmin.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                            <div class="mb-3 col-md-4">
                      <label for="identificacion" class="form-label">IDENTIFICACION</label>
                      <input type="number" class="form-control" id="identificacion" name="identificacion"  placeholder="Ej: 1.085.454.277">
                      </div>

                      <div class="mb-3 col-md-4">
                        <label for="tipoDoc" class="form-label">tipo de documento</label>
                        <select class="form-control" name="tipoDoc" aria-label="Default select example">
                            <option selected>selecione</option>
                            <option value="cc">CC</option>
                            <option value="TI">TI</option>
                            <option value="CE">CE</option>
                          </select>
                      </div>
                        
                        <div class="mb-3 col-md-4">
                          <label for="nombres" class="form-label">Nombres</label>
                          <input type="text" class="form-control" id="nombres" required name="nombres" placeholder="Ej: Pepe Andres">
                        </div>

                        <div class="mb-3 col-md-4">
                          <label for="foto" class="form-label">foto usuario</label>
                          <input type="file" class="form-control"  required name="foto" accept=".jpg, .png, .jpeg, .gif">
                          <small> tamaño maximo 2mb </small>
                        </div>

                          <div class="mb-3 col-md-4">
                            <label for="apellidos" class="form-label">apellidos</label>
                            <input type="text" class="form-control" id="apellidos" required name="apellidos"  placeholder="Ej: Gonzales Rodrigez">
                          </div>

                            <div class="mb-3 col-md-4">
                              <label for="email" class="form-label">email</label>
                              <input type="email" class="form-control" id="email" required name="email"  placeholder="Ej: pepejunior@example.com">
                            </div>

                            <div class="mb-3 col-md-4">
                              <label for="telefono" class="form-label">telefono</label>
                              <input type="number" class="form-control" id="telefono"  required name="telefono"  placeholder="Ej:3219822175">
                            </div>
                           
                            <div class="mb-3 col-md-4">
                        <label for="rol" class="form-label">rol</label>
                        <select class="form-control" required name="rol" aria-label="Default select example">
                            <option selected>selecione</option>
                            <option value="admin">administrador</option>
                            <option value="vendedor">vendedor </option>
                            <option value="usuario">usuario</option>
                          </select>
                          
                          
                      </div>

                           
                            <div class="mb-3 col-md-4">
                        <label for="estado" class="form-label">estado</label>
                        <select class="form-control" required name="estado" aria-label="Default select example">
                            <option selected>selecione</option>
                            <option value="activo">activo</option>
                            <option value="pendiente">pendiente</option>
                          </select>

                            </div>
                                            
                                            
                                            <button type="submit" class="btn btn-default bg-primary">Registrar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        
                        <!-- /# column -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="extra-area-chart"></div>
                            <div id="morris-line-chart"></div>
                            <div class="footer">
                                <p>2018 © Admin Board. -
                                    <a href="#">example.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>




    <!-- Common -->
    <script src="../dashboard/js/lib/jquery.min.js"></script>
    <script src="../dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../dashboard/js/scripts.js"></script>

    <!-- Calender -->
    <script src="../dashboard/js/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="../dashboard/js/lib/moment/moment.js"></script>
    <script src="../dashboard/js/lib/calendar/fullcalendar.min.js"></script>
    <script src="../dashboard/js/lib/calendar/fullcalendar-init.js"></script>

    <!--  Flot Chart -->
    <script src="../dashboard/js/lib/flot-chart/excanvas.min.js"></script>
    <script src="../dashboard/js/lib/flot-chart/jquery.flot.js"></script>
    <script src="../dashboard/js/lib/flot-chart/jquery.flot.pie.js"></script>
    <script src="../dashboard/js/lib/flot-chart/jquery.flot.time.js"></script>
    <script src="../dashboard/js/lib/flot-chart/jquery.flot.stack.js"></script>
    <script src="../dashboard/js/lib/flot-chart/jquery.flot.resize.js"></script>
    <script src="../dashboard/js/lib/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="../dashboard/js/lib/flot-chart/curvedLines.js"></script>
    <script src="../dashboard/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../dashboard/js/lib/flot-chart/flot-chart-init.js"></script>

    <!--  Chartist -->
    <script src="../dashboard/js/lib/chartist/chartist.min.js"></script>
    <script src="../dashboard/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dashboard/js/lib/chartist/chartist-init.js"></script>

    <!--  Chartjs -->
    <script src="../dashboard/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../dashboard/js/lib/chart-js/chartjs-init.js"></script>

    <!--  Knob -->
    <script src="../dashboard/js/lib/knob/jquery.knob.min.js "></script>
    <script src="../dashboard/js/lib/knob/knob.init.js "></script>

    <!--  Morris -->
    <script src="../dashboard/js/lib/morris-chart/raphael-min.js"></script>
    <script src="../dashboard/js/lib/morris-chart/morris.js"></script>
    <script src="../dashboard/js/lib/morris-chart/morris-init.js"></script>

    <!--  Peity -->
    <script src="../dashboard/js/lib/peitychart/jquery.peity.min.js"></script>
    <script src="../dashboard/js/lib/peitychart/peitychart.init.js"></script>

    <!--  Sparkline -->
    <script src="../dashboard/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="../dashboard/js/lib/sparklinechart/sparkline.init.js"></script>

    <!-- Select2 -->
    <script src="../dashboard/js/lib/select2/select2.full.min.js"></script>

    <!--  Validation -->
    <script src="../dashboard/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="../dashboard/js/lib/form-validation/jquery.validate-init.js"></script>

    <!--  Circle Progress -->
    <script src="../dashboard/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="../dashboard/js/lib/circle-progress/circle-progress-init.js"></script>

    <!--  Vector Map -->
    <script src="../dashboard/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="../dashboard/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="../dashboard/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.france.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.usa.js"></script>

    <!--  Simple Weather -->
    <script src="../dashboard/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="../dashboard/js/lib/weather/weather-init.js"></script>

    <!--  Owl Carousel -->
    <script src="../dashboard/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../dashboard/js/lib/owl-carousel/owl.carousel-init.js"></script>

    <!--  Calender 2 -->
    <script src="../dashboard/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="../dashboard/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="../dashboard/js/lib/calendar-2/pignose.init.js"></script>


    <!-- Datatable -->
    <script src="../dashboard/js/lib/data-table/datatables.min.js"></script>
    <script src="../dashboard/js/lib/data-table/buttons.dataTables.min.js"></script>
    <script src="../dashboard/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../dashboard/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="../dashboard/js/lib/data-table/jszip.min.js"></script>
    <script src="../dashboard/js/lib/data-table/pdfmake.min.js"></script>
    <script src="../dashboard/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../dashboard/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../dashboard/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../dashboard/js/lib/data-table/datatables-init.js"></script>

    <!-- JS Grid -->
    <script src="../dashboard/js/lib/jsgrid/db.js"></script>
    <script src="../dashboard/js/lib/jsgrid/jsgrid.core.js"></script>
    <script src="../dashboard/js/lib/jsgrid/jsgrid.load-indicator.js"></script>
    <script src="../dashboard/js/lib/jsgrid/jsgrid.load-strategies.js"></script>
    <script src="../dashboard/js/lib/jsgrid/jsgrid.sort-strategies.js"></script>
    <script src="../dashboard/js/lib/jsgrid/jsgrid.field.js"></script>
    <script src="../dashboard/js/lib/jsgrid/fields/jsgrid.field.text.js"></script>
    <script src="../dashboard/js/lib/jsgrid/fields/jsgrid.field.number.js"></script>
    <script src="../dashboard/js/lib/jsgrid/fields/jsgrid.field.select.js"></script>
    <script src="../dashboard/js/lib/jsgrid/fields/jsgrid.field.checkbox.js"></script>
    <script src="../dashboard/js/lib/jsgrid/fields/jsgrid.field.control.js"></script>
    <script src="../dashboard/js/lib/jsgrid/jsgrid-init.js"></script>

    <!--  Datamap -->
    <script src="../dashboard/js/lib/datamap/d3.min.js"></script>
    <script src="../dashboard/js/lib/datamap/topojson.js"></script>
    <script src="../dashboard/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="../dashboard/js/lib/datamap/datamap-init.js"></script>

    <!--  Nestable -->
    <script src="../dashboard/js/lib/nestable/jquery.nestable.js"></script>
    <script src="../dashboard/js/lib/nestable/nestable.init.js"></script>

    <!--ION Range Slider JS-->
    <script src="../dashboard/js/lib/rangeSlider/ion.rangeSlider.min.js"></script>
    <script src="../dashboard/js/lib/rangeSlider/moment.js"></script>
    <script src="../dashboard/js/lib/rangeSlider/moment-with-locales.js"></script>
    <script src="../dashboard/js/lib/rangeSlider/rangeslider.init.js"></script>

    <!-- Bar Rating-->
    <script src="../dashboard/js/lib/barRating/jquery.barrating.js"></script>
    <script src="../dashboard/js/lib/barRating/barRating.init.js"></script>

    <!-- jRate -->
    <script src="../dashboard/js/lib/rating1/jRate.min.js"></script>
    <script src="../dashboard/js/lib/rating1/jRate.init.js"></script>

    <!-- Sweet Alert -->
    <script src="../dashboard/js/lib/sweetalert/sweetalert.min.js"></script>
    <script src="../dashboard/js/lib/sweetalert/sweetalert.init.js"></script>

    <!-- Toastr -->
    <script src="../dashboard/js/lib/toastr/toastr.min.js"></script>
    <script src="../dashboard/js/lib/toastr/toastr.init.js"></script>





























    <!--  Dashboard 1 -->
    <script src="../dashboard/js/dashboard1.js"></script>
    <script src="../dashboard/js/dashboard2.js"></script>

</body>

</html>