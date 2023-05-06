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
        Schema::create('etapes', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('notes');
            $table->string('document');
             $table->timestamps();
             $table->string('deadline');
             $table->string('next_steps');
             $table->unsignedInteger('affaire_id');
             $table->foreign('affaire_id')->references('id')->on('affaires');

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
