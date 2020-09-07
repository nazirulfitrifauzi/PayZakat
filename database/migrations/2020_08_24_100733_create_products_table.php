<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('product_code');
            $table->string('product_name');
            $table->string('product_desc')->nullable();
            $table->bigInteger('product_category_id');
            $table->datetime('effective_date');
            $table->datetime('expiry_date')->nullable();
            $table->string('active_flag')->default('0'); //not active

            // FINANCE PRODUCT DETAIL
            $table->bigInteger('default_concept_id')->nullable();
            $table->string('facility_type')->nullable();
            $table->string('rest_type')->nullable(); //A
            $table->string('repayment_type')->nullable(); //UP
            $table->string('principal_repay_freq')->nullable(); //M
            $table->decimal('min_rate',6,4)->nullable();
            $table->decimal('max_rate',6,4)->nullable();
            $table->decimal('fixed_rate',6,4)->nullable();
            $table->integer('reminder_grace')->nullable();
            $table->integer('early_settle_grace')->nullable();
            $table->integer('part_pymt_grace')->nullable();
            $table->string('statement_freq')->nullable(); //H
            $table->string('review_freq')->nullable(); //Y
            $table->integer('min_duration')->nullable(); //1 MONTH
            $table->integer('max_duration')->nullable(); 
            $table->decimal('min_amt',16,2)->nullable(); // RM 1.00
            $table->decimal('max_amt',16,2)->nullable();
            $table->string('compute_freq')->nullable(); //D
            $table->decimal('forfeit_amt',16,2)->nullable(); //0
            $table->decimal('waive_amt',16,2)->nullable(); //0
            $table->string('gl_acct_num')->nullable(); //11366
            $table->string('profit_repay_freq')->nullable();
            $table->string('pegged_key')->nullable();
            $table->string('sec_dep_flag')->nullable(); //N
            $table->string('guarantor_flag')->nullable(); //Y
            $table->string('commence_code')->nullable(); //1
            $table->string('formula')->nullable(); // 0 = no formula?
            $table->string('tenor_flag')->nullable(); //N
            $table->integer('month_for_lumpsum')->nullable(); //12
            $table->string('semiprocess_flag')->nullable(); 
            $table->string('review_flag')->nullable(); //N
            $table->string('multitier_flag')->nullable(); //N
            $table->decimal('processing_fees',16,2)->nullable();
            $table->decimal('late_charges_rate',16,4)->nullable();
            $table->decimal('penalty_charges',16,2)->nullable();
            $table->decimal('processing_fees_rate',16,4)->nullable();
            // END FINANCE PRODUCT DETAIL
            
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
        Schema::dropIfExists('products');
    }
}
