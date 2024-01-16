<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rugs', function (Blueprint $table) {
            $table->id();
            $table->string('location')->nullable();
            $table->string('asset_number')->nullable();
            $table->string('design_name')->nullable();
            $table->string('shape')->nullable();
            $table->string('style')->nullable();
            $table->integer('size_width_ft');
            $table->integer('size_length_ft');
            $table->integer('size_width_in');
            $table->integer('size_length_in');
            $table->integer('size_width_m');
            $table->integer('size_length_m');
            $table->string('sku')->nullable();
            $table->string('material')->nullable();
            $table->string('collection')->nullable();
            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->string('age')->nullable();
            $table->string('construction')->nullable();
            $table->string('country')->nullable();
            $table->string('image')->nullable();
            $table->string('gallery')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rugs');
    }
};
