<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{!! Theme::get('title') !!}</title>

    <!-- Favorite icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
    <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap and Font awesome -->
    <link href="{{ asset("/bower_components/inspinia/assets/css/bootstrap.min.css") }}" rel="stylesheet"
          type="text/css"/>

    <link href="{{ asset("/bower_components/inspinia/assets/font-awesome/css/font-awesome.css") }}" rel="stylesheet">

    <!-- Morris -->
    <link href="{{ asset("/bower_components/inspinia/assets/css/plugins/morris/morris-0.4.3.min.css") }}"
          rel="stylesheet">

    <link href="{{ asset("/bower_components/inspinia/assets/css/animate.css") }}" rel="stylesheet">
    <link href="{{ asset("/bower_components/inspinia/assets/css/style.css") }}" rel="stylesheet">

</head>

<body class="fixed-navigation">
<div id="wrapper">

    {!! Theme::partial('aside') !!}

    <div id="page-wrapper" class="gray-bg sidebar-content">

        {!! Theme::partial('header') !!}

        {!! Theme::content() !!}

        {!! Theme::partial('footer') !!}

    </div>
</div>

{{--{!! Theme::asset()->container('footer')->scripts() !!}--}}

<!-- Mainly scripts -->
<script src="{{ asset("/bower_components/inspinia/assets/js/jquery-2.1.1.js") }}"></script>
<script src="{{ asset("/bower_components/inspinia/assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/metisMenu/jquery.metisMenu.js") }}"></script>
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/slimscroll/jquery.slimscroll.min.js") }}"></script>

<!-- Flot -->
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/flot/jquery.flot.js") }}"></script>
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/flot/jquery.flot.tooltip.min.js") }}"></script>
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/flot/jquery.flot.spline.js") }}"></script>
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/flot/jquery.flot.resize.js") }}"></script>
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/flot/jquery.flot.pie.js") }}"></script>
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/flot/jquery.flot.symbol.js") }}"></script>
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/flot/curvedLines.js") }}"></script>

<!-- Peity -->
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/peity/jquery.peity.min.js") }}"></script>
<script src="{{ asset("/bower_components/inspinia/assets/js/demo/peity-demo.js") }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset("/bower_components/inspinia/assets/js/inspinia.js") }}"></script>
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/pace/pace.min.js") }}"></script>

<!-- jQuery UI -->
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/jquery-ui/jquery-ui.min.js") }}"></script>

<!-- Jvectormap -->
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}"></script>
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}"></script>

<!-- Sparkline -->
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/sparkline/jquery.sparkline.min.js") }}"></script>

<!-- Sparkline demo data  -->
<script src="{{ asset("/bower_components/inspinia/assets/js/demo/sparkline-demo.js") }}"></script>

<!-- ChartJS-->
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/chartJs/Chart.min.js") }}"></script>

<script>
    $(document).ready(function () {

        var lineData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Example dataset",
                    fillColor: "rgba(220,220,220,0.5)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "Example dataset",
                    fillColor: "rgba(26,179,148,0.5)",
                    strokeColor: "rgba(26,179,148,0.7)",
                    pointColor: "rgba(26,179,148,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(26,179,148,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };

        var lineOptions = {
            scaleShowGridLines: true,
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleGridLineWidth: 1,
            bezierCurve: true,
            bezierCurveTension: 0.4,
            pointDot: true,
            pointDotRadius: 4,
            pointDotStrokeWidth: 1,
            pointHitDetectionRadius: 20,
            datasetStroke: true,
            datasetStrokeWidth: 2,
            datasetFill: true,
            responsive: true,
        };


        var ctx = document.getElementById("lineChart").getContext("2d");
        var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

    });
</script>

</body>
</html>

{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--<title>{!! Theme::get('title') !!}</title>--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="keywords" content="{!! Theme::get('keywords') !!}">--}}
{{--<meta name="description" content="{!! Theme::get('description') !!}">--}}
{{--{!! Theme::asset()->styles() !!}--}}
{{--{!! Theme::asset()->scripts() !!}--}}
{{--</head>--}}
{{--<body>--}}
{{--{!! Theme::partial('header') !!}--}}

{{--<div class="container">--}}
{{--{!! Theme::content() !!}--}}
{{--</div>--}}

{{--{!! Theme::partial('footer') !!}--}}

{{--{!! Theme::asset()->container('footer')->scripts() !!}--}}
{{--</body>--}}
{{--</html>--}}