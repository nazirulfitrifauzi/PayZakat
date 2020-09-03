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

            $table->string('name');
            
            $table->string('virtual_account_id');
            
            $table->integer('payment_category_id');
            $table->string('ic_no');
            $table->string('old_ic')->nullable();
            $table->string('birth_date');
            $table->integer('gender_id');
            
            $table->integer('state_origin_id')->nullable();
            $table->integer('mastautin_flag')->nullable();
            $table->integer('mastautin_year')->nullable();

            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('postcode')->nullable();
            $table->string('town')->nullable();
            $table->integer('state_id')->nullable();

            $table->string('phone_no');
            $table->string('office_no')->nullable();

            $table->string('position');
            $table->string('employee_no');
            $table->string('employer_name');

            $table->string('email');
            
            $table->integer('fav_ppz_id');
            
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
        Schema::dropIfExists('agents');
    }
}
