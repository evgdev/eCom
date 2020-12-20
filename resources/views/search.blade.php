@extends('master')
@section('content')
<div class="custom-product">
	<div class="search-wrapper ">
		<div class="ml-10">
	  	<h3 class="margin-left-10 ">Search results</h3>
	  	</div>
	  	<div class="search-wrapper-items">
	  	@foreach ($products as $item)
	  		<div class="search-item">
		   <div  style="flex-direction: column">
		   		<a href="detail/{{$item['id']}}"><img class="trending-image" src="{{$item['gallery']}}"></a>
			   <div >
			   		<h2>{{$item['name']}}</h2>
			   		<h5>{{$item['description']}}</h5>
		   		</div>
		   	</div>
		   	</div>
		@endforeach
		</div>
	 </div>
</div>
@endsection