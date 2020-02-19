<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryToCaseMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'categoryToCase';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('categoryId');
            $table->unsignedBigInteger('caseId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->foreign('caseId')->references('id')->on('cases');
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
