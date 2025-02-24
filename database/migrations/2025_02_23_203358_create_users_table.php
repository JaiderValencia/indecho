<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('users', function (Blueprint $table) {
            $table->id('Usu_id');
            $table->char('Usu_NombreUsuario', 50);
            $table->char('Usu_Usuario', 50);
            $table->text('Usu_Password');
            $table->foreignId('role_id')
                ->nullable(false)
                ->constrained('roles')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::drop('users');
    }
};
