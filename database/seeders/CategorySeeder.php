<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            [
                'name' => 'Web',
                'slug' => 'web',
                'user_id' => 1,  
            ],
            [
                'name' => 'Frontend',
                'slug' => 'frontend',
                'user_id' => 1, 
            ],
            [
                'name' => 'Backend',
                'slug' => 'backend',
                'user_id' => 1, 
            ],
            [
                'name' => 'Mobile Application',
                'slug' => 'mobile-application',
                'user_id' => 1, 
            ],
            [
                'name' => 'Cyber Security',
                'slug' => 'cyber-security',
                'user_id' => 1, 
            ],
            
        ]);
    }
}