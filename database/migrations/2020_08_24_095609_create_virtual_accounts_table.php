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
            $table->string('virtual_account_no');
            // $table->integer('role_id')->nullable();
            // $table->integer('ref_id')->nullable();
            $table->bigInteger('agent_id');
            $table->decimal('balance',16,2)->nullable();
            $table->decimal('last_withdraw_amount',16,2)->nullable();
            $table->datetime('last_withdraw_date')->nullable();
            $table->decimal('last_deposit_amount',16,2)->nullable();
            $table->datetime('last_deposit_date')->nullable();
            $table->integer('active_flag')->default('0');// not active

            $table->bigInteger('created_by');
            $table->bigInteger('updated_by')->nullable();
            $table->bigInteger('deleted_by')->nullable();
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
