<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{

    // hubungin dulu halaman database seeder ini dengan model,category,posts

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        // hubungin dulu halaman database seeder ini dengan model,category,posts

        // untuk user
        User::create([
            'name' => ' Rizki ',
            'email' => 'riski@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Fahmi',
            'email' => 'fahmi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // category pertama
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        // category kedua
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // posts utama
        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'singkat' => 'lorem impus pertama',
            'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sed, quaerat laborum omnis maxime iste deserunt! Quasi delectus, alias magnam vel eos maiores iure temporibus excepturi nam ut quam </p> <p> veritatis at mollitia dolorum totam nemo dolorem, neque asperiores laudantium cum. Inventore molestias repellat ut culpa consectetur, aliquid distinctio ducimus repudiandae delectus modi optio unde iure impedit temporibus aspernatur placeat incidunt odio, itaque explicabo hic sint? </p> <p> Facere dolor laboriosam fugit a suscipit, reiciendis sapiente culpa perferendis eaque cum, architecto quibusdam error! Quis dicta maxime dolore ea? Aperiam optio veritatis doloribus laborum consectetur, fuga, fugiat blanditiis veniam nihil, consequatur porro necessitatibus facere?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'singkat' => 'lorem impus kedua',
            'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sed, quaerat laborum omnis maxime iste deserunt! Quasi delectus, alias magnam vel eos maiores iure temporibus excepturi nam ut quam </p> <p> veritatis at mollitia dolorum totam nemo dolorem, neque asperiores laudantium cum. Inventore molestias repellat ut culpa consectetur, aliquid distinctio ducimus repudiandae delectus modi optio unde iure impedit temporibus aspernatur placeat incidunt odio, itaque explicabo hic sint? </p> <p> Facere dolor laboriosam fugit a suscipit, reiciendis sapiente culpa perferendis eaque cum, architecto quibusdam error! Quis dicta maxime dolore ea? Aperiam optio veritatis doloribus laborum consectetur, fuga, fugiat blanditiis veniam nihil, consequatur porro necessitatibus facere?</p>',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'singkat' => 'lorem impus ketiga',
            'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sed, quaerat laborum omnis maxime iste deserunt! Quasi delectus, alias magnam vel eos maiores iure temporibus excepturi nam ut quam </p> <p> veritatis at mollitia dolorum totam nemo dolorem, neque asperiores laudantium cum. Inventore molestias repellat ut culpa consectetur, aliquid distinctio ducimus repudiandae delectus modi optio unde iure impedit temporibus aspernatur placeat incidunt odio, itaque explicabo hic sint? </p> <p> Facere dolor laboriosam fugit a suscipit, reiciendis sapiente culpa perferendis eaque cum, architecto quibusdam error! Quis dicta maxime dolore ea? Aperiam optio veritatis doloribus laborum consectetur, fuga, fugiat blanditiis veniam nihil, consequatur porro necessitatibus facere?</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'singkat' => 'lorem impus keempat',
            'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sed, quaerat laborum omnis maxime iste deserunt! Quasi delectus, alias magnam vel eos maiores iure temporibus excepturi nam ut quam </p> <p> veritatis at mollitia dolorum totam nemo dolorem, neque asperiores laudantium cum. Inventore molestias repellat ut culpa consectetur, aliquid distinctio ducimus repudiandae delectus modi optio unde iure impedit temporibus aspernatur placeat incidunt odio, itaque explicabo hic sint? </p> <p> Facere dolor laboriosam fugit a suscipit, reiciendis sapiente culpa perferendis eaque cum, architecto quibusdam error! Quis dicta maxime dolore ea? Aperiam optio veritatis doloribus laborum consectetur, fuga, fugiat blanditiis veniam nihil, consequatur porro necessitatibus facere?</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
