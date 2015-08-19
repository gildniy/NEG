@include('includes.customFunctions')

<table class="table table-hover table-bordered table-condensed" width="400px">
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

        $logged = Confide::user()->find(1);
        $level_user = $user->level();
        $level_logged = Confide::user()->level();
        $level_role = $role->level();
        $a1 = '<a href="';
        $a2 = '</a>';
        $span1 = '<span ';
        $span2 = '</span>';

        if ($level_user->id == $level_logged->id) {

            $link_view = '""';
            $link_status = '""';
            $link_pw_change = '""';

            $open = $span1;
            $close = $span2;

            $toll_title_view = 'You cannot view your profile from here';
            $toll_title_status = 'You can\'t change your own status';
            $toll_title_pw = 'You may not change your password from here';

            $link_status = '';
            $remove_cntnt = '<i title="You may not remove your own account from here!"
                       class="glyphicon glyphicon-remove tolltip"
                       style="color: #656565"></i>';
        } elseif ($level_user >= $level_logged) {

            $link_view = '""';
            $link_status = '""';
            $link_pw_change = '""';

            $open = $span1;
            $close = $span2;

            $toll_title_view = 'No permission to manage this user';
            $toll_title_status = 'No permission to change this user\'s status!';
            $toll_title_pw = 'No permission to change this user\'s password';

            $link_status = '';
            $remove_cntnt = '<i title="No permission to remove this user!"
                       class="glyphicon glyphicon-remove tolltip"
                       style="color: #656565"></i>';
        } else {

            $link_view = '#"';
            $link_pw_change = '#"';
            $link_status = '""';

            $open = $a1;
            $close = $a2;

            $toll_title_view = 'View user profile!';
            $toll_title_status = 'Change user status!';
            $toll_title_pw = 'Change user password!';

            $link_status = '{{ route("manage.user.status", [$user->id]) }}"';
            $remove_cntnt = '<a data-href="{{ route("users.manager.delete", [$user->id]) }}"
                       data-placement="top"
                       title="Delete user?"
                       class="confirmation"><i
                                class="glyphicon glyphicon-remove"></i></a>';

        }

        ?>

        <tr>
            <td class="centered"><b>{{ $user->id }}</b></td>
            <td class="centered">
                {{ $open }}."".{{ $link_view }}." data-toggle="tooltip" class="tolltip" title="{{ $toll_title_view }}
                "><i
                        class="fa fa-eye"></i>. {{ $close }}
            </td>

            <td>{{ $user -> username }}</td>
            <td>{{ $user -> email }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->confirmation_code }}</td>
            <td>{{ $user->remember_token }}</td>
            <td class="centered">
                {{ $open }}."".{{ $link_status }}." type="button" class="{{ $class }} tolltip"
                style="width: 100px;" data-toggle="tooltip"
                title="{{ $toll_title_status }}">{{ $status }}."".{{ $close }}

            </td>
            <td class="centered">
                <form class="form-inline">
                    <div class="input-group">
                        <select class="selectpicker form-control" data-style="btn-info" data-width="155px">

                            ## Listing the roles and preventing them to be accessed by users of low level ###

                            <?php
                            $roles = Bican\Roles\Models\Role::all();
                            foreach ($roles as $role) {
                                if ($level_role > $level_logged) {
                                    $btn_disability = 'disabled';
                                    $btn_link = 'href="#"';

                                    echo '<option disabled="disabled">{{ $role->name }}</option>';
                                } elseif ($level_role = $level_logged) {
                                    $btn_disability = '';
                                    $btn_link = '';
                                    echo '<option disabled="disabled" selected>{{ $role->name }}</option>';
                                } else {
                                    $btn_disability = '';
                                    $btn_link = '';
                                    echo '<option>{{ $role->name }}</option>';
                                }
                            }
                            ?>
                        </select>
                        <span class="input-group-btn">
                            <button {{ $btn_link }} class="btn btn-primary" type="button" {{ $btn_disability }}>Assign a
                                role
                            </button>
                        </span>
                    </div>
                </form>
            </td>
            <td class="centered">{{ $last_login }}</td>

            <td class="centered">
                <a href="#" data-toggle="tooltip" class="tolltip" title="Change user password!"><i
                            class="fa fa-lock"></i></a>
            </td>
            <td class="centered">
                {{ $open }}."".{{ $link_view }}." data-toggle="tooltip" class="tolltip" title="{{ $pw_title_view }}
                "><i
                        class="fa fa-eye"></i>. {{ $close }}
            </td>

            <td class="centered">{{ $remove_cntnt }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
