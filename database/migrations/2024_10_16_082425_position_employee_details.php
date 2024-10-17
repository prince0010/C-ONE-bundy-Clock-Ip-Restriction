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
        Schema::create('position_employee_details', function(Blueprint $table){
            $table->id();
            $table->foreignId('employee_personal_details_id')->constrained('employee_details');
            $table->foreignId('position_type_Id')->constrained('position');
            

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
