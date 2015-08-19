<?php namespace Neg\Models;

use Bican\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;
use Bican\Roles\Traits\HasRoleAndPermission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;

class User extends Model implements ConfideUserInterface, HasRoleAndPermissionContract
{
    use HasRoleAndPermission;

    use ConfideUser;

    use SoftDeletes;

    public $table = 'users';

    protected $dates = ['deleted_at'];

    public static $rules = [
        'username' => 'required|min:3|max:20|alpha_dash',
        'email' => 'required|email|max:100',
        'password' => 'required|min:6'
    ];
}
