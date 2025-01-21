<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\ProductDetail;

class GallerySeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();

        // Retrieve all product detail IDs
        $productIds = Product::pluck('id')->toArray();

        foreach ($productIds as $productId) {
            // Randomly decide how many images to create for this product detail
            $imageCount = $faker->numberBetween(1, 5);

            foreach (range(1, $imageCount) as $index) {
                DB::table('galleries')->insert([
                    'product_id' => $productId,
                    'gallery'           => 'backend/images/product-images/pi' . $faker->numberBetween(1, 21) . '.png', // Random gallery image
                    'status'            => 'active', // Default status
                    'created_at'        => now(),
                    'updated_at'        => now(),
                ]);
            }
        }
    }
}
