<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        DB::table('posts')->truncate();

        for($i = 0;$i < 10;$i++)
        {
            $email = $faker->email;

            Post::create([
                'title' => 'title'.$i,
                'body' => $faker->realText,
                'user_id' => rand(1,2),//ユーザーIDは1か2が入るように設定した
            ]);
        }

    }
}