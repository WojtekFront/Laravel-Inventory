<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Shelf;
use Illuminate\Support\Facades\Hash;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Users
        User::factory(10)->create();

        User::factory()->createMany([
            [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => Hash::make('123456'),
            ],[
                'name'=> 'John',
                'email'=>'Doe',
                'password'=> Hash::make('123456'),
            ],
        ]);

        // Seed Categories
        $categories= [
            ['name' => 'Engines'],
            ['name' => 'Tires'],
            ['name' => 'Brakes'],
            ['name' => 'Suspension'],
            ['name' => 'Exhaust Systems'],
        ];
        Category::insert($categories);

        //Seed shop
        $shops = [
            ['name'=>'Main Store', 'address' => 'Szczecin, Poland', 'active' =>1],
            ['name'=>'Branch Store', 'address' => 'Warszawa, Poland', 'active' =>1],
            ['name'=>'Warehouse', 'address' => 'Poznań, Poland', 'active' =>1],
            ['name' => 'Auto Parts Warsaw', 'address' => 'Warsaw, Poland', 'active' => 1],
            ['name' => 'Car Shop Krakow', 'address' => 'Krakow, Poland', 'active' => 1 ],
            ['name' => 'Tire Center Gdansk', 'address' => 'Gdansk, Poland', 'active' => 1 ],
        ];
        Shop::insert($shops);


        $shelves = [
            ['name' => 'A', 'shop_id' => 1, 'created_at' => '2024-01-01 12:00:00', 'updated_at' => '2024-01-01 12:00:00'],
            ['name' => 'B', 'shop_id' => 1, 'created_at' => '2024-01-01 12:00:00', 'updated_at' => '2024-01-01 12:00:00'],
            ['name' => 'A', 'shop_id' => 2, 'created_at' => '2024-01-01 12:00:00', 'updated_at' => '2024-01-01 12:00:00'],
            ['name' => 'B', 'shop_id' => 2, 'created_at' => '2024-01-01 12:00:00', 'updated_at' => '2024-01-01 12:00:00'],
            ['name' => 'A', 'shop_id' => 3, 'created_at' => '2024-01-01 12:00:00', 'updated_at' => '2024-01-01 12:00:00'],
        ];
        Shelf::insert($shelves);

        // Seed Products
       $products = [
            ['name' => 'V8 Engine', 'sku' => 'ENG001', 'price' => 4999.99, 'quantity' => 10, 'category_id' => 1, 'shop_id' => 1, 'created_at' => '2024-01-01 12:00:00', 'updated_at' => '2024-01-01 12:00:00'],
            ['name' => 'Turbo Diesel Engine', 'sku' => 'ENG002', 'price' => 3499.50, 'quantity' => 8, 'category_id' => 1, 'shop_id' => 2, 'created_at' => '2024-02-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'All-Season Tire', 'sku' => 'TIR001', 'price' => 199.99, 'quantity' => 50, 'category_id' => 2, 'shop_id' => 1, 'created_at' => '2024-02-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Winter Tire', 'sku' => 'TIR002', 'price' => 249.99, 'quantity' => 40, 'category_id' => 2, 'shop_id' => 3, 'created_at' => '2024-04-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Brake Pads', 'sku' => 'BRK001', 'price' => 79.99, 'quantity' => 100, 'category_id' => 3, 'shop_id' => 1, 'created_at' => '2024-05-05 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'V8 Engine', 'sku' => 'ENG001', 'description' => 'High-performance engine', 'price' => 4999.99, 'category_id' => 1, 'created_at' => '2024-01-01 12:00:00', 'updated_at' => '2024-01-01 12:00:00'],
            ['name' => 'Turbo Diesel Engine', 'sku' => 'ENG002', 'description' => 'Efficient diesel engine', 'price' => 3499.50, 'category_id' => 1, 'created_at' => '2024-02-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'All-Season Tire', 'sku' => 'TIR001', 'description' => 'Durable all-season tire', 'price' => 199.99, 'category_id' => 2, 'created_at' => '2024-02-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Winter Tire', 'sku' => 'TIR002', 'description' => 'Winter tire for snow', 'price' => 249.99, 'category_id' => 2, 'created_at' => '2024-04-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Brake Pads', 'sku' => 'BRK001', 'description' => 'High-quality brake pads', 'price' => 79.99, 'category_id' => 3, 'created_at' => '2024-05-05 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            // New products
            ['name' => 'V6 Engine', 'sku' => 'ENG003', 'description' => 'Compact performance engine', 'price' => 2999.99, 'category_id' => 1, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Hybrid Engine', 'sku' => 'ENG004', 'description' => 'Eco-friendly hybrid engine', 'price' => 3999.50, 'category_id' => 1, 'created_at' => '2024-06-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Turbo V8 Engine', 'sku' => 'ENG005', 'description' => 'Turbocharged V8 engine', 'price' => 5499.99, 'category_id' => 1, 'created_at' => '2024-07-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Inline-4 Engine', 'sku' => 'ENG006', 'description' => 'Efficient 4-cylinder engine', 'price' => 2499.99, 'category_id' => 1, 'created_at' => '2024-07-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Diesel V6 Engine', 'sku' => 'ENG007', 'description' => 'Powerful diesel V6', 'price' => 3799.99, 'category_id' => 1, 'created_at' => '2024-08-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Electric Motor', 'sku' => 'ENG008', 'description' => 'High-efficiency electric motor', 'price' => 4500.00, 'category_id' => 1, 'created_at' => '2024-08-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Performance Engine', 'sku' => 'ENG009', 'description' => 'High-performance racing engine', 'price' => 5999.99, 'category_id' => 1, 'created_at' => '2024-09-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Summer Tire', 'sku' => 'TIR003', 'description' => 'High-grip summer tire', 'price' => 179.99, 'category_id' => 2, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Off-Road Tire', 'sku' => 'TIR004', 'description' => 'Durable off-road tire', 'price' => 229.99, 'category_id' => 2, 'created_at' => '2024-06-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Performance Tire', 'sku' => 'TIR005', 'description' => 'High-speed performance tire', 'price' => 299.99, 'category_id' => 2, 'created_at' => '2024-07-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Eco Tire', 'sku' => 'TIR006', 'description' => 'Fuel-efficient tire', 'price' => 159.99, 'category_id' => 2, 'created_at' => '2024-07-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Mud Terrain Tire', 'sku' => 'TIR007', 'description' => 'Tire for muddy terrains', 'price' => 269.99, 'category_id' => 2, 'created_at' => '2024-08-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Racing Tire', 'sku' => 'TIR008', 'description' => 'Slick racing tire', 'price' => 349.99, 'category_id' => 2, 'created_at' => '2024-08-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'All-Terrain Tire', 'sku' => 'TIR009', 'description' => 'Versatile all-terrain tire', 'price' => 209.99, 'category_id' => 2, 'created_at' => '2024-09-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Ceramic Brake Pads', 'sku' => 'BRK002', 'description' => 'High-performance ceramic pads', 'price' => 99.99, 'category_id' => 3, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Disc Brake Rotor', 'sku' => 'BRK003', 'description' => 'Durable brake rotor', 'price' => 149.99, 'category_id' => 3, 'created_at' => '2024-06-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Brake Caliper', 'sku' => 'BRK004', 'description' => 'High-quality brake caliper', 'price' => 199.99, 'category_id' => 3, 'created_at' => '2024-07-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Brake Fluid', 'sku' => 'BRK005', 'description' => 'High-performance brake fluid', 'price' => 29.99, 'category_id' => 3, 'created_at' => '2024-07-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Brake Drum', 'sku' => 'BRK006', 'description' => 'Reliable brake drum', 'price' => 129.99, 'category_id' => 3, 'created_at' => '2024-08-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Brake Shoe', 'sku' => 'BRK007', 'description' => 'Durable brake shoe', 'price' => 69.99, 'category_id' => 3, 'created_at' => '2024-08-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
        ];
        Product::insert($products);


 $productShop = [
            ['product_id' => 1, 'shop_id' => 1, 'quantity' => 10, 'created_at' => '2024-01-01 12:00:00', 'updated_at' => '2024-01-01 12:00:00'],
            ['product_id' => 1, 'shop_id' => 2, 'quantity' => 5, 'created_at' => '2024-01-01 12:00:00', 'updated_at' => '2024-01-01 12:00:00'],
            ['product_id' => 2, 'shop_id' => 2, 'quantity' => 8, 'created_at' => '2024-02-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 3, 'shop_id' => 1, 'quantity' => 50, 'created_at' => '2024-02-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 3, 'shop_id' => 3, 'quantity' => 20, 'created_at' => '2024-02-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 4, 'shop_id' => 3, 'quantity' => 40, 'created_at' => '2024-04-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 5, 'shop_id' => 1, 'quantity' => 100, 'created_at' => '2024-05-05 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            // New product assignments
            ['product_id' => 6, 'shop_id' => 1, 'quantity' => 15, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 6, 'shop_id' => 3, 'quantity' => 10, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 7, 'shop_id' => 2, 'quantity' => 12, 'created_at' => '2024-06-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 8, 'shop_id' => 1, 'quantity' => 8, 'created_at' => '2024-07-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 8, 'shop_id' => 2, 'quantity' => 5, 'created_at' => '2024-07-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 9, 'shop_id' => 3, 'quantity' => 20, 'created_at' => '2024-07-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 10, 'shop_id' => 1, 'quantity' => 10, 'created_at' => '2024-08-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 10, 'shop_id' => 2, 'quantity' => 15, 'created_at' => '2024-08-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 11, 'shop_id' => 2, 'quantity' => 7, 'created_at' => '2024-08-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 11, 'shop_id' => 3, 'quantity' => 5, 'created_at' => '2024-08-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 12, 'shop_id' => 1, 'quantity' => 25, 'created_at' => '2024-09-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 13, 'shop_id' => 1, 'quantity' => 60, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 13, 'shop_id' => 3, 'quantity' => 30, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 14, 'shop_id' => 2, 'quantity' => 45, 'created_at' => '2024-06-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 15, 'shop_id' => 3, 'quantity' => 50, 'created_at' => '2024-07-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 15, 'shop_id' => 1, 'quantity' => 20, 'created_at' => '2024-07-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 16, 'shop_id' => 2, 'quantity' => 35, 'created_at' => '2024-07-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 17, 'shop_id' => 3, 'quantity' => 25, 'created_at' => '2024-08-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 18, 'shop_id' => 1, 'quantity' => 15, 'created_at' => '2024-08-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 18, 'shop_id' => 2, 'quantity' => 10, 'created_at' => '2024-08-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 19, 'shop_id' => 3, 'quantity' => 40, 'created_at' => '2024-09-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 20, 'shop_id' => 1, 'quantity' => 80, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 20, 'shop_id' => 2, 'quantity' => 60, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 21, 'shop_id' => 2, 'quantity' => 50, 'created_at' => '2024-06-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 21, 'shop_id' => 3, 'quantity' => 30, 'created_at' => '2024-06-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 22, 'shop_id' => 1, 'quantity' => 90, 'created_at' => '2024-07-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 23, 'shop_id' => 2, 'quantity' => 70, 'created_at' => '2024-07-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 24, 'shop_id' => 3, 'quantity' => 60, 'created_at' => '2024-08-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 25, 'shop_id' => 1, 'quantity' => 100, 'created_at' => '2024-08-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
        ];
        \DB::table('product_shop')->insert($productShop);



        $productShelf = [
            ['product_id' => 1, 'shelf_id' => 1, 'created_at' => '2024-01-01 12:00:00', 'updated_at' => '2024-01-01 12:00:00'],
            ['product_id' => 1, 'shelf_id' => 2, 'created_at' => '2024-01-01 12:00:00', 'updated_at' => '2024-01-01 12:00:00'],
            ['product_id' => 2, 'shelf_id' => 3, 'created_at' => '2024-02-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 3, 'shelf_id' => 1, 'created_at' => '2024-02-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 4, 'shelf_id' => 5, 'created_at' => '2024-04-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 5, 'shelf_id' => 2, 'created_at' => '2024-05-05 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            // New shelf assignments
            ['product_id' => 6, 'shelf_id' => 1, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 6, 'shelf_id' => 5, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 7, 'shelf_id' => 3, 'created_at' => '2024-06-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 8, 'shelf_id' => 1, 'created_at' => '2024-07-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 8, 'shelf_id' => 3, 'created_at' => '2024-07-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 9, 'shelf_id' => 5, 'created_at' => '2024-07-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 10, 'shelf_id' => 1, 'created_at' => '2024-08-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 10, 'shelf_id' => 3, 'created_at' => '2024-08-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 11, 'shelf_id' => 3, 'created_at' => '2024-08-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 12, 'shelf_id' => 1, 'created_at' => '2024-09-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 13, 'shelf_id' => 1, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 13, 'shelf_id' => 5, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 14, 'shelf_id' => 3, 'created_at' => '2024-06-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 15, 'shelf_id' => 5, 'created_at' => '2024-07-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 15, 'shelf_id' => 1, 'created_at' => '2024-07-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 16, 'shelf_id' => 3, 'created_at' => '2024-07-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 17, 'shelf_id' => 5, 'created_at' => '2024-08-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 18, 'shelf_id' => 1, 'created_at' => '2024-08-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 19, 'shelf_id' => 5, 'created_at' => '2024-09-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 20, 'shelf_id' => 1, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 20, 'shelf_id' => 3, 'created_at' => '2024-06-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 21, 'shelf_id' => 3, 'created_at' => '2024-06-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 22, 'shelf_id' => 1, 'created_at' => '2024-07-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 23, 'shelf_id' => 3, 'created_at' => '2024-07-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 24, 'shelf_id' => 5, 'created_at' => '2024-08-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['product_id' => 25, 'shelf_id' => 1, 'created_at' => '2024-08-15 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
        ];
        \DB::table('product_shelf')->insert($productShelf);
    }
}
