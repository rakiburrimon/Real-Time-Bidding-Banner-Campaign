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
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_id');
            $table->unsignedBigInteger('bid_request_id');
            $table->decimal('bid_price', 10, 2);
            $table->integer('ad_id');
            $table->integer('creative_id');
            $table->timestamps();

            $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
            $table->foreign('bid_request_id')->references('id')->on('bid_requests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bids');
    }
};
