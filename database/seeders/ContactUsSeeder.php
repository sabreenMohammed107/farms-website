<?php

namespace Database\Seeders;

use App\Models\Contact_us;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'address'=>'طريق سقارة السياحى بجوار فيلا د اجمد زويل, El Haram, Egypt, 00',
                'mobile'=>'1002642073',
                'phone'=>'(+2)-225-78-21',
                'email'=>'info@example.com',
            ],

        ];

        foreach ($contacts as $key => $contact) {
            Contact_us::create($contact);
        }
    }
}
