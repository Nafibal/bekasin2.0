<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();

        // USER
        User::create([
            'name' => "Nafi Baliya",
            'email' => "baliya363@gmail.com",
            'password' => bcrypt('password'),
            'phoneNumber' => '081333971445',
            'address' => 'Jl. Danau Bratan Timur H7 / A12'
        ]);
        User::create([
            'name' => "Eren Jaeger",
            'email' => "eren@gmail.com",
            'password' => bcrypt('password'),
            'phoneNumber' => '081123123443',
            'address' => 'Jl. Shiganshina'
        ]);
        User::create([
            'name' => "Uzumaki Naruto",
            'email' => "naruto@gmail.com",
            'password' => bcrypt('password'),
            'phoneNumber' => '081987654323',
            'address' => 'Jl. Konoha'
        ]);

        // KATEGORI
        Category::create([
            'name' => 'Elektronik',
            'slug' => 'elektronik'
        ]);
        Category::create([
            'name' => 'Pakaian Pria',
            'slug' => 'pakaian-pria'
        ]);
        Category::create([
            'name' => 'Pakaian Wanita',
            'slug' => 'pakaian-wanita'
        ]);

        // PRODUK
        Product::create([
            'name' => 'Laptop Asus',
            'slug' => 'laptop-asus',
            'price' => '4000.00',
            'category_id' => 1,
            'user_id' => 2,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a dignissim sapien. Praesent tincidunt fringilla volutpat. Vestibulum nisi nisl, congue eget est sed, commodo bibendum metus. Suspendisse tincidunt lacinia dui egestas sagittis. Etiam mauris libero, auctor sit amet feugiat nec, ultricies ut nibh. Donec nec egestas nulla. Maecenas laoreet in.'
        ]);
        Product::create([
            'name' => 'Jaket Naruto',
            'slug' => 'jaket-naruto',
            'price' => '250.00',
            'category_id' => 2,
            'user_id' => 3,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a dignissim sapien. Praesent tincidunt fringilla volutpat. Vestibulum nisi nisl, congue eget est sed, commodo bibendum metus. Suspendisse tincidunt lacinia dui egestas sagittis. Etiam mauris libero, auctor sit amet feugiat nec, ultricies ut nibh. Donec nec egestas nulla. Maecenas laoreet in.'
        ]);
        Product::create([
            'name' => 'Rok Panjang',
            'slug' => 'rok-panjang',
            'price' => '200.00',
            'category_id' => 3,
            'user_id' => 2,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a dignissim sapien. Praesent tincidunt fringilla volutpat. Vestibulum nisi nisl, congue eget est sed, commodo bibendum metus. Suspendisse tincidunt lacinia dui egestas sagittis. Etiam mauris libero, auctor sit amet feugiat nec, ultricies ut nibh. Donec nec egestas nulla. Maecenas laoreet in.'
        ]);
        Product::create([
            'name' => 'Sepatu Boots',
            'slug' => 'sepatu-boots',
            'price' => '230.00',
            'category_id' => 2,
            'user_id' => 3,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a dignissim sapien. Praesent tincidunt fringilla volutpat. Vestibulum nisi nisl, congue eget est sed, commodo bibendum metus. Suspendisse tincidunt lacinia dui egestas sagittis. Etiam mauris libero, auctor sit amet feugiat nec, ultricies ut nibh. Donec nec egestas nulla. Maecenas laoreet in.'
        ]);
    }
}
