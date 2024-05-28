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
        Schema::create('backpacks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 70);
            $table->float('price');
            $table->string('category', 70)->nullable();
            $table->integer('stock');
            $table->text('description')->nullable();
            $table->string('manufacturer', 70);
            $table->string('image', 255)->nullable();
            $table->boolean('is_visible')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backpacks');
    }
};
