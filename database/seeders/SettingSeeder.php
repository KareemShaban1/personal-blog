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
            'about' => " I'm a passionate junior backend developer with over a year of experience in building robust web applications with Laravel, one of my favorite PHP frameworks. My journey into web development began with a strong curiosity for crafting efficient and scalable solutions.",
            'copy_rights' => 'kareem_shaban@2023',
            'url_fb' => '',
            'url_twitter' => '',
            'url_insta' => '',
            'url_linkedin' => '',
        ]);
    }
}