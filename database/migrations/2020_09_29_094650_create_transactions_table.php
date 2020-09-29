<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->enum('type', ['Income', 'Expenses', 'Purchasing'])->comment('Type of transaction income/expense/purchases');
            $table->unsignedBigInteger("project_id")->comment("Expenses on a project")->nullable();
            $table->unsignedBigInteger("property_id")->comment("Expenses/Incomes on a property ")->nullable();
            $table->string('reference');
            $table->double('amount', 10, 2);
            $table->longText('comments')->nullable()->comment('Details of this transaction');
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




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
