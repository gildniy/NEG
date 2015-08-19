<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="{!! Theme::get('author') !!}">
<meta name="description" content="{!! Theme::get('description') !!}">
<meta name="keywords" content="{!! Theme::get('keywords') !!}">

<title>
    @section('title')
        N.E.G -
        {{Theme::get('title')}}
    @show
</title>
<link href="{{elixir('css/app.css')}}" rel="stylesheet" type='text/css'>
<link href="{{asset('css/custom.css')}}" rel="stylesheet" type='text/css'>
<link href="{{asset('css/bootstrap-select.min.css')}}" rel="stylesheet" type='text/css'>
{!! Theme::asset()->styles() !!}
{!! Theme::asset()->scripts() !!}
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

{{--<script type="text/javascript" src="{{ asset(config('ajaxCrud.ajax_crud_js_path')) }}"></script>--}}

<link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
<link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>