<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Campaign;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert fake data using the Campaign model factory or Faker
        Campaign::factory()->count(100)->create();
    }
}
