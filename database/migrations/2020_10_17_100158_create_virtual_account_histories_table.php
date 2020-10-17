<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualAccountHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_account_histories', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('virtual_account_id');
            $table->datetime('report_date');

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
        Schema::dropIfExists('virtual_account_histories');
    }
}
