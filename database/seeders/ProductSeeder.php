<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            DB::table('products')->insert([
                'category_id'   => $faker->numberBetween(1, 6), // Match existing category IDs
                'brand_id'      => $faker->numberBetween(1, 10),                          // Only one brand exists
                'designer_id'   => $faker->numberBetween(1, 6), // Match existing designer IDs
                'name'          => $faker->word,               // Random product name
                'old_price'     => $faker->randomFloat(2, 50, 100), // Random old price between 50 and 100
                'selling_price' => $faker->randomFloat(2, 30, 50), // Random selling price between 30 and 50

                //!! 2nd time add
                'product_code'  => strtoupper($faker->lexify('PROD-????')),
                'description'   => $faker->sentence,
                'sub_description' => $faker->sentence,


                // 'image'         => 'backend/images/product-images/' . $faker->numberBetween(1, 20) . '.png',
                'image'         => 'backend/images/product-images/pi' . $faker->numberBetween(1, 21) . '.png', // Adjusted for your filenames
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
        }
    }
}
