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
            $table->string('account_no');
            // $table->integer('role_id')->nullable();
            // $table->integer('ref_id')->nullable();
            $table->integer('agent_id');
            $table->decimal('balance',16,2)->nullable();
            $table->decimal('last_withdraw_amount',16,2)->nullable();
            $table->datetime('last_withdraw_date')->nullable();
            $table->decimal('last_deposit_amount',16,2)->nullable();
            $table->datetime('last_deposit_amount')->nullable();
            $table->integer('status')->default('0');
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
