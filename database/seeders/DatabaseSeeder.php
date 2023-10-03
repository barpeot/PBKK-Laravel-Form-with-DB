<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Form;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Form::create([
            'email' => 'monkeydluffy@gmail.com', 
            'password' => 'imgonnabekingofpirates1', 
            'name' => 'Monkey D Luffy', 
            'bounty' => '85.4', 
            'image' => 'luffy.jpg'
        ]);

        Form::create([
            'email' => 'roronoazoro@gmail.com', 
            'password' => 'kesasar02', 
            'name' => 'Roronoa Zoro', 
            'bounty' => '61.3', 
            'image' => 'zoro.jpg'
        ]);

        Form::create([
            'email' => 'godusopp@gmail.com', 
            'password' => 'iamgodusopp22', 
            'name' => 'God Usopp', 
            'bounty' => '23.7', 
            'image' => 'usopp.jpg'
        ]);

        Form::create([
            'email' => 'blacklegsanji@gmail.com', 
            'password' => 'cookofstrawhats3', 
            'name' => 'Vinsmoke Sanji', 
            'bounty' => '56.8', 
            'image' => 'sanji.jpg'
        ]);

        Form::create([
            'email' => 'nami@gmail.com', 
            'password' => 'naminavigator5', 
            'name' => 'Nami', 
            'bounty' => '32.1', 
            'image' => 'nami.jpg'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
