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
            $table->unsignedBigInteger('agent_id');

            $table->unsignedDecimal('last_year_total',16,2)->default(0);
            $table->unsignedDecimal('last_year_one_day_float')->default(0);
            $table->unsignedDecimal('last_year_two_day_float')->default(0);
            $table->unsignedDecimal('last_year_late_clearing')->default(0);
            $table->unsignedDecimal('last_year_success')->default(0);
            $table->unsignedDecimal('last_year_fail')->default(0);
            $table->unsignedDecimal('last_year_refund')->default(0);
            $table->unsignedDecimal('last_year_revert')->default(0);
            $table->unsignedDecimal('last_year_utilize')->default(0);

            $table->unsignedDecimal('current_year_total',16,2)->default(0);
            $table->unsignedDecimal('current_year_one_day_float')->default(0);
            $table->unsignedDecimal('current_year_two_day_float')->default(0);
            $table->unsignedDecimal('current_year_late_clearing')->default(0);
            $table->unsignedDecimal('current_year_success')->default(0);
            $table->unsignedDecimal('current_year_fail')->default(0);
            $table->unsignedDecimal('current_year_refund')->default(0);
            $table->unsignedDecimal('current_year_revert')->default(0);
            $table->unsignedDecimal('current_year_utilize')->default(0);

            $table->unsignedDecimal('last_withdraw_amount',16,2)->nullable();
            $table->datetime('last_withdraw_date')->nullable();
            $table->unsignedDecimal('last_deposit_amount',16,2)->nullable();
            $table->datetime('last_deposit_date')->nullable();
            
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
