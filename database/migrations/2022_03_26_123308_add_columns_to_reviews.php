<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->unsignedInteger('bike_id');
            $table->unsignedInteger('user_id');
            $table->string('mileage_rate');
            $table->string('safety_rate');
            $table->string('pricing_rate');
            $table->string('performance_rate');
            $table->string('design_rate');
            $table->string('title');
            $table->longText('description');
            $table->boolean('approved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->unsignedInteger('bike_id');
            $table->unsignedInteger('user_id');
            $table->string('mileage_rate');
            $table->string('safety_rate');
            $table->string('pricing_rate');
            $table->string('performance_rate');
            $table->string('design_rate');
            $table->string('title');
            $table->longText('description');
            $table->boolean('approved')->default(false);
        });
    }
}
