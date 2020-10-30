<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_histories', function (Blueprint $table) {
            $table->id();

            $table->string('sp_name');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('virtual_account_id')->nullable();
            $table->unsignedBigInteger('virtual_account_statement_id')->nullable();
            $table->unsignedBigInteger('account_zakat_id')->nullable();
            $table->datetime('transaction_date')->nullable();
            $table->unsignedBigInteger('payment_method_id')->nullable();
            $table->unsignedBigInteger('transaction_status_id')->nullable();
            $table->unsignedBigInteger('bank_id')->nullable();
            $table->unsignedBigInteger('ppz_id')->nullable();
            $table->unsignedBigInteger('asnaf_id')->nullable();
            $table->string('document_no')->nullable();
            $table->datetime('document_date')->nullable();
            $table->unsignedDecimal('transaction_amount')->nullable();
            $table->integer('error_code');
            
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
        Schema::dropIfExists('transaction_histories');
    }
}
