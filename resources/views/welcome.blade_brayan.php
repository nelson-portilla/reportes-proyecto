@extends('master')

@section ('css')
<link href="{{url()}}/assets/css/datapicker/datapicker3.css" rel="stylesheet">

@stop
@section ('content')

<h1 class="page-header"> Comparativo de promociones </h1>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#value">Ventas en internet</a>
            </h2>
        </div>
        <div id="value" class = "collapse">
            Desde
            <input  class = "date_month" name="inicio" id="inicio" value = "2010-01" >

            hasta
            <input class = "date_month" name="fin" id="fin" value = "2014-01">


            <button type="button" name = "graph_promotion_volume" id = "graph_promotion_volume" class="btn btn-primary" >Graficar</button>


            <div id="chartdiv" style="height:400px"></div>
            <div class="row text-center" style="overflow:hidden;">
                <div class="col-sm-3" style="float: none !important;display: inline-block;">
                    <label class="text-left">Top Radius:</label>
                    <input class="chart-input" data-property="topRadius" type="range" min="0" max="1.5" value="1" step="0.01"/>
                </div>

                <div class="col-sm-3" style="float: none !important;display: inline-block;">
                    <label class="text-left">Angle:</label>
                    <input class="chart-input" data-property="angle" type="range" min="0" max="89" value="30" step="1"/>
                </div>

                <div class="col-sm-3" style="float: none !important;display: inline-block;">
                    <label class="text-left">Depth:</label>
                    <input class="chart-input" data-property="depth3D" type="range" min="1" max="120" value="40" step="1"/>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#value2">Ventas vendedores</a>
            </h2>
        </div>
        <div id="value2" class = "collapse">
            Desde
            <input  class = "date_month" name="inicio_resell" id="inicio_resell" value = "2010-01" >

            hasta
            <input class = "date_month" name="fin_resell" id="fin_resell" value = "2014-01">


            <button type="button" name = "graph_promotion2" id = "graph_promotion2" class="btn btn-primary" >Graficar</button>


            <div id="chartdiv2" style="height:400px"></div>
            <div class="row text-center" style="overflow:hidden;">
                <div class="col-sm-3" style="float: none !important;display: inline-block;">
                    <label class="text-left">Top Radius:</label>
                    <input class="chart-input" data-property="topRadius" type="range" min="0" max="1.5" value="1" step="0.01"/>
                </div>

                <div class="col-sm-3" style="float: none !important;display: inline-block;">
                    <label class="text-left">Angle:</label>
                    <input class="chart-input" data-property="angle" type="range" min="0" max="89" value="30" step="1"/>
                </div>

                <div class="col-sm-3" style="float: none !important;display: inline-block;">
                    <label class="text-left">Depth:</label>
                    <input class="chart-input" data-property="depth3D" type="range" min="1" max="120" value="40" step="1"/>
                </div>
            </div>
        </div>
    </div>

    @stop
    @section('js')
    @parent
    <script src="http://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="http://www.amcharts.com/lib/3/serial.js"></script>
    <script src="http://www.amcharts.com/lib/3/themes/light.js"></script>
    <script src="https://www.amcharts.com/lib/3/pie.js"></script>


    <script  src="{{url()}}/assets/js/promociones_por_volumen.js"></script>
    <script  src="{{url()}}/assets/js/datapicker/bootstrap-datapicker.js"></script>

    <script>
        $( ".date" ).datepicker({
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true,
            format: "yyyy-mm-dd",
            startDate: "2005/01/01",
            endDate: "+0d",
        });
        $( ".date_month" ).datepicker({
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true,
            format: "yyyy-mm",
            startView: "year",
            minViewMode: "months",
            startDate: "2005/01/",
            endDate: "+0m",
        });
        $( ".date_year" ).datepicker({
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true,
            format: "yyyy",
            startView: "year",
            startDate: "2005",
            minViewMode: "years",
            endDate: "+0m",
        });
    </script>

    @stop