{{-- THE INCLUDES'SECTION --}}

@include('includes.customFunctions') {{-- For Changing the Time format from MySQL to Normal --}}

<table class="table table-hover table-bordered table-condensed">
    <thead>
    <th class="centered" width="50px"><a href="#"><i class="fa fa-caret-down pull-left"></i></a> #:</th>
    <th class="centered" width="50px">View user:</th>
    <th><a href="#"><i class="fa fa-caret-down pull-left"></i></a> Username:</th>
    <th>Email:</th>
    <th class="centered"><a href="#"><i class="fa fa-caret-down pull-left"></i></a> Status:</th>
    <th class="centered"><a href="#"><i class="fa fa-caret-down pull-left"></i></a> Higher role:</th>
    <th class="centered"><a href="#"><i class="fa fa-caret-down pull-left"></i></a> Last login:</th>
    <th class="centered" width="50px">Change password:</th>
    <th class="centered" width="50px">Remove:</th>
    </thead>

    <tbody>

    @foreach($users as $user)

        <?php
        if ($user->confirmed) {
            $status = 'Active';
            $class = 'btn btn-success';
        } else {
            $status = 'Disabled';
            $class = 'btn btn-danger';
        }

        if (is_null($user->last_login)) {
            $last_login = 'Account not confirmed!';
        } else {
            $last_login = convertMySQLtoNormDate($user->last_login);
        }

        $logged = Confide::user();
        $level_user = $user->level();
        $level_logged = $logged->level();
        $a1 = 'a href="';
        $a2 = 'a';
        $span = 'span';
        $userId = $user->id;
        $loggedId = $logged->id;
        $roles = \Bican\Roles\Models\Role::all();

        if ($userId === $loggedId) {

            $link_view = '';
            $link_status = '';
            $link_pw_change = '';

            $open = $span;
            $close = $span;

            $toll_title_view = 'You cannot view your profile from here';
            $toll_title_status = 'You cannot change your own status';
            $toggle_pw = 'tolltip';
            $toll_title_pw = 'You may not change your password from here';

            $link_status = '';

            $class = 'btn btn-default disabled';

        } elseif ($level_user >= $level_logged and $userId !== $loggedId) {

            $link_view = '';
            $link_status = '';
            $link_pw_change = '';

            $open = $span;
            $close = $span;

            $toll_title_view = 'No permission to manage this user';
            $toll_title_status = 'No permission to change this user\'s status!';
            $toggle_pw = 'tolltip';
            $toll_title_pw = 'No permission to change this user\'s password';

            $link_status = '';

            $class = 'btn btn-default disabled';

        } else {

            $link_view = ' #"';
            $link_pw_change = ' #"';
            $link_status = '';

            $open = $a1;
            $close = $a2;

            $toll_title_view = 'View user profile!';
            $toll_title_status = 'Change user status!';
            $toggle_pw = 'modal';
            $toll_title_pw = 'Change user password!';

        }
        ?>
        <tr>
            <td class="centered"><b>{{ $userId }}</b></td>
            <td class="centered">
                <{{ $open }}{{ $link_view }} data-toggle
                ="tooltip" class="tolltip"
                title="{{ $toll_title_view }}"><i class="fa fa-eye"></i></{{ $close }}>
            </td>

            <td>{{ $user -> username }}</td>
            <td>{{ $user -> email }}</td>

            <td class="centered">
                {!! Form::open (['route' => ['manage.user.status', $userId], 'class' => 'form-inline']) !!}
                <button type="submit" class="{{ $class }} tolltip"
                        style="width: 100px;" data-toggle="tooltip"
                        title="{{ $toll_title_status }}">{{ $status }}</button>
                {!! Form::close() !!}

            </td>
            <td class="centered">

                {!! Form::open(['route' => ['manage.user.assignrole', $userId], 'class' => 'form-inline']) !!}
                <div class="input-group">
                    <select name="role" class="selectpicker form-control" data-style="btn-info" data-width="155px"
                            @if(!$user->confirmed or $level_user >= $level_logged) disabled @else @endif>

                        @foreach ($roles as $role)

                            {{--*/$roleId = $role->id;/*--}}
                            {{--*/$level_role = $role->level;/*--}}

                            @if($level_role === $level_user|$level_role >= $level_logged)
                                @if ($level_role === $level_user)
                                    <option disabled selected value="{{ $roleId }}">{{ $role->name }}</option>@endif
                                @if ($level_role >= $level_logged && $level_role !== $level_user)
                                    <option disabled value="{{ $roleId }}">{{ $role->name }}</option>@endif
                            @else
                                <option value="{{ $roleId }}">{{ $role->name }}</option>
                            @endif

                        @endforeach

                    </select>

                    <div class="input-group-btn">
                        <?php
                        if (!$user->confirmed or $level_user >= $level_logged) {
                            $disablement = 'disabled';
                        } else {
                            $disablement = '';
                        }
                        ?>
                        {!! Form::submit('Assign a role', array('class'=>'btn btn-primary', $disablement)) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </td>
            <td class="centered">{{ $last_login }}</td>

            <td class="centered">

                @if ($level_user <= $level_logged and $userId !== $loggedId)
                    @include('includes.modal_password', ['user'=>$user, 'userId'=>$userId])
                @endif

                <{{ $open }}{{ $link_view }} data-toggle
                ="{{ $toggle_pw }}"
                data-target="#pwChangeModal{{ $userId }}"
                title="{{ $toll_title_pw }}"><i class="fa fa-lock"></i>
            </{{ $close }}>

            </td>

            <td class="centered">

                @if($userId === $loggedId)

                    <i title="You may not remove your own account from here!"
                       class="glyphicon glyphicon-remove tolltip"
                       style="color: #656565"></i>

                @elseif($level_user >= $level_logged)

                    <i title="No permission to remove this user!"
                       class="glyphicon glyphicon-remove tolltip"
                       style="color: #656565"></i>

                @else

                    <a data-href="{{ route('users.manager.delete', [$userId]) }}"
                       data-placement="top"
                       title="Delete user?"
                       class="confirmation"><i class="glyphicon glyphicon-remove"></i></a>

                @endif

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
