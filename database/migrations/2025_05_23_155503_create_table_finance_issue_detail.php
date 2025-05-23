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
        Schema::create('table_finance_issue_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('finance_issue_id');
            $table->unsignedBigInteger('membership_id');
            $table->unsignedBigInteger('book_id');
            $table->timestamps();

            $table->foreign('finance_issue_id')->references('id')->on('table_finance')->onDelete('cascade');
            $table->foreign('membership_id')->references('id')->on('table_member_detail')->onDelete('cascade');
            $table->foreign('book_id')->references('id')->on('book')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_finance_issue_detail');
    }
};
