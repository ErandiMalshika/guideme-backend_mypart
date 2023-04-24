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
        Schema::create('review_notifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId');
            $table->string('requestID');
            $table->string('reviewedPerson');
            $table->string('requestOpened');
            $table->string('reviewedCount');
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
        Schema::dropIfExists('review_notifications');
    }
};
