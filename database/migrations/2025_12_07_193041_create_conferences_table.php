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
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->dateTimeTz("start_dateTime");
            $table->dateTimeTz("end_dateTime");
            $table->string("content");
            $table->integer("maxParticipantCount",false,true);
            $table->boolean("deleted")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferenes');
    }
};
