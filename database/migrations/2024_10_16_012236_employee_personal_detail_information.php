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
        Schema::create('employee_details', function (Blueprint $table){
            $table->id();
            $table->string('first_name', 50);
            $table->string('middle_name', 50);
            $table->string('last_name', 50);
            $table->string('nickname', 50);
            $table->string('gender');
            $table->string('marital_status');
            $table->date('birthday');
            $table->string('birthplace');
            $table->string('home_address');
            $table->string('ext');
            $table->string('present_address');
            $table->foreignId('branch_id')->constrained('branch');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_details');
    }
};
