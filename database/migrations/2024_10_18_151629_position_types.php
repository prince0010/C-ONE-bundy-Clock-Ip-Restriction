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
        Schema::create('position_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status', ['Vacant', 'Filled'])->default('Vacant');
            $table->integer('parent_id')->default(0);
            $table->foreignId('department_id')->constrained('departments');
            // $table->integer('is_parent')->nullable();
            $table->enum('is_parent', [1, 0])->default(null);
            // $table->integer('approval_level')->default(2);
            $table->enum('approval_level', [1, 2])->default(2);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('position_types');
    }
};
