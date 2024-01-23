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

        Schema::create('rooms', function (Blueprint $table) {

        $table->id();
        $table->foreignId('hotel_id')->constrained()->onDelete('cascade');
        $table->foreignId('room_type_id');
        $table->string('room_number');
        $table->string('status');
        $table->text('description')->nullable();
        $table->timestamps();

    });
}




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
