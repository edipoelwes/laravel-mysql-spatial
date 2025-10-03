<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Example migration for Laravel 8+ and PHP 8+
 * Use this as a template for creating spatial tables
 */
class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            
            // Add a Point spatial data field named location
            $table->point('location')->nullable();
            
            // Add a Polygon spatial data field named area
            $table->polygon('area')->nullable();
            
            // Example with SRID (e.g. 4326 WGS84 spheroid)
            // $table->point('location', 4326)->nullable();
            // $table->polygon('area', 4326)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
}