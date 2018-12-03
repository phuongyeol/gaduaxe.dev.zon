<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách sản phẩm</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Francois+One|Roboto+Mono" rel="stylesheet">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
		legend, h4{
			font-family: 'Francois One', sans-serif;
			text-align: center;
			font-size: 32px;
		}
		.elecenter{
			 margin-left: 42.5%;
		}
		table{
			box-shadow: 5px 5px 5px 5px #888888;
		}
	</style>
</head>
<body>
	<div class="container">
		<!-- <div>
			Trả về thông báo: Create|Update|Delete thành công

		</div> -->
		<br>

		<div class="table">
			<legend>Danh sách sản phẩm</legend>

			<!-- Giao diện chức năng: thêm mới sản phẩm -->
			<a href="" ><button type="button" class="btn btn-primary elecenter">Create a new product +</button></a>
			<br><br>

			<!-- Bảng danh sách sản phẩm -->
			<table class="table table-hover table-bordered" >
				<br>
				<thead>
					<tr class="active">
						<th>ID</th>
						<th>NAME</th>
						<th>PRICE</th>
						<th>QUANTITY</th>
						<th>TYPE</th>
						<th>CREATE AT</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($products as $product)
					<tr>
						<!-- Chạy vòng lặp in ra danh sách các sản phẩm -->
						
							<td>{{ $product->id }}</td> 
							<td>{{ $product->name }}</td>
							<td>{{ $product->price }}</td>
							<td>{{ $product->quantity }}</td>
							<td>{{ $product->type }}</td>
							<td>{{ $product->created_at }}</td>
							<td>
								<!-- Giao diện chức năng: detail, update, delete -->

								<a href=""><button type="button" class="btn btn-info btn-detail">Detail</button></a>
								<a href=""><button type="button" class="btn btn-success">Update</button></a>
								<form  action="" style="display: inline-block;  method="POST" role="form">
										@csrf
										<input type="hidden" name="__method" value="delete">
										<button type="submit" class="btn btn-danger">Delete</button>
								</form>

							</td>
						@endforeach
					</tr>
				</tbody>
			</table>
			
			<div class="elecenter">{{ $products->links() }}</div>
		</div>
	</div>
</body>
</html>