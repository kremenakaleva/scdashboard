<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });

        DB::table('items')->insert([
          ['link' => 'https://www.google.com/', 'color' => 'red'],
          ['link' => 'https://www.abv.bg/', 'color' => 'green'],
          ['link' => 'https://www.shkolo.bg/', 'color' => 'blue'],
          ['link' => 'https://yahoo.com/', 'color' => 'purple'],
          ['link' => '', 'color' => 'black'],
          ['link' => '', 'color' => 'yellow'],
          ['link' => '', 'color' => 'pink'],
          ['link' => '', 'color' => 'orange'],
          ['link' => '', 'color' => 'grey'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
