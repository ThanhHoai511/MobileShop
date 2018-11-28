@extends('client.layouts.app')

@section('content')
<style>
	
.gif{
	width: 65%;
	margin-bottom: 50px;
}
table img{
	width: 100%;
}
th{
	font-weight: bold;
	font-size: 15px;
}
td{
	font-size: 15px;
}
.cart2{
	width: 65%;
}
.footer>.content{
	width: 75%;
}
.button1{
	width: 40%;
	height: 100px;
	margin-left: 300px;
}
.button2{
	width: 50%;
	margin: 0 auto;
	margin-bottom: 30px;
	margin-left: 400px;
}
.button2 button{
	padding: 5px 70px;
	border-radius: 4px;
	border:1px solid;
	background-color: #cccccc;
	margin-left: 50px;
}
.table input{
	width: 80px;
}
.table{
	width: 800px;
}

</style>
<div class="cart2 content col-md-9">
	<table class="table table-bordered">
	    <thead>
	      	<tr>
	        	<th style="width: 200px;">Image</th>
	        	<th>Product Name</th>
	        	<th>Price</th>
	        	<th>Delete</th>
	      	</tr>
	    </thead>
	    <tbody>
	    	@if(Session::has('cart'))
	    		@foreach($products as $pro)
			      	<tr>
			      		@php
			      			$image = $pro['item']->getImage($pro['item']['id']);
			      		@endphp
			        	<td><img src="{{ asset('uploads/mobile/' . $image[0]) }}" alt=""></td>
						@php
							$item = $pro['item'];
						@endphp
			        	<td>{{ $item->product_group->product->name }} {{ $item->product_group->group->color }} {{ $item->product_group->group->ram }} {{ $item->product_group->group->memory }} </td>
			        	<td>{{ $pro['item']['price']}} VND</td>
						<td>
							<a href="{{ route('deleteItem', $pro['item']['id']) }}"><button type="button" class="btn btn-danger">Delete</button></a>
						</td>
			      	</tr>
		      	@endforeach  
			@endif 
	    </tbody>
	    <tfoot>
	    	<td colspan="3"><strong>Total:</strong></td>
	    	<td colspan="1" style="font-weight: bold;">
	    		@if (Session::has('cart')) 
	    			{{ $totalPrice }} VND
	    		@endif
	    	</td>
	    </tfoot>
  	</table>
  	<div class="button1">
  		<a href="{{ route('deleteAll') }}"><button class="btn btn-primary" type="button">Empty cart</button></a>
  	</div>
</div>
<div class="button2 col-md-9 content">
	<a href="{{ route('home') }}"><button class="btn btn-default">Return home</button></a>
	<a href="{{ route('checkout') }}"><button class="btn btn-default">Checkout</button></a>
</div>
@endsection
