<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialMediaColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //

            $table->mediumText('bio')->default('A brief info about you')->nullable();
            $table->string('facebook_username')->default(config('constants.site_name'))->nullable();
            $table->string('twitter_username')->default(config('constants.site_name'))->nullable();
            $table->string('instagram_username')->default(config('constants.site_name'))->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
