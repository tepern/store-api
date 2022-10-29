<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = File::get("database/product.php");
        $data = json_decode($products, true);
        foreach ($products as $product) {
          Product::create($product);
        }
    }
}
