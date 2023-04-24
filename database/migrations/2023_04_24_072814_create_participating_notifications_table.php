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
        Schema::create('participating_notifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId');
            $table->string('consultant');
            $table->string('date');
            $table->string('duration');
            $table->string('regarding');
            $table->string('updated_at');
            $table->string('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participating_notifications');
    }
};
