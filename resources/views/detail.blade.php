@extends('master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<img src="{{$product['gallery']}}" class="detail-img" alt="">
		</div>
		<div class="col-sm-6">
			<a href="/">Go back</a>
			<h2>{{$product['name']}}</h2>
			<h3>Price: {{$product['price']}} $</h3>
			<h3>Category: <a href="category/{{$product['category']}}">{{$product['category']}}</a></h3>
			<p>{{$product['description']}}</p> 
			<div class="button-area">
				<form action="/add_to_cart" method="post">
					@csrf
					<input type="hidden" name="product_id" value="{{$product['id']}}">
				<button class="btn btn-primary">Add to cart</button>
				</form>
				<button class="btn btn-success">Buy now</button>
			</div>
		</div>
	</div>
</div>
@endsection