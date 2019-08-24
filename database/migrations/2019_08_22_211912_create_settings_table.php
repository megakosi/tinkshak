<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->double('profit' , 11 , 2)->default(0)->comment('This is the profit');
            $table->double('account_balance' , 11 , 2)->default(0)->comment('This is the amount that we owe our users');
            $table->unsignedBigInteger('number_of_users')->default(0);
            $table->unsignedBigInteger('number_of_products')->default(0);
            $table->unsignedBigInteger('total_number_of_products_sold')->default(0);
            $table->unsignedBigInteger('total_amount_of_profi')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
