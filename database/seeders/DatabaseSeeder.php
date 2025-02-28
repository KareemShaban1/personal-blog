<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MetaData;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(MetaDataSeeder::class);
        // \App\Models\Setting::factory(1)->create();
        // \App\Models\User::factory(20)->create();
        // \App\Models\Category::factory(5)->create();
        // \App\Models\Post::factory(50)->create();
        // \App\Models\Page::factory(10)->create();
        // \App\Models\Tag::factory(10)->create();
    }
}