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
    Schema::create('organization', function (Blueprint $table) {
        $table->id();
        $table->string('organization_name');
        $table->foreignId('branch_id')->constrained('branches')->onDelete('cascade')->onUpdate('cascade');
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('organizations');
}
};
