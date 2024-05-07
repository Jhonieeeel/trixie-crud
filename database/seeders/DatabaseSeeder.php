<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $data = [
            [
                'hotel_name' => 'Shangri-La, Manila',
                'ratings' => 4.5,
                'reviews' => 320,
                'price' => 4468,
                'image' => 'storage/hotel-1.png',
                'state' => 'luzon',
            ],
            [
                'hotel_name' => 'Hennan, Crystal land',
                'ratings' => 4.4,
                'reviews' => 1942,
                'price' => 5262,
                'image' => 'storage/hotel-2.png',
                'state' => 'luzon',

            ],
            [
                'hotel_name' => 'Conclave, Davao City',
                'ratings' => 4.0,
                'reviews' => 43,
                'price' => 4455,
                'image' => 'storage/hotel-3.png',
                'state' => 'Mindanao',

            ],
        ];

        foreach ($data as $hotel_data) {
            Hotel::create([
                'hotel_name' => $hotel_data['hotel_name'],
                'ratings' => $hotel_data['ratings'],
                'reviews' => $hotel_data['reviews'],
                'price' => $hotel_data['price'],
                'image' => $hotel_data['image'],
                'state' => $hotel_data['state'],
            ]);
        }
    }
}
