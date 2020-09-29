<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_managers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("project_id")->nullable();
            $table->unsignedBigInteger("property_id")->nullable();
            $table->string("document_title");
            $table->string("document_url");
            $table->string("file_type")->comment("File/Images/Templates");


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



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_managers');
    }
}
