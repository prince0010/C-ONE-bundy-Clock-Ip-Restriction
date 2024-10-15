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
        Schema::create('employee_person_id_details', function (Blueprint $table){
            $table->id();
            $table->integer('employee_id')->unique()->nullable();
            $table->string('first_name', 50);
            $table->string('middle_name', 50);
            $table->string('last_name', 50);
            $table->string('nickname', 50);
            $table->string('marital_status', 50);
            $table->date('brithday');
            $table->string('birthplace', 255);
            $table->string('home_address', 255);
            $table->string('present_address', 255);
            $table->string('ext', 10)->nullable();
            $table->string('picture');
            $table->foreignId('branch_id')->constrained('branches');
            // $table->foreignId('')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
