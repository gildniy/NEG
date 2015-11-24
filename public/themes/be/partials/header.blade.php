<!--Header starts-->

{{--Assignment of values to let the modal before it is included in the template--}}

{{--*/ $dataTitle = 'Test model' /*--}}
{{--*/ $dataMessage = 'Here is the display of the modal message. This will be used in the website as in any other website? or&hellip;' /*--}}
@include('includes.modal_confirm')

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">National Examinations Gateway</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('userpanel.dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
                <li><a>My role is <b>{{Confide::user()->roles()->first()->name}}</b></a></li>

                @role('admin|super')
                <li><a href="{{ route('manage.users') }}">Manage users</a></li>
                @else
                    <li><a href="#">Notifications</a></li>
                    @endrole

            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-expanded="false">{{ Confide::user()->username }}<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/users/logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>
                {{--@endif--}}
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>


<!--Header ends-->