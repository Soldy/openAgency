<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryToEmailMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'categoryToEmail';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('categoryId');
            $table->unsignedBigInteger('emailId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->foreign('emailId')->references('id')->on('emails');
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
