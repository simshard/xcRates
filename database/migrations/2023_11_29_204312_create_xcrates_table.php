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
        Schema::create('xcrates', function (Blueprint $table) {
            $table->id();
            $table->string('countryName',32);
            $table->string('countryCode',8); 
            $table->string('currencyName',32); 
            $table->string('currencyCode',8); 
            $table->decimal('rateNew', $precision = 12, $scale = 4);
            $table->string('period',64);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xcrates');
    }
};
