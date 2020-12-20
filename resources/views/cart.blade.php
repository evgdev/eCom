@extends('master')
@section('content')
<div class="custom-product">
	<div class="trending-wrapper ">
		<div class="ml-10">
	  	<h3 class="margin-left-10 ">Cart</h3>
	  	</div>
	  	<div class="cart-items">
	  	@foreach ($products as $item)
	  	<div class="row cart-list-divide">
		   <div class="col-sm-3">
		   		<a href="detail/{{$item->id}}">
		   			<img class="trending-image" src="{{$item->gallery}}"></a>
		   	</div>
		   <div class="col-sm-4">
		   		<a href="detail/{{$item->id}}">
			   		<h3>{{$item->name}}</h3></a>
			   	<p>{{$item->description}}</p>	
		   	</div>
		   <div class="col-sm-3">
		   		<button class="btn btn-warning">Remove</button>
		   	</div>
		  </div>
		@endforeach
		</div>
	 </div>
</div>
@endsection