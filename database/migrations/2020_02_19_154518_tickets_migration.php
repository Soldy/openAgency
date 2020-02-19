<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TicketsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'tickets';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name', 70);
            $table->text('message')->default(" ");
            $table->string('status');
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
    }
}
