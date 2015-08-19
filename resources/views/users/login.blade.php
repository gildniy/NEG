{{--resources/views/users/login.blade.php--}}

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="maincontent">
            <h1>Login</h1>

            <form role="form" method="POST" action="{{ URL::to('/users/login') }}" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="{{ Session::getToken() }}">
                <fieldset>
                    <div class="form-group">
                        <label for="email">{{ Lang::get('confide.e_mail') }}</label>
                        <input class="form-control" tabindex="1"
                               placeholder="{{ Lang::get('confide.e_mail') }}" type="text"
                               name="email" id="email" value="{{ Input::old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="password">
                            {{ Lang::get('confide.password') }}
                        </label>
                        <input class="form-control" tabindex="2"
                               placeholder="{{ Lang::get('confide.password') }}" type="password"
                               name="password" id="password">

                        <p class="help-block">
                            <a href="{{ URL::to('/users/forgot_password') }}">{{ Lang::get('confide.login.forgot_password') }}</a>
                        </p>
                    </div>
                    <div class="checkbox checkbox-primary ">
                        <input tabindex="4" type="checkbox" name="remember" id="remember"
                               value="1">
                        <label for="remember">
                            {{ Lang::get('confide.login.remember') }}
                        </label>

                    </div>
                    @if (Session::get('error'))
                        <div class="alert alert-error alert-danger">{{ Session::get('error') }}</div>
                    @endif

                    @if (Session::get('notice'))
                        <div class="alert alert-success">{{ Session::get('notice') }}</div>
                    @endif
                    <div class="form-group">
                        <button tabindex="3" type="submit"
                                class="btn btn-primary"><i
                                    class="fa fa-sign-in"></i> {{ Lang::get('confide.login.submit') }}</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
</div>