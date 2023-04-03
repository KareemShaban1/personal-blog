<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        \App\Models\Setting::create( [
            'site_name' => 'kareem shaban',
            'description' => 'This is my person blog website',
            'about' => fake()->paragraph(),
            'copy_rights' => 'kareem_shaban@2023',
            'url_fb' => '',
            'url_twitter' => '',
            'url_insta' => '',
            'url_linkedin' => '',
        ]);
    }
}
