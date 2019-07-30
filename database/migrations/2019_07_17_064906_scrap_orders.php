<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ScrapOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scrap_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('address');
            $table->string('scarp_detail');
            $table->string('expected_date');
            $table->string('expected_time');
            $table->string('contact_no');
            $table->string('email');
            $table->string('refernces_email');
            $table->string('Status');
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
        Schema::dropIfExists('scrap_orders');
    }
}
