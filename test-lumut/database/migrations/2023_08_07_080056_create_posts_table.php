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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('idpost'); // AUTO_INCREMENT field
            $table->text('title');
            $table->text('content');
            $table->dateTime('date');
            $table->string('username', 45);

            // Define Foreign Key
            $table->foreign('username')
                ->references('username')
                ->on('account')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->index('username'); // Index for foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
