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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->longText('content');
            $table->decimal('regular_price',5,2)->nullable();
            $table->decimal('sale_price',5,2)->nullable();
            $table->integer('unit_quantity')->default(0);
            $table->string('image')->nullable();
            $table->text('excerpt')->nullable();
            $table->boolean('is_featured')->default(0)->comment('0->No,1->Yes');
            $table->boolean('status')->default(0)->comment('0->Draft,1->Published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
