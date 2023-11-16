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
        Schema::create('2121110068_config', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('hotline');
            $table->string('email');
            $table->string('logo');
            $table->string('icon');
            $table->string('metakey');
            $table->string('metadesc');
            $table->string('images');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('2121110068_config');
    }
};
