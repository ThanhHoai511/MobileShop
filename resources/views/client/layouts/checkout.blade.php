@extends('client.layouts.app')

@section('content')
<script>
	function handleClick(payment) {
	    var feeship = payment.value;
	   	$("#feeship").html(feeship);
	   	var fee = $('#feeship').html();
	   	var priceTotal = $('#totalPrice').html();
	   	var total = Number(feeship) + Number(priceTotal);
	   	$('#total').html(total);
	}
</script>
<style>
	.section {
  padding-top: 30px;
  padding-bottom: 30px;
}
.checkout{
  width: 430px;
}

.section-title {
  position: relative;
  margin-bottom: 30px;
  margin-top: 15px;
}

.section-title .title {
  display: inline-block;
  text-transform: uppercase;
  margin: 0px;
}

.section-title .section-nav {
  float: right;
}

.section-title .section-nav .section-tab-nav {
  display: inline-block;
}

.section-tab-nav li {
  display: inline-block;
  margin-right: 15px;
}

.section-tab-nav li:last-child {
  margin-right: 0px;
}

.section-tab-nav li a {
  font-weight: 700;
  color: #8D99AE;
}

.section-tab-nav li a:after {
  content: "";
  display: block;
  width: 0%;
  height: 2px;
  background-color: #D10024;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.section-tab-nav li.active a {
  color: #D10024;
}

.section-tab-nav li a:hover:after, .section-tab-nav li a:focus:after, .section-tab-nav li.active a:after {
  width: 100%;
}

.section-title .section-nav .products-slick-nav {
  top: 0px;
  right: 0px;
}
.billing-details {
  margin-bottom: 30px;
}

.shiping-details {
  margin-bottom: 30px;
}

.order-details {
  position: relative;
  padding: 0px 30px 30px;
  border-right: 1px solid #E4E7ED;
  border-left: 1px solid #E4E7ED;
  border-bottom: 1px solid #E4E7ED;
}

.order-details:before {
  content: "";
  position: absolute;
  left: -1px;
  right: -1px;
  top: -15px;
  height: 30px;
  border-top: 1px solid #E4E7ED;
  border-left: 1px solid #E4E7ED;
  border-right: 1px solid #E4E7ED;
}

.order-summary {
  margin: 15px 0px;
}

.order-summary .order-col {
  display: table;
  width: 100%;
}

.order-summary .order-col:after {
  content: "";
  display: block;
  clear: both;
}

.order-summary .order-col>div {
  display: table-cell;
  padding: 10px 0px;
}

.order-summary .order-col>div:first-child {
  width: calc(100% - 150px);
}

.order-summary .order-col>div:last-child {
  width: 150px;
  text-align: right;
}

.order-summary .order-col .order-total {
  font-size: 24px;
  color: #D10024;
}

.order-details .payment-method {
  margin: 30px 0px;
}

.order-details .order-submit {
  display: block;
  margin-top: 30px;
}
.input {
  height: 40px;
  padding: 0px 15px;
  border: 1px solid #E4E7ED;
  background-color: #FFF;
  width: 100%;
}

textarea.input {
  padding: 15px;
  min-height: 90px;
}

/*-- Number input --*/

.input-number {
  position: relative;
}

.input-number input[type="number"]::-webkit-inner-spin-button, .input-number input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.input-number input[type="number"] {
  -moz-appearance: textfield;
  height: 40px;
  width: 100%;
  border: 1px solid #E4E7ED;
  background-color: #FFF;
  padding: 0px 35px 0px 15px;
}

.input-number .qty-up, .input-number .qty-down {
  position: absolute;
  display: block;
  width: 20px;
  height: 20px;
  border: 1px solid #E4E7ED;
  background-color: #FFF;
  text-align: center;
  font-weight: 700;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.input-number .qty-up {
  right: 0;
  top: 0;
  border-bottom: 0px;
}

.input-number .qty-down {
  right: 0;
  bottom: 0;
}

.input-number .qty-up:hover, .input-number .qty-down:hover {
  background-color: #E4E7ED;
  color: #D10024;
}
</style>
<div class="section">
	<div class="container" style="font-size: 16px;">
		<form action="{{ route('order') }}" method="POST" name="myForm">
			@csrf
			<div class="row">
				<div class="col-md-8 order-details">
					<div class="section-title text-center">
						<h3 class="title">Your Order</h3>
					</div>
					<div class="order-summary">
						<div class="order-col">
							<div><strong>TOTAL PRICE</strong></div>
							<div><strong id="totalPrice" style="color: red; font-size: 18px;">{{ $totalPrice}}</strong> VND</div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Billing address</h3>
						</div>

						<div class="form-group">
							<label for="name">Name</label>
							<input class="input" type="text" id="name" name="name" value="{{ Auth::user()->name }}">
						</div>

						<div class="form-group">
							<label for="address">Address</label>
							<input class="input" type="text" id="address" name="address" value="{{ Auth::user()->address}}">
						</div>
						
						<div class="form-group">
							<label for="phone">Phone</label>
							<input class="input" type="text" id="phone" name="phone" value="{{ Auth::user()->phone }}">
						</div>

						<div class="form-group">
							<label for="address">Email</label>
							<input class="input" type="text" id="email" name="email" value="{{ Auth::user()->email }}">
						</div>

						<div class="form-group">
							<label for="description">Note</label>
							<textarea class="input" name="description" placeholder="Order Notes"></textarea>
						</div>
					</div>
					<button class="btn btn-primary checkout col-md-8" type="submit">Order</button>
				</div>
				
			</div>
		</form>
	</div>
</div>
@endsection
