<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agent;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $agents = [
            [
                'name' => 'Fatima Palima',
                'job_description' => 'HOA Owner',
                'profile_image' => 'team9.jpg',
            ],
            [
                'name' => 'Kimberly Bolante',
                'job_description' => 'Loan Officer and Loan Servicer',
                'profile_image' => 'team13.jpeg',
            ],
            [
                'name' => 'Sean Carl Artiaga',
                'job_description' => 'Mortage Lender and Mortage Broker',
                'profile_image' => 'team12.jpeg',
            ],
            [
                'name' => 'Mark Jay Marcayda',
                'job_description' => 'Mortage Lender and Mortage Broker',
                'profile_image' => 'team10.jpeg',
            ],
            [
                'name' => 'John Michael Lomerio',
                'job_description' => 'Home Appraiser',
                'profile_image' => 'team11.jpeg',
            ],
            [
                'name' => 'Josua Loria',
                'job_description' => 'Real state agent',
                'profile_image' => 'team14.jpeg',
            ],
            [
                'name' => 'John Michael Lomerio',
                'job_description' => 'Home Appraiser',
                'profile_image' => 'team11.jpeg',
            ],
        ];

        Agent::insert($agents);
    }
}
