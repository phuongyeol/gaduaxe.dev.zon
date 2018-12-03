<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Đọc thêm về ELOQUENT ORM: https://viblo.asia/p/eloquent-trong-laravel-53-GrLZDbBO5k0
class Product extends Model
{
	// Class Model: Product dùng để lấy và lưu thông tin vào trong bảng products
	
	
	// Khai báo model sử dụng bảng dữ liệu 'products'
    protected $table = 'products';
    // Thông số $fillable để điều chỉnh các cột cần sử dụng
    protected $fillable = ['name', 'price', 'quantity', 'type', 'image' ];


    //-----------------------------------------------------------------------------------------//
    //Hàm truy xuất dữ liệu từ database:
	    public static function getAll()
	    {	
	    	// Lấy tất cả dữ liệu KHÔNG dùng static
		    	// $products = Product::all();
		    	// return view('product.getAll', ['products'=>$product]);
		    
		    // Lấy tất cả dữ liệu dùng static - sắp xếp tứ giảm dần theo id - phân trang
		    	$products = Product::orderBy('id','desc')->paginate(env('PAGES'));
	    		return $products;

	    }
}
