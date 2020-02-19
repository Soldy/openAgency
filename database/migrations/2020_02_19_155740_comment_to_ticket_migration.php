<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentToTicketMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'commentToTicket';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('commentId');
            $table->unsignedBigInteger('ticketId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ticketId')->references('id')->on('tickets');
            $table->foreign('commentId')->references('id')->on('comments');
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
