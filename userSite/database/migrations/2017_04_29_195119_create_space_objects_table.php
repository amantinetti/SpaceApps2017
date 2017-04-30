<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpaceObjectsTable extends Migration{

    public function up(){
        Schema::create('space_objects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150)->index();
            $table->integer('type_id');
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
        Schema::dropIfExists('spaceObjects');
    }


}
