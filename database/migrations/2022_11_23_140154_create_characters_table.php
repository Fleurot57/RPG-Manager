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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('description');
            $table->string('classe');
            $table->integer('pv') -> default()(random_int(0, 15));
            $table->integer('magie')-> default()(random_int(0, 15));
            $table->integer('force') -> default()(random_int(0, 15));
            $table->integer('agility') -> default()(random_int(0, 15));
            $table->integer('intelligence') -> default()(random_int(0, 15));
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
        Schema::dropIfExists('characters');
    }
};
