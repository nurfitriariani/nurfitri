<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nurfitri',
            'email' => 'mpit@gmail.com',
            'password' => bcrypt('12345'),
            
        ]);
        Product::create([
            'name'=>'Koko Pria',
            'harga'=>'150.000',
            'deskripsi'=>'Terbuat dari bahan kanvas yang berkualitas sehingga nyaman dipakai',
            'foto'=>'1.jpg',
        ]);
        product::create([
            'name'=>'Mukena',
            'harga'=>'200.000',
            'deskripsi'=>'Terbuat dari bahan yang bikin adem, jadi gaada drama solat kepanasan lagi yaa',
            'foto'=>'2.jpg',
        ]);
        product::create([
            'name'=>'Sajadah',
            'harga'=>'50.000',
            'deskripsi'=>'Terbuat Bahan nya lembut sehingga membuat solat anda lebih nyaman.',
            'foto'=>'31.jpg',
        ]);
        product::create([
            'name'=>'Sarung',
            'harga'=>'60.000',
            'deskripsi'=>'Terbuat Bahan nya lembut sehingga membuat solat anda lebih nyaman.',
            'foto'=>'51.jpg',
        ]);
        product::create([
            'name'=>'Abaya',
            'harga'=>'200.000',
            'deskripsi'=>'Terbuat Bahan nya lembut sehingga membuat solat anda lebih nyaman.',
            'foto'=>'4.jpg',
        ]);
        product::create([
            'name'=>'Kerudung instan',
            'harga'=>'60000',
            'deskripsi'=>'Terbuat Bahan nya lembut sehingga membuat solat anda lebih nyaman.',
            'foto'=>'6.jpg',
        ]);


    }

   
}
