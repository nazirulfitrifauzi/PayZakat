<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');

            $table->string('name');

            $table->unsignedBigInteger('agent_id')->nullable();

            $table->unsignedBigInteger('payment_category_id')->nullable();
            $table->string('ic_no');
            $table->string('old_ic')->nullable();
            $table->string('birth_date')->nullable();
            $table->unsignedBigInteger('gender_id')->nullable();

            $table->unsignedBigInteger('state_origin_id')->nullable();
            $table->integer('mastautin_flag')->nullable();
            $table->integer('mastautin_year')->nullable();

            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('postcode')->nullable();
            $table->string('town')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();

            $table->string('phone_no');
            $table->string('office_no')->nullable();

            $table->string('position')->nullable();
            $table->string('employee_no')->nullable();
            $table->string('employer_name')->nullable();

            $table->string('email')->nullable();

            $table->unsignedBigInteger('fav_ppz_id')->nullable();
            $table->unsignedDecimal('default_amount_zakat')->default(30.00);

            $table->integer('screen_status')->default(0);
            $table->string('screen_remarks')->nullable();
            $table->integer('active')->default(0);

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
        Schema::dropIfExists('customers');
    }
}
