<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_accounts', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');

            $table->string('ref_no')->nullable();
            $table->string('virtual_account_no');
            $table->unsignedBigInteger('agent_id')->nullable();

            $table->unsignedDecimal('total',16,2)->default(0);

            $table->unsignedDecimal('last_in_amount',16,2)->nullable();
            $table->datetime('last_in_date')->nullable();
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
        Schema::dropIfExists('virtual_accounts');
    }
}
