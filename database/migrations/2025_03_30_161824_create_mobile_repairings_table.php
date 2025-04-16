<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileRepairingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_repairings', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->date('customer_date')->nullable();
            $table->string('customer_email')->nullable()->unique();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->text('customer_address')->nullable();
            $table->enum('status', ['0','1', '2', '3'])->comment('0 =Pending','Complated=1', 'Not possible=2', 'Other=3')->default('1');
            $table->text('customer_mobile_problem')->nullable();
            $table->string('customer_mobile_name')->nullable();
            $table->string('customer_mobile_model')->nullable();
            $table->date('delivery_date')->nullable();
            $table->decimal('reapring_cost', 10, 2)->nullable();
            $table->decimal('reapring_charge', 10, 2)->nullable();
            $table->decimal('total_amount', 5, 2)->default(0);
            $table->string('receiver_person_name')->nullable();
            $table->string('reference_name')->nullable();
            $table->string('other_contact_details')->nullable();
            $table->text('comments')->nullable();
            $table->text('mobile_images')->nullable();
            
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('set null'); 

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
        Schema::dropIfExists('mobile_repairings');
    }
}
