<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualAccountStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_account_statements', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            
            $table->unsignedBigInteger('virtual_account_id');
            
            $table->datetime('transaction_date');
            $table->unsignedBigInteger('transaction_code_id');
            $table->unsignedBigInteger('payment_method_id');
            $table->unsignedBigInteger('transaction_status_id');
            $table->unsignedBigInteger('bank_id');

            $table->unsignedBigInteger('ppz_id')->nullable();
            $table->unsignedBigInteger('asnaf_id')->nullable();
            
            $table->string('document_no')->nullable();
            $table->string('document_date')->nullable();
            $table->unsignedDecimal('transaction_amount',16,2);
            
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
        Schema::dropIfExists('virtual_account_statements');
    }
}
