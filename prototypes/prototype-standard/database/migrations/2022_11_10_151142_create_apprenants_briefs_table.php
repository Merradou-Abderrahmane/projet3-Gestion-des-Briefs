<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenants_briefs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('apprenant_id')->constrained('apprenants');
            $table->foreignId('brief_id')->constrained('briefs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenants_briefs');
    }
};
