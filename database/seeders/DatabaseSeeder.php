<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Menu::create([
            'namaMenu' => 'Americano',
            'harga' => 18000,
            'foto' => 'img\black-coffee\americano.webp'
        ]);

        Menu::create([
            'namaMenu' => 'Espresso',
            'harga' => 15000,
            'foto' => 'img\black-coffee\espresso.jpg'
        ]);

        Menu::create([
            'namaMenu' => 'Tubruk Susu',
            'harga' => 10000,
            'foto' => 'img\black-coffee\tubruk-susu.jpg'
        ]);

        Menu::create([
            'namaMenu' => 'Tubruk',
            'harga' => 8000,
            'foto' => 'img\black-coffee\tubruk.jpg'
        ]);

        Menu::create([
            'namaMenu' => 'Caramel',
            'harga' => 23000,
            'foto' => 'img\flavoured\caramel.jpg'
        ]);

        Menu::create([
            'namaMenu' => 'Hazelnut',
            'harga' => 23000,
            'foto' => 'img\flavoured\hazelnut.jpg'
        ]);

        Menu::create([
            'namaMenu' => 'Mocha',
            'harga' => 23000,
            'foto' => 'img\flavoured\mocha.jpg'
        ]);
    }
}
