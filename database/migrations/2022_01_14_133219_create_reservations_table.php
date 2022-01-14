<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_class_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('telephone');
            $table->string('seats');
            $table->string('promo_applied');
            $table->decimal('price');
            $table->string('source');
            $table->string('payment_status');
            $table->string('comment');
            $table->string('options');
            $table->boolean('gift');
            $table->string('buyer_first_name');
            $table->string('buyer_last_name');
            $table->string('buyer_message');
            $table->string('email_reminder_sent');
            $table->timestamps();

            $table->foreign('event_class_id')->references('id')->on('event_classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
