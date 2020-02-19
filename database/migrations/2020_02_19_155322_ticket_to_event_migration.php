<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TicketToEventMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'ticketToEvent';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('ticketId');
            $table->unsignedBigInteger('eventId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ticketId')->references('id')->on('tickets');
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
