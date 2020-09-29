<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string("task_name");
            $table->unsignedBigInteger("project_id")->nullable();
            $table->unsignedBigInteger("property_id")->nullable();
            $table->unsignedBigInteger("contact_id");
            $table->string("percentage_complete");
            $table->enum('status', ['To-do', 'Delay', 'Done', 'Canceled'])->comment('Task status');
            $table->dateTime("alert_at");
            $table->dateTime("delayed_to");
            $table->timestamps();


            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('contact_id')
                ->references('id')
                ->on('contacts')
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
        Schema::dropIfExists('tasks');
    }
}
