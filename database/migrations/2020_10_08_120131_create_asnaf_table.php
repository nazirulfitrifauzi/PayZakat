<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsnafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asnaf', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');

            $table->string('name');
            $table->string('ic_no');
            $table->unsignedDecimal('household_income');
            $table->unsignedBigInteger('dependents');
            
            $table->string('phone_no')->nullable();
            $table->string('email')->nullable();

            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('town')->nullable();
            $table->string('postcode')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();

            $table->string('recommender_flag')->default(1);
            $table->string('recommender_name')->nullable();
            $table->string('recommender_ic')->nullable();
            $table->string('recommender_phone')->nullable();
            $table->string('recommender_email')->nullable();

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
        Schema::dropIfExists('asnaf');
    }
}
