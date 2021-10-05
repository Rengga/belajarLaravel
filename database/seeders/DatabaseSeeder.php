<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\post;
use App\Models\Category;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Rengga',
        //     'email'=> 'rengga@wibu.com',
        //     'password' => bcrypt('rengga')
        // ]);

        // User::create([
        //     'name' => 'Hicun',
        //     'email'=> 'Hicun@hekel.com',
        //     'password' => bcrypt('hicun')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Esport',
            'slug'=> 'esport'
        ]);
        Category::create([
            'name' => 'Theme',
            'slug'=> 'theme'
        ]);

        Category::create([
            'name' => 'Nature',
            'slug'=> 'nature'
        ]);

        Category::create([
            'name' => 'Vehicle',
            'slug' => 'vehicle'
        ]);

        post::factory(23)->create();

        // post::create([
        //     'title' => 'Judul ke 1',
        //     'slug' => 'judul-ke-1',
        //     'excerpt' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, nulla
        //     voluptates! Rem amet possimus ut numquam ex atque non, quia corrupti ipsam
        //     aliquid beatae quos est.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, nulla
        //     voluptates! Rem amet possimus ut numquam ex atque non, quia corrupti ipsam
        //     aliquid beatae quos est. Iusto itaque quam ea quia voluptas consectetur
        //     nulla a, dignissimos saepe excepturi libero error quibusdam nam mollitia
        //     veniam, dolor quas voluptatibus. Error vero ullam eligendi provident dicta
        //     pariatur consequatur delectus mollitia quasi inventore facilis nobis maiores
        //     repellat, alias magnam aperiam! Eum, tenetur! Asperiores cumque omnis
        //     obcaecati id nulla tenetur dolorum non quae consequatur placeat.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'title' => 'Judul ke 2',
        //     'slug' => 'judul-ke-2',
        //     'excerpt' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, nulla
        //     voluptates! Rem amet possimus ut numquam ex atque non, quia corrupti ipsam
        //     aliquid beatae quos est.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, nulla
        //     voluptates! Rem amet possimus ut numquam ex atque non, quia corrupti ipsam
        //     aliquid beatae quos est. Iusto itaque quam ea quia voluptas consectetur
        //     nulla a, dignissimos saepe excepturi libero error quibusdam nam mollitia
        //     veniam, dolor quas voluptatibus. Error vero ullam eligendi provident dicta
        //     pariatur consequatur delectus mollitia quasi inventore facilis nobis maiores
        //     repellat, alias magnam aperiam! Eum, tenetur! Asperiores cumque omnis
        //     obcaecati id nulla tenetur dolorum non quae consequatur placeat.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'title' => 'Judul ke 3',
        //     'slug' => 'judul-ke-3',
        //     'excerpt' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, nulla
        //     voluptates! Rem amet possimus ut numquam ex atque non, quia corrupti ipsam
        //     aliquid beatae quos est.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, nulla
        //     voluptates! Rem amet possimus ut numquam ex atque non, quia corrupti ipsam
        //     aliquid beatae quos est. Iusto itaque quam ea quia voluptas consectetur
        //     nulla a, dignissimos saepe excepturi libero error quibusdam nam mollitia
        //     veniam, dolor quas voluptatibus. Error vero ullam eligendi provident dicta
        //     pariatur consequatur delectus mollitia quasi inventore facilis nobis maiores
        //     repellat, alias magnam aperiam! Eum, tenetur! Asperiores cumque omnis
        //     obcaecati id nulla tenetur dolorum non quae consequatur placeat.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // post::create([
        //     'title' => 'Judul ke 4',
        //     'slug' => 'judul-ke-4',
        //     'excerpt' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, nulla
        //     voluptates! Rem amet possimus ut numquam ex atque non, quia corrupti ipsam
        //     aliquid beatae quos est.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, nulla
        //     voluptates! Rem amet possimus ut numquam ex atque non, quia corrupti ipsam
        //     aliquid beatae quos est. Iusto itaque quam ea quia voluptas consectetur
        //     nulla a, dignissimos saepe excepturi libero error quibusdam nam mollitia
        //     veniam, dolor quas voluptatibus. Error vero ullam eligendi provident dicta
        //     pariatur consequatur delectus mollitia quasi inventore facilis nobis maiores
        //     repellat, alias magnam aperiam! Eum, tenetur! Asperiores cumque omnis
        //     obcaecati id nulla tenetur dolorum non quae consequatur placeat.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
