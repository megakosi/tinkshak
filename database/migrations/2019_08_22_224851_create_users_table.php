<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('username')->unique();
            $table->string('user_id')->unique();
            $table->string('name')->default('John Doe');
            $table->string('email')->default('user@domain.com')->unique();
            $table->string('country')->default('ng');
            $table->string('product_type')->default(config('constants.products_icons.Computers'));
            $table->unsignedSmallInteger('verified')->default(0);
            $table->double('account_balance' , 11 , 2)->default(0);
            $table->double('pending_balance' , 11 , 2)->default(0);
            $table->timestamp('last_seen')->default(now());
            $table->double('max_space' , 12, 2)->default(config('constants.free_disk_space'));
            $table->double('remaining_space' , 12, 2)->default(config('constants.free_disk_space'));
            $table->string('profile')->default('user.png');
            $table->string('remember_token' , 100);
            $table->string('contact')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
