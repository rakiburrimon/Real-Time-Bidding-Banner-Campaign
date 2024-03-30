<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campaign>
 */
class CampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'campaignname' => $this->faker->company,
            'advertiser' => $this->faker->company,
            'code' => $this->faker->uuid,
            'appid' => $this->faker->uuid,
            'tld' => $this->faker->domainName,
            'portalname' => $this->faker->word,
            'creative_type' => $this->faker->randomElement(['Image', 'Video', 'Text']),
            'creative_id' => $this->faker->numberBetween(100000, 999999),
            'day_capping' => $this->faker->numberBetween(0, 10),
            'dimension' => $this->faker->randomElement(['320x480', '750x200', '400x300']),
            'attribute' => $this->faker->randomElement(['rich-media', 'native']),
            'url' => $this->faker->url,
            'billing_id' => $this->faker->randomNumber(9),
            'price' => $this->faker->randomFloat(2, 0.1, 100),
            'bidtype' => $this->faker->randomElement(['CPM', 'CPC']),
            'image_url' => $this->faker->imageUrl(),
            'htmltag' => $this->faker->text,
            'from_hour' => $this->faker->numberBetween(0, 23),
            'to_hour' => $this->faker->numberBetween(0, 23),
            'hs_os' => $this->faker->randomElement(['Android', 'iOS', 'Desktop']),
            'operator' => $this->faker->randomElement(['Banglalink', 'GrameenPhone', 'Robi', 'Teletalk', 'Airtel', 'Wi-Fi']),
            'device_make' => $this->faker->word,
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'lat' => $this->faker->latitude,
            'lng' => $this->faker->longitude,
            'app_name' => $this->faker->word,
            'user_list_id' => $this->faker->randomNumber(9),
            'adplay_logo' => $this->faker->boolean,
            'vast_video_duration' => $this->faker->numberBetween(30, 300),
            'logo_placement' => $this->faker->boolean,
            'hs_model' => $this->faker->word,
            'is_rewarded_inventory' => $this->faker->boolean,
            'pixel_tag' => $this->faker->uuid,
            'dmp_campaign_audience' => $this->faker->boolean,
            'platform' => $this->faker->word,
            'open_publisher' => $this->faker->boolean,
            'audience_targeting' => $this->faker->boolean,
            'native_title' => $this->faker->word,
            'native_type' => $this->faker->word,
            'native_data_value' => $this->faker->word,
            'native_data_cta' => $this->faker->word,
            'native_data_rating' => $this->faker->word,
            'native_data_price' => $this->faker->word,
            'native_img_icon' => $this->faker->imageUrl(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
