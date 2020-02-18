<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryToPersonMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'categoryToPerson';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('categoryId');
            $table->unsignedBigInteger('personId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->foreign('personId')->references('id')->on('persones');
              $table->bigIncrements('id')->unsigned();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
