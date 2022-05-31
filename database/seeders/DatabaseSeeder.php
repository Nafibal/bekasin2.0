<?php

namespace Database\Seeders;

use App\Models\User;
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
    }
}
