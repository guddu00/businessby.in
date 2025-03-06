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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->string('business_website')->nullable();
            $table->string('bank');
            $table->string('city');
            $table->unsignedBigInteger('business_category_id'); 
    $table->foreign('business_category_id')->references('id')->on('business_categories'); 
            $table->string('sale_type')->nullable();
            $table->string('year_established');
            $table->string('entity_type');
            $table->string('operational_status');
            $table->integer('num_employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
