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
            $table->timestamps();
            $table->string("azienda", 200);
            $table->smallInteger("stazione_partenza", 12);
            $table->smallInteger("stazione_arrivo", 12);
            $table->time("ora_partenza");
            $table->time("ora_arrivo");
            $table->bigInteger("codice_treno", 6);
            $table->integer("numero_carrozze", 20);
            $table->boolean("in orario");
            $table->boolean("cancellato");
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
