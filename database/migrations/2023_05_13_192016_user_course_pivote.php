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
        Schema::create('user_course_pivote', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->references('id')->on('users');
        $table->foreignId('course_id')->references('id')->on('courses');
        
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
