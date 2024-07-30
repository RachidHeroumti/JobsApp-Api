<?php

namespace Database\Seeders;

use App\Models\listjobs;
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
         User::factory(10)->create();

        //User::factory()->create();

        listjobs::factory()->create([
            
                "title" => "Software Engineer",
                "company" => "TechCorp",
                "email" => "hr@techcorp.com",
                "description" => "Design and develop software applications - Collaborate with cross-functional teams - Write clean and efficient code."
                
          
    
    ]);


    }
}
