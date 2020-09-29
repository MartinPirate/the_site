<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MaintanceTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        Schema::create('property_maintenances', function (Blueprint $table) {

        $table->id();
        $table->unsignedBigInteger("property_id");
        $table->string("maintenance_task_name");
        $table->double('amount', 10, 2);
        $table->string("status");
        $table->timestamps();


        $table->foreign('property_id')
            ->references('id')
            ->on('properties')
            ->onUpdate('cascade')
            ->onDelete('cascade');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("property_maintenances");
    }
}
