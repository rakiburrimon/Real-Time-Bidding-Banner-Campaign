<?php

namespace Modules\RTBManagement\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\RTBManagement\App\Models\Campaign;

class CampaignFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Campaign::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'advertiser' => $this->faker->company,
            'device_compatibility' => $this->faker->randomElement(['Desktop', 'Mobile', 'Tablet']),
            'geolocation_targeting' => $this->faker->country,
            'ad_format' => $this->faker->randomElement(['Banner', 'Video', 'Native']),
            'bid_price' => $this->faker->randomFloat(2, 0.1, 100),
            'creative_type' => $this->faker->randomElement(['Image', 'Video', 'Text']),
            'image_url' => $this->faker->imageUrl(),
            'landing_page_url' => $this->faker->url,
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}

