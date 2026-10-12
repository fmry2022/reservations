<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Créer la table (php artisan migrate).
     */
    public function up(): void
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
	    $table->string('firstname',60);
	    $table->string('lastname',60);
            
        });
    }

    /**
     * Reverse the migrations. -> supprimer la table (php artisan migrate:rollback)
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
