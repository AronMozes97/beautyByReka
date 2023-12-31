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
        Schema::create('pricing', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->text('duration')->nullable()->default(null);
            $table->string('price');
            $table->text('features')->nullable()->default(null);
            $table->text('other_features')->nullable()->default(null);
            $table->unsignedBigInteger('rental_id')->nullable();
            $table->timestamps();

            $table->foreign('rental_id')->references('id')->on('rentals')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing');
    }
};
