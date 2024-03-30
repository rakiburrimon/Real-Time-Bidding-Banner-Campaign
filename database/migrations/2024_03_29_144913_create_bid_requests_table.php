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
        Schema::create('bid_requests', function (Blueprint $table) {
            $table->id();
            $table->string('request_id');
            $table->json('imp');
            $table->json('app');
            $table->json('device');
            $table->json('user');
            $table->integer('at');
            $table->integer('tmax');
            $table->json('cur');
            $table->json('bcat');
            $table->json('source');
            $table->json('ext');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bid_requests');
    }
};
