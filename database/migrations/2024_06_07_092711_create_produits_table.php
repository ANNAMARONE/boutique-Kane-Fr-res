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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('designation');
            $table->unsignedBigInteger('prix_unitaire');
            $table->string('image');
            $table->enum('etat_produit',['disponible','en rupture','en stock']);
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
