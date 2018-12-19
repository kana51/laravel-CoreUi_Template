<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');

        DB::table('users')->truncate();

        //覚えやすいuserの作成
        User::create([
            'name' => 'user1',
            'email' => 'user1@user.com',
            'password' => Hash::make('testtest')
        ]);

        //
        for($i = 0;$i < 10;$i++)
        {
            $email = $faker->email;

            User::create([
                'name' => $faker->name,
                'email' => $email,
                'password' => Hash::make($email)//passwordがわからなくならないように一応emailにした
            ]);
        }



    }
}