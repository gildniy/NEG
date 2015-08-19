{{--resources/views/users/forgot_password.blade.php--}}

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="maincontent" style="width: 60%;">
            <h1>Reset Password</h1>

            <form method="POST" action="{{ URL::to('/users/forgot_password') }}" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="{{ Session::getToken() }}">

                <div class="form-group">
                    <label for="email">{{ Lang::get('confide.e_mail') }}</label>

                    <div class="input-append input-group">
                        <input class="form-control"
                               placeholder="{{ Lang::get('confide.e_mail') }}" type="text"
                               name="email" id="email" value="{{ Input::old('email') }}">
            <span class="input-group-btn">
                <button type="submit"
                        class="btn btn-primary"><i class="fa fa-refresh"></i> {{ Lang::get('confide.forgot.submit') }}
                </button>
            </span>
                    </div>
                </div>

                @if (Session::get('error'))
                    <div class="alert alert-error alert-danger">{{ Session::get('error') }}</div>
                @endif

                @if (Session::get('notice'))
                    <div class="alert">{{ Session::get('notice') }}</div>
                @endif
            </form>
        </div>
    </div>
</div>
