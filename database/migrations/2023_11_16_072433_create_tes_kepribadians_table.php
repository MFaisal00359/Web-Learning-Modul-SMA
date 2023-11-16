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
        Schema::create('tes_kepribadians', function (Blueprint $table) {
            $table->id('id_link');
            $table->string('img_path');
            $table->string('link');
            $table->int('link_status');
            $table->int('author_id');

            $table->foreign('author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tes_kepribadians');
    }
};
