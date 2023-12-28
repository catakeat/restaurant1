<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurants')->insert([[
            'name'=>'Restaurant1',
            'email'=>'restaurant1@example.com',
            'created_at'=> now(),
            'updated_at'=> now(),
        ],
        [
            'name'=>'Restaurant2',
            'email'=>'restaurant2@example.com',
            'created_at'=> now(),
            'updated_at'=> now(),
        ],
        [
            'name'=>'Restaurant3',
            'email'=>'restaurant3@example.com',
            'created_at'=> now(),
            'updated_at'=> now(),
        ],
        [
            'name'=>'Restaurant4',
            'email'=>'restaurant4@example.com',
            'created_at'=> now(),
            'updated_at'=> now(),
        ],
        ]
    );
    }
}
