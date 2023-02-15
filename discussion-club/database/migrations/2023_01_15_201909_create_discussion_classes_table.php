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
        Schema::create('discussion_classes', function (Blueprint $table) {
            $table->id('dClass-id');
            $table->integer('topic-id');
            $table->string('name');
            $table->string('speaker-name');
            $table->string('description');
            $table->integer('view-count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discussion_classes');
    }
};
