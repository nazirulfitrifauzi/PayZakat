<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountZakatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_zakat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('virtual_account_id')->nullable();
            $table->string('account_no');
            $table->integer('customer_id');
            $table->decimal('total',16,2)->nullable();
            $table->decimal('last_payment_amount',16,2)->nullable();
            $table->datetime('last_payment_date')->nullable();
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
        Schema::dropIfExists('account_zakat');
    }
}
