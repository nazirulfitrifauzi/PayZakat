<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('name');
            $table->bigInteger('payment_category_id')->nullable();
            $table->string('ic_no');
            $table->string('old_ic')->nullable();
            $table->string('birth_date')->nullable();
            $table->bigInteger('gender_id')->nullable();
            $table->bigInteger('state_origin_id')->nullable();
            $table->integer('mastautin_flag')->nullable();
            $table->integer('mastautin_year')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('postcode')->nullable();
            $table->string('town')->nullable();
            $table->bigInteger('state_id')->nullable();
            $table->string('phone_no');
            $table->string('office_no')->nullable();
            $table->string('position')->nullable();
            $table->string('employee_no')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('fav_ppz_id')->nullable();
            $table->bigInteger('created_by')->nullable();
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
        Schema::dropIfExists('agents');
    }
}
