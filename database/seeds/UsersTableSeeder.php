<?php

use Illuminate\Database\Seeder;
use Neg\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
//        DB::table('users')->delete();
//
//        $users = array(
//            array(
//                'username' => 'user1',
//                'email' => 'user1@example.org',
//                'password' => Hash::make('User1000'),
//                'confirmed' => 1,
//                'confirmation_code' => md5(microtime() . Config::get('app.key')),
//                'created_at' => new DateTime,
//                'updated_at' => new DateTime,
//            ),
//            array(
//                'username' => 'user2',
//                'email' => 'user2@example.org',
//                'password' => Hash::make('User2000'),
//                'confirmed' => 1,
//                'confirmation_code' => md5(microtime() . Config::get('app.key')),
//                'created_at' => new DateTime,
//                'updated_at' => new DateTime,
//            ),
//            array(
//                'username' => 'user3',
//                'email' => 'user3@example.org',
//                'password' => Hash::make('User3000'),
//                'confirmed' => 1,
//                'confirmation_code' => md5(microtime() . Config::get('app.key')),
//                'created_at' => new DateTime,
//                'updated_at' => new DateTime,
//            ),
//            array(
//                'username' => 'user4',
//                'email' => 'user4@example.org',
//                'password' => Hash::make('User4000'),
//                'confirmed' => 1,
//                'confirmation_code' => md5(microtime() . Config::get('app.key')),
//                'created_at' => new DateTime,
//                'updated_at' => new DateTime,
//            ),
//            array(
//                'username' => 'user5',
//                'email' => 'user5@example.org',
//                'password' => Hash::make('User5000'),
//                'confirmed' => 1,
//                'confirmation_code' => md5(microtime() . Config::get('app.key')),
//                'created_at' => new DateTime,
//                'updated_at' => new DateTime,
//            ),
//            array(
//                'username' => 'user6',
//                'email' => 'user6@example.org',
//                'password' => Hash::make('User6000'),
//                'confirmed' => 1,
//                'confirmation_code' => md5(microtime() . Config::get('app.key')),
//                'created_at' => new DateTime,
//                'updated_at' => new DateTime,
//            ),
//            array(
//                'username' => 'user7',
//                'email' => 'user7@example.org',
//                'password' => Hash::make('User7000'),
//                'confirmed' => 1,
//                'confirmation_code' => md5(microtime() . Config::get('app.key')),
//                'created_at' => new DateTime,
//                'updated_at' => new DateTime,
//            ),
//            array(
//                'username' => 'user8',
//                'email' => 'user8@example.org',
//                'password' => Hash::make('User8000'),
//                'confirmed' => 1,
//                'confirmation_code' => md5(microtime() . Config::get('app.key')),
//                'created_at' => new DateTime,
//                'updated_at' => new DateTime,
//            ),
//            array(
//                'username' => 'user9',
//                'email' => 'user9@example.org',
//                'password' => Hash::make('User9000'),
//                'confirmed' => 1,
//                'confirmation_code' => md5(microtime() . Config::get('app.key')),
//                'created_at' => new DateTime,
//                'updated_at' => new DateTime,
//            ),
//            array(
//                'username' => 'user10',
//                'email' => 'user10@example.org',
//                'password' => Hash::make('User10000'),
//                'confirmed' => 1,
//                'confirmation_code' => md5(microtime() . Config::get('app.key')),
//                'created_at' => new DateTime,
//                'updated_at' => new DateTime,
//            )
//        );
//
//        DB::table('users')->insert($users);
        Eloquent::unguard();

        DB::table('users')->delete();

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++)
        {
            User::create([
                'username' => str_replace('.', '_', $faker->unique()->userName),
                'email' => 'user'.$i.'@example.org',
                'password' => Hash::make('User'.$i.'000'),
                'confirmed' => true,
                'confirmation' => md5(microtime() . Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]);
        }
    }

}