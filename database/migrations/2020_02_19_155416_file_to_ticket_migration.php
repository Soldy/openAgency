<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FileToTicketMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'fileToTicket';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('fileId');
            $table->unsignedBigInteger('ticketId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fileId')->references('id')->on('files');
            $table->foreign('ticketId')->references('id')->on('tickets');
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
