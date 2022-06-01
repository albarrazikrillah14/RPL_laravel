<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Post::factory(20)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Albarra Zikrillah',
        //     'email' => 'albarrazikrillah1405@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        // User::create([
        //     'name' => 'Zikrillah',
        //     'email' => 'zikrillah1405@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => "web-programming"
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => "Personal"
        ]);

        
    }
}
