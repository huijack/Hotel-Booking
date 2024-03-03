<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_name')->nullable();
            $table->string('country');
            $table->string('street_address');
            $table->string('street_address2')->nullable();
            $table->string('postcode');
            $table->string('province');
            $table->string('phone_number');
            $table->string('email');
            $table->foreign('email')->references('email')->on('useraccounts')->onDelete('cascade');
            $table->date('date_check_in');
            $table->date('date_check_out');
            $table->integer('room_quantity');
            $table->string('room_type');
            $table->string('order_notes')->nullable();
            $table->float('price', 8, 2);
            $table->integer('adults');
            $table->integer('children');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
