<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tags')->insert([
            [
                'name' => 'html',
            ],
            [
                'name' => 'css',
            ],
            [
                'name' => 'javascript',
            ],
            [
                'name' => 'jquery',
            ],
            [
                'name' => 'bootstrap',
            ],
            [
                'name' => 'php',
            ],
            [
                'name' => 'laravel',
            ],
            [
                'name' => 'flutter',
            ],
            [
                'name' => 'network',
            ],
            [
                'name' => 'web penetration testing',
            ],
            [
                'name' => 'bug bounty',
            ],
            
            
        ]);
    }
}