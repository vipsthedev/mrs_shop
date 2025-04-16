<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('brand')->nullable();
            $table->text('description')->nullable();
            $table->string('supplier')->nullable();
            $table->enum('status', ['1', '2', '3'])->comment('available=1', 'out_of_stock=2', 'discontinued=3')->default('1');
            $table->string('warranty_period')->nullable();
            $table->date('purchase_date')->nullable();
            $table->integer('quantity')->default(0);
            $table->integer('restock_quantity')->default(0);
            $table->decimal('purchase_cost', 10, 2)->nullable();
            $table->decimal('selling_price', 10, 2)->nullable();
            $table->decimal('discount', 5, 2)->default(0);
            $table->string('supplier_contact')->nullable();
            $table->string('location')->nullable();
            $table->boolean('is_active')->default(true);

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null'); 
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('set null'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accessories');
    }
}
