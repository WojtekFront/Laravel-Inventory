<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\StockEntry;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
               'name' => 'Jan Kowalski',
               'email' => 'jan@example.com',
               'password' => Hash::make('password123'),
               'email_verified_at' => now(),
        ]);

          User::factory()->create([
               'name' => 'Maria Kowalska',
               'email' => 'maria@example.com',
               'password' => Hash::make('password123'),
               'email_verified_at' => now(),
        ]);

        $categories = [
            ['name'=>'Engines'],
            ['name'=> 'Tires'],
            ['name'=> 'Brakes'],
            ['name'=> 'Suspension'],
            ['name'=> 'Exhaust Systems'],
        ];

        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }

        $products = [
               [
                   'name' => 'V8 Engine',
                   'sku' => 'sku',
                   'description' => 'description 1',
                   'price' => 4999.99,
                   'quantity' => 2,
                   'category_id' => 1,
               ],
               [
                   'name' => 'Diesel Engine',
                   'sku' => 'sku1',
                   'description' => 'description 2',
                   'price' => 3499.50,
                   'quantity' => 3,
                   'category_id' => 1,
                ],
               [
                   'name' => 'All-Season Tire',
                   'sku' => 'sku2',
                   'description' => 'description 3',
                   'price' => 129.99,
                   'quantity' => 1,
                   'category_id' => 2,
               ],
               [
                   'name' => 'Winter Tire',
                   'sku' => 'sku3',
                   'description' => 'description 4',
                   'price' => 149.99,
                   'quantity' => 3,
                   'category_id' => 2,
               ],
               [
                   'name' => 'Brake Pads',
                   'sku' => 'sku4',
                   'description' => 'description 5',
                   'price' => 79.99,
                   'quantity' => 2,
                   'category_id' => 3,
               ],
               [
                   'name' => 'Brake Disc',
                   'sku' => 'sku5',
                   'description' => 'description 6',
                   'price' => 99.99,
                   'quantity' => 10,
                   'category_id' => 3,
               ],
               [
                   'name' => 'Coilover Suspension',
                   'sku' => 'sku6',
                   'description' => 'description 7',
                   'price' => 799.99,
                   'quantity' => 20,
                   'category_id' => 4,
               ],
               [
                   'name' => 'Shock Absorber',
                   'sku' => 'sku7',
                   'description' => 'description 8',
                   'price' => 199.99,
                   'quantity' => 30,
                   'category_id' => 4,
               ],
               [
                   'name' => 'Sport Exhaust',
                   'sku' => 'sku8',
                   'description' => 'description 9',
                   'price' => 599.99,
                   'quantity' => 15,
                   'category_id' => 5,
               ],
               [
                   'name' => 'Catalytic Converter',
                   'sku' => 'sku9',
                   'description' => 'info5 ',
                   'price' => 299.99,
                   'quantity' => 25,
                   'category_id' => 5,
               ],
           ];

           foreach ($products as $productData) {
            Product::create($productData);
           }

           $suppliers=[
            [
            'name'=>'MotoCars',
            'email'=>'motorcars@example.com',
            'phone'=>'123123121',
            'address'=>'City1'
            ],
            [
            'name'=>'InterCars',
            'email'=>'intecars@example.com',
            'phone'=>'123123123',
            'address'=>'City2'
            ],
            [
            'name'=>'Allegro:11131230',
            'email'=>'allegro:11131230@example.com',
            'phone'=>'123123124',
            'address'=>'City3'
            ],
            [
            'name'=>'BMW',
            'email'=>'bmw@example.com',
            'phone'=>'123123125',
            'address'=>'City4'
            ],
        ];
        foreach ($suppliers as $supplierData) {
            Supplier::create($supplierData);
        }






    }
}
