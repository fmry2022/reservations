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
        //1. on renom d'abord la colonne name en firstname
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'firstname');
        });
        // 2. puis on modifie /ajoute les autres colonnes
        Schema::table('users', function(Blueprint $table){
            $table->String('firstname', 60)->change();
            $table->String('lastname', 60)->after('firstname');
            $table->String('login', 30)->unique()->after('id');
            $table->String('langue', 2);
            $table->enum('role', ['admin', 'member','affiliate', 'press'])->default('member');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('users', function(Blueprint $table){
            $table->dropUnique('login');
            $table->dropColumn(['role','langue','login','lastname']);
            $table->String('firstname', 255)->change();
        });

        Schema::table('users', function(Blueprint $table){
            $table->renameColumn('firstname','name');
        });
    }
};
