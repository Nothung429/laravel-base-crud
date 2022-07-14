<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic', function (Blueprint $table) {
            $table->id();
            $table->string('title', 125);
            $table->string('author', 125);
            $table->string('writer', 125)->nullable();
            $table->string('cartoonist', 125)->nullable();
            $table->string('characters', 125);
            $table->float('price', 5, 2);
            $table->string('image')->nullable();
            $table->date('release_date');
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
        Schema::dropIfExists('comic');
    }
}
