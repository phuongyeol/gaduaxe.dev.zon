<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; // Gọi đến model Product

class ProductController extends Controller
{	
	// Do class model Product sử dụng biến STATIC nên không cần hàm __CONSTRUCT
			// protected $product;
			// // Khởi tạo models
			// public function __construct()
			// {
			// 	$this->product = new Product();
			// }
	

    //1. Hàm trả về danh sách sản phẩm:
    public function index()
    {	
    	// Gọi đến hàm trả về tất cả dữ liệu bảng 'products' từ class model Product
    	$products = Product::getALL();
        
    	// Gọi đến giao diện để đổ dữ liệu lên
    	return view('products.list',[
    		'products'=>$products,
    	]);
    }
}
