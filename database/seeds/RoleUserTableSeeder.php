<?php

use Bican\Roles\Models\Role;
use Illuminate\Database\Seeder;
use Neg\Models\User;

class RoleUserTableSeeder extends Seeder
{
    public function run()
    {
        $role = Role::where('slug', '=', 'super')->first()->id;
        $user = User::where('username', '=', 'gildniy')->first()->id;
        $role_user = [
            [
                'role_id' => $role,
                'user_id' => $user,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        ];

        DB::table('role_user')->insert($role_user);
    }
}
