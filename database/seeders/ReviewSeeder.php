<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\Product;
use Faker\Factory as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run()
     {
         $faker = Faker::create();

         // Retrieve all products
         $products = Product::all();
         $userId = 2; // Assuming user_id = 2 for all reviews

         foreach ($products as $product) {
             // Generate 3-24 reviews for each product
             foreach (range(1, $faker->numberBetween(3, 24)) as $index) {
                 Review::create([
                     'user_id'     => $userId, // Use fixed user_id
                     'product_id'  => $product->id,
                     'description' => $faker->sentence(15), // Random review description
                     'rating'      => $faker->numberBetween(1, 5), // Random rating between 1 and 5
                     'status'      => 'active', // Default status
                 ]);
             }
         }
     }
}
