<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_classes', function (Blueprint $table) {
            $table->id();
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreign('event_id')->references('id')->on('events');
            $table->date('start_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->decimal('price');
            $table->boolean('allow_promo');
            $table->integer('seats');
            $table->string('product_type');
            $table->string('name');
            $table->text('additional_info');
            $table->string('legacy_sku');
            $table->integer('status');
            $table->integer('email_reminder_interval');
            $table->string('email_reminder_template');
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
        Schema::dropIfExists('event_classes');
    }
}
