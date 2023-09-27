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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 60);
            $table->string('stazione_di_partenza', 60)->nullable(true);
            $table->string('stazione_di_arrivo', 60)->nullable(true);
            $table->date('giorno_partenza')->nullable(true);
            $table->date('giorno_arrivo')->nullable(true);
            $table->time('orario_di_partenza')->nullable(true);
            $table->time('orario_di_arrivo')->nullable(true);
            $table->mediumInteger('codice_treno');
            $table->tinyInteger('numero_carrozze');
            $table->boolean('in_orario')->nullable(true);
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
