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
        Schema::create('book_released_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('member_id');
            $table->date('released_date');
            $table->date('returned_date')->nullable();
            $table->timestamps();
            
            $table ->foreign('book_id')->references('id')->on('book')->onDelete('cascade');
            $table ->foreign('member_id')->references('id')->on('table_member_detail')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_book_released_detail');
    }
};
