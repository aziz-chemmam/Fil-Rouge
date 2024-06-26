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
        schema::create('publication', function(Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('categorie_id')->constrained('categories');
            $table->string('description');
            $table->string('localisation');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
 * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publication');
    }
};
