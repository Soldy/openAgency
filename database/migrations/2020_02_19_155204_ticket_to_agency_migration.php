<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TicketToAgencyMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'ticketToAgency';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('ticketId');
            $table->unsignedBigInteger('agencyId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ticketId')->references('id')->on('tickets');
            $table->foreign('agencyId')->references('id')->on('agencies');
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
