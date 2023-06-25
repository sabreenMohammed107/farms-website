<?php

namespace Database\Seeders;

use App\Models\Home_page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $homepages = [
            [
                'title'=>'جمال جمعة فارم',
                'details'=>'طعام عضوي لذيذ وصحي',
                'why_us_title'=>'جمال جمعة فارم',
                'why_us_details'=>'خبرة وريادة مدتها أكثر من 30 سنة في قطاع الخضروات الأوروبي',
            ],

        ];

        foreach ($homepages as $key => $homepage) {
            Home_page::create($homepage);
        }
    }

}
