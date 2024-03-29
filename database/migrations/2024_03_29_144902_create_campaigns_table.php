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
            $table->string('name', 50);
            $table->string('advertiser', 50);
            $table->string('device_compatibility', 50);
            $table->string('geolocation_targeting', 150);
            $table->string('ad_format', 50);
            $table->decimal('bid_price', 8, 2);
            $table->string('creative_type', 50);
            $table->string('image_url')->nullable();
            $table->string('landing_page_url')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
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
