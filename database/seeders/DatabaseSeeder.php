<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
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
        ];
        Shop::insert($shops);

        // Seed Products
       $products = [
            ['name' => 'V8 Engine', 'sku' => 'ENG001', 'price' => 4999.99, 'quantity' => 10, 'category_id' => 1, 'shop_id' => 1, 'created_at' => '2024-01-01 12:00:00', 'updated_at' => '2024-01-01 12:00:00'],
            ['name' => 'Turbo Diesel Engine', 'sku' => 'ENG002', 'price' => 3499.50, 'quantity' => 8, 'category_id' => 1, 'shop_id' => 2, 'created_at' => '2024-02-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'All-Season Tire', 'sku' => 'TIR001', 'price' => 199.99, 'quantity' => 50, 'category_id' => 2, 'shop_id' => 1, 'created_at' => '2024-02-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Winter Tire', 'sku' => 'TIR002', 'price' => 249.99, 'quantity' => 40, 'category_id' => 2, 'shop_id' => 3, 'created_at' => '2024-04-01 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
            ['name' => 'Brake Pads', 'sku' => 'BRK001', 'price' => 79.99, 'quantity' => 100, 'category_id' => 3, 'shop_id' => 1, 'created_at' => '2024-05-05 12:00:00', 'updated_at' => '2025-01-01 12:00:00'],
        ];
        Product::insert($products);





    }
}
