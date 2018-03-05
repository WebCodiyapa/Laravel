<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContributorToUserFeedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('user_feedback', function (Blueprint $table) {
//            $table->integer('contributor')->after('raiting')->default(0);
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('user_feedback', function (Blueprint $table) {
//            $table->dropColumn('contributor');
//        });
    }
}
