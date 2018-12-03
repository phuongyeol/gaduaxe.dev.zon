<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');   // ID sản phẩm, tăng dần
            $table->string('name');     // Tên 
            $table->integer('price');   // Giá 
            $table->integer('quantity');// Số lượng trong kho
            $table->string('type');       // Loại hàng (Laptop, Book, )
            $table->string('image');  // Các mô tả khác
            $table->timestamps();       // Hàm created_at và updated_at
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
