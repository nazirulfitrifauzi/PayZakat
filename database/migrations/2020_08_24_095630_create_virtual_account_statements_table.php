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
            $table->bigInteger('virtual_account_id');
            $table->datetime('txn_date');
            $table->bigInteger('txn_code_id');
            $table->bigInteger('bank_id');
            $table->string('document_no')->nullable();
            $table->string('document_date')->nullable();
            $table->decimal('txn_amount',16,2);
            $table->decimal('balance',16,2);
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
