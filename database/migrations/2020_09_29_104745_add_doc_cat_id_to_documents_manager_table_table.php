<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDocCatIdToDocumentsManagerTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('document_managers', function (Blueprint $table) {
            $table->unsignedBigInteger("document_category_id")->nullable();

            $table->foreign('document_category_id')
                ->references('id')
                ->on('document_categories')
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
        Schema::table('document_managers', function (Blueprint $table) {
            //
        });
    }
}
