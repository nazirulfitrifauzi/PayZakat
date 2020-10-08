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
            $table->uuid('uuid');
            
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('virtual_account_id')->nullable();
            $table->string('account_zakat_no');
            $table->unsignedBigInteger('customer_id');

            $table->unsignedDecimal('total',16,2)->nullable();
            
            $table->unsignedDecimal('last_payment_amount',16,2)->nullable();
            $table->datetime('last_payment_date')->nullable();
            
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

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
