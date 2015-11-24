{{--resources/views/users/signup.blade.php--}}

{{--<div class="row">--}}
    {{--<div class="col-md-8 col-md-offset-2">--}}
        {{--<div class="maincontent">--}}
            {{--<h1>Register</h1>--}}

            {{--<form method="POST" action="{{ URL::to('users') }}" accept-charset="UTF-8">--}}
                {{--<input type="hidden" name="_token" value="{{ Session::getToken() }}">--}}
                {{--<fieldset>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="username">{{ Lang::get('confide.username') }}</label>--}}
                        {{--<input class="form-control"--}}
                               {{--placeholder="{{ Lang::get('confide.username') }}" type="text"--}}
                               {{--name="username" id="username" value="{{ Input::old('username') }}">--}}
                    {{--</div>--}}
                    {{--@if (Cache::remember('username_in_confide', 5, function() {--}}
                    {{--return Schema::hasColumn(Config::get('auth.table'), 'username');--}}
                    {{--}))@endif--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="email">{{ Lang::get('confide.e_mail') }}--}}
                            {{--<small>{{ Lang::get('confide.signup.confirmation_required') }}</small>--}}
                        {{--</label>--}}
                        {{--<input class="form-control"--}}
                               {{--placeholder="{{ Lang::get('confide.e_mail') }}" type="text"--}}
                               {{--name="email" id="email" value="{{ Input::old('email') }}">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="password">{{ Lang::get('confide.password') }}</label>--}}
                        {{--<input class="form-control"--}}
                               {{--placeholder="{{ Lang::get('confide.password') }}" type="password"--}}
                               {{--name="password" id="password">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="password_confirmation">--}}
                            {{--{{ Lang::get('confide.password_confirmation') }}</label>--}}
                        {{--<input class="form-control"--}}
                               {{--placeholder="{{ Lang::get('confide.password_confirmation') }}"--}}
                               {{--type="password" name="password_confirmation" id="password_confirmation">--}}
                    {{--</div>--}}

                    {{--@if (Session::get('error'))--}}
                        {{--<div class="alert alert-error alert-danger">--}}
                            {{--@if (is_array(Session::get('error')))--}}
                                {{--{{ head(Session::get('error')) }}--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--@if (Session::get('notice'))--}}
                        {{--<div class="alert">{{ Session::get('notice') }}</div>--}}
                    {{--@endif--}}

                    {{--<div class="form-actions form-group">--}}
                        {{--<button type="submit"--}}
                                {{--class="btn btn-primary"><i--}}
                                    {{--class="fa fa-plus-square-o"></i> {{ Lang::get('confide.signup.submit') }}--}}
                        {{--</button>--}}
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

    <title>NEG | Register</title>

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

    <link href="{{ asset("/bower_components/inspinia/assets/css/plugins/iCheck/custom.css") }}" rel="stylesheet">

    <link href="{{ asset("/bower_components/inspinia/assets/css/animate.css") }}" rel="stylesheet">
    <link href="{{ asset("/bower_components/inspinia/assets/css/style.css") }}" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">NEG</h1>

        </div>
        <h3>Register to NEG</h3>
        <p>For interacting with other members.</p>

        <form class="m-t" method="POST" action="{{ URL::to('users') }}" accept-charset="UTF-8">
            <input type="hidden" name="_token" value="{{ Session::getToken() }}">
            <fieldset>

                <div class="form-group">
                    {{--<label for="username">{{ Lang::get('confide.username') }}</label>--}}
                    <input class="form-control"
                           placeholder="{{ Lang::get('confide.username') }}" type="text"
                           name="username" id="username" value="{{ Input::old('username') }}">
                </div>
                @if (Cache::remember('username_in_confide', 5, function() {
                return Schema::hasColumn(Config::get('auth.table'), 'username');
                }))@endif
                <div class="form-group">
                    {{--<label for="email">{{ Lang::get('confide.e_mail') }}--}}
                        {{--<small>{{ Lang::get('confide.signup.confirmation_required') }}</small>--}}
                    {{--</label>--}}
                    <input class="form-control"
                           placeholder="{{ Lang::get('confide.e_mail') }}" type="text"
                           name="email" id="email" value="{{ Input::old('email') }}">
                </div>
                <div class="form-group">
                    {{--<label for="password">{{ Lang::get('confide.password') }}</label>--}}
                    <input class="form-control"
                           placeholder="{{ Lang::get('confide.password') }}" type="password"
                           name="password" id="password">
                </div>
                <div class="form-group">
                    {{--<label for="password_confirmation">--}}
                        {{--{{ Lang::get('confide.password_confirmation') }}</label>--}}
                    <input class="form-control"
                           placeholder="{{ Lang::get('confide.password_confirmation') }}"
                           type="password" name="password_confirmation" id="password_confirmation">
                </div>

                <div class="form-group">
                    <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                </div>

                @if (Session::get('error'))
                    <div class="alert alert-error alert-danger">
                        @if (is_array(Session::get('error')))
                            {{ head(Session::get('error')) }}
                        @endif
                    </div>
                @endif

                @if (Session::get('notice'))
                    <div class="alert">{{ Session::get('notice') }}</div>
                @endif

                <div class="form-actions form-group">
                    <button type="submit"
                            class="btn btn-primary block full-width m-b">{{ Lang::get('confide.signup.submit') }}
                    </button>
                </div>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ URL::to('/users/login') }}">{{ Lang::get('confide.login.submit') }}</a>


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

<!-- iCheck -->
<script src="{{ asset("/bower_components/inspinia/assets/js/plugins/iCheck/icheck.min.js") }}"></script>
<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>

</body>

</html>