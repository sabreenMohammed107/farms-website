<?php

namespace Database\Seeders;

use App\Models\About_us;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aboutObj = [
            [
                'title'=>'',
                'details'=>'',
                'image'=>'',
                'vision_title'=>'',
                'vision_description'=>'',
            ],

        ];

        foreach ($aboutObj as $key => $about) {
            About_us::create($about);
        }
    }
}
