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
                'text'=>'',
                'image'=>'',
                'mission'=>'',
                'details'=>'',
            ],

        ];

        foreach ($aboutObj as $key => $about) {
            About_us::create($about);
        }
    }
}
