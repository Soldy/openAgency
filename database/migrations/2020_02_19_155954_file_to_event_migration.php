<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FileToEventMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'fileToEvent';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('fileId');
            $table->unsignedBigInteger('eventId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fileId')->references('id')->on('files');
            $table->foreign('eventId')->references('id')->on('events');
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
