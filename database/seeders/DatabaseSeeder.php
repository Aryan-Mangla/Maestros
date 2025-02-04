<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Aryan Mangla', //name admin
            'email' => 'aryan-mangla@gmail.com', //email admin
            'password' => bcrypt('test@aryan'), //password admin
            'role' => 'admin', 
        ]);
        
        // $this->call([
        //     BlogsTableSeeder::class,   
        // call all seeders like above example 
        
        // ]);
    }
}
