<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('campaignname');
            $table->string('advertiser');
            $table->string('code');
            $table->string('appid');
            $table->string('tld');
            $table->string('portalname')->nullable();
            $table->string('creative_type');
            $table->integer('creative_id');
            $table->integer('day_capping');
            $table->string('dimension');
            $table->string('attribute');
            $table->string('url');
            $table->string('billing_id');
            $table->decimal('price', 10, 2);
            $table->string('bidtype', 10);
            $table->string('image_url');
            $table->text('htmltag')->nullable();
            $table->integer('from_hour');
            $table->integer('to_hour');
            $table->string('hs_os');
            $table->string('operator');
            $table->string('device_make');
            $table->string('country');
            $table->string('city')->nullable();
            $table->decimal('lat', 10, 8);
            $table->decimal('lng', 11, 8);
            $table->string('app_name')->nullable();
            $table->string('user_list_id');
            $table->tinyInteger('adplay_logo');
            $table->integer('vast_video_duration')->nullable();
            $table->tinyInteger('logo_placement');
            $table->string('hs_model')->nullable();
            $table->tinyInteger('is_rewarded_inventory');
            $table->string('pixel_tag')->nullable();
            $table->tinyInteger('dmp_campaign_audience');
            $table->string('platform')->nullable();
            $table->tinyInteger('open_publisher');
            $table->tinyInteger('audience_targeting');
            $table->string('native_title')->nullable();
            $table->string('native_type')->nullable();
            $table->string('native_data_value')->nullable();
            $table->string('native_data_cta')->nullable();
            $table->string('native_data_rating')->nullable();
            $table->string('native_data_price')->nullable();
            $table->string('native_img_icon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
