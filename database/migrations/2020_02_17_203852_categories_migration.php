<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoriesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'categories';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
              $table->bigIncrements('id')->unsigned();
              $table->string('name');
              $table->timestamps();
              $table->softDeletes();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
