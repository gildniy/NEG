<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('roles')->truncate();

        DB::table('roles')->insert([
            'name' => 'Regular',
            'slug' => 'regular',
            'description' => 'The regular membership on the website, it\'s the status for audience\'s use for the system
             once registered registered',
            'level' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        DB::table('roles')->insert([
            'name' => 'Editor',
            'slug' => 'editor',
            'description' => 'Editor can post articles and school materials in sections reserved',
            'level' => 2,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        DB::table('roles')->insert([
            'name' => 'Moderator',
            'slug' => 'moderator',
            'description' => 'Moderation is a role to manage what editors and regular users post and s/he may delete or
            edit some of them, once in need',
            'level' => 3,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        DB::table('roles')->insert([
            'name' => 'Administrator',
            'slug' => 'admin',
            'description' => 'Administration is the responsibility to manage users and content on the website',
            'level' => 4,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        DB::table('roles')->insert([
            'name' => 'Superadmin',
            'slug' => 'super',
            'description' => 'The superior administrator being only one, and in head of the membership tree s/he owns
             all other roles and permissions, and s/he manages roles for any other users, administrators includes',
            'level' => 5,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
    }

}