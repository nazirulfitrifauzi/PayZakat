<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountZakatRefundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_zakat_refunds', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            
            $table->string('ref_no');
            $table->unsignedBigInteger('virtual_account_id');
            $table->unsignedBigInteger('virtual_account_statements_id');
            $table->unsignedBigInteger('year');

            $table->unsignedDecimal('total',16,2)->default(0);

            $table->unsignedDecimal('last_out_amount',16,2)->nullable();
            $table->datetime('last_out_date')->nullable();
            
            $table->integer('active_flag')->default('0');// not active

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
        Schema::dropIfExists('account_zakat_refunds');
    }
}
