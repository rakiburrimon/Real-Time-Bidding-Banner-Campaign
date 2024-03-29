<?php

namespace Modules\RTBManagement\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\RTBManagement\App\Models\Campaign;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::factory()->count(100)->create();
    }
}
