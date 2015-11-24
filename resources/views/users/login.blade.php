{{--resources/views/users/login.blade.php--}}

{{--<div class="row">--}}
{{--<div class="col-md-8 col-md-offset-2">--}}
{{--<div class="maincontent">--}}
{{--<h1>Login</h1>--}}

{{--<form role="form" method="POST" action="{{ URL::to('/users/login') }}" accept-charset="UTF-8">--}}
{{--<input type="hidden" name="_token" value="{{ Session::getToken() }}">--}}
{{--<fieldset>--}}
{{--<div class="form-group">--}}
{{--<label for="email">{{ Lang::get('confide.e_mail') }}</label>--}}
{{--<input class="form-control" tabindex="1"--}}
{{--placeholder="{{ Lang::get('confide.e_mail') }}" type="text"--}}
{{--name="email" id="email" value="{{ Input::old('email') }}">--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label for="password">--}}
{{--{{ Lang::get('confide.password') }}--}}
{{--</label>--}}
{{--<input class="form-control" tabindex="2"--}}
{{--placeholder="{{ Lang::get('confide.password') }}" type="password"--}}
{{--name="password" id="password">--}}

{{--<p class="help-block">--}}
{{--<a href="{{ URL::to('/users/forgot_password') }}">{{ Lang::get('confide.login.forgot_password') }}</a>--}}
{{--</p>--}}
{{--</div>--}}
{{--<div class="checkbox checkbox-primary ">--}}
{{--<input tabindex="4" type="checkbox" name="remember" id="remember"--}}
{{--value="1">--}}
{{--<label for="remember">--}}
{{--{{ Lang::get('confide.login.remember') }}--}}
{{--</label>--}}

{{--</div>--}}
{{--@if (Session::get('error'))--}}
{{--<div class="alert alert-error alert-danger">{{ Session::get('error') }}</div>--}}
{{--@endif--}}

{{--@if (Session::get('notice'))--}}
{{--<div class="alert alert-success">{{ Session::get('notice') }}</div>--}}
{{--@endif--}}
{{--<div class="form-group">--}}
{{--<button tabindex="3" type="submit"--}}
{{--class="btn btn-primary"><i--}}
{{--class="fa fa-sign-in"></i> {{ Lang::get('confide.login.submit') }}</button>--}}
{{--</div>--}}
{{--</fieldset>--}}
{{--</form>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

        <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NEG | Login</title>

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

    <link href="{{ asset("/bower_components/inspinia/assets/css/bootstrap.min.css") }}" rel="stylesheet"
          type="text/css"/>

    <link href="{{ asset("/bower_components/inspinia/assets/font-awesome/css/font-awesome.css") }}" rel="stylesheet">

    <link href="{{ asset("/bower_components/inspinia/assets/css/animate.css") }}" rel="stylesheet">
    <link href="{{ asset("/bower_components/inspinia/assets/css/style.css") }}" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">NEG</h1>

        </div>
        <h3>Welcome to NEG</h3>

        <p>Login and enjoy additional NEG features and services</p>

        <form class="m-t" role="form" method="POST" action="{{ URL::to('/users/login') }}" accept-charset="UTF-8">
            <input type="hidden" name="_token" value="{{ Session::getToken() }}">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" tabindex="1"
                           placeholder="{{ Lang::get('confide.e_mail') }}" type="text"
                           name="email" id="email" value="{{ Input::old('email') }}">
                </div>
                <div class="form-group">
                    <input class="form-control" tabindex="2"
                           placeholder="{{ Lang::get('confide.password') }}" type="password"
                           name="password" id="password">
                </div>

                @if (Session::get('error'))
                    <div class="alert alert-error alert-danger">{{ Session::get('error') }}</div>
                @endif

                @if (Session::get('notice'))
                    <div class="alert alert-success">{{ Session::get('notice') }}</div>
                @endif

                <button tabindex="3" type="submit"
                        class="btn btn-primary block full-width m-b">{{ Lang::get('confide.login.submit') }}</button>

                <p class="text-muted text-center">
                    <small>If you cannot login</small>
                </p>

                <a class="btn btn-sm btn-white btn-block"
                   href="{{ URL::to('/users/forgot_password') }}">{{ Lang::get('confide.login.forgot_password') }}</a>

                <p class="text-muted text-center">
                    <small>Or...</small>
                </p>

                <a class="btn btn-sm btn-white btn-block"
                   href="{{ URL::to('/users/create') }}">{{ Lang::get('confide.signup.submit') }}</a>
            </fieldset>
        </form>
        <p class="m-t">
            {{ trans('theme.copyright') }}
            {{ date('Y')}}
        </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{ asset("/bower_components/inspinia/assets/js/jquery-2.1.1.js") }}"></script>
<script src="{{ asset("/bower_components/inspinia/assets/js/bootstrap.min.js") }}"></script>

</body>

</html>
