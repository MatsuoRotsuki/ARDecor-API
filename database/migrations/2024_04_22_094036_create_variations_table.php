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
        Schema::create('variations', function (Blueprint $table) {
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade');
            // $table->string('model_path');
            // $table->boolean('is_stackable');
            // $table->string('main_image_url');
            // $table->timestamps();
            $table->foreignId('variation_collection_id')->references('id')->on('variation_collections')->onDelete('cascade');
            $table->primary(['product_id', 'variation_collection_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variations');
    }
};
