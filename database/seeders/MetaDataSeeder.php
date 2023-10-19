<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetaDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         //
        //
         // Define the data you want to insert into the 'information' table
         $data = [
            [
                'key' => 'description',
                'value' => '',
            ],
            [
                'key' => 'keywords',
                'value' => '',
            ],
            [
                'key' => 'canonical_link',
                'value' => '',
            ],
            [
                'key' => 'og:title',
                'value' => '=',
            ],

            [
                'key' => 'og:description',
                'value' => '',
            ],
           

            [
                'key' => 'og:url',
                'value' => '',
            ],

            [
                'key' => 'og:type',
                'value' => '',
            ],

            [
                'key' => 'og:site_name',
                'value' => '',
            ],
            
            [
                'key' => 'article:publisher',
                'value' => '',
            ],
            [
                'key' => 'og:updated_time',
                'value' => '',
            ],
            [
                'key' => 'og:image',
                'value' => '',
            ],

            [
                'key' => 'og:image:secure_url',
                'value' => '',
            ],
            [
                'key' => 'og:image:width',
                'value' => '',
            ],
            [
                'key' => 'og:image:height',
                'value' => '',
            ],

            [
                'key' => 'og:image:alt',
                'value' => '',
            ],

            [
                'key' => 'og:image:type',
                'value' => '',
            ],

            [
                'key' => 'article:published_time',
                'value' => '',
            ],
            [
                'key' => 'article:modified_time',
                'value' => '',
            ],
            [
                'key' => 'twitter:card',
                'value' => '',
            ],
            [
                'key' => 'twitter:title',
                'value' => '',
            ],
            [
                'key' => 'twitter:description',
                'value' => '',
            ],
            [
                'key' => 'twitter:image',
                'value' => '',
            ],
            
        ];

        // Insert data into the 'information' table
        DB::table('meta_data')->insert($data);
    }
}