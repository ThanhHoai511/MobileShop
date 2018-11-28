@extends('client.layouts.app')

@section('content')
<div class="col-md-9 bor">
    <section id="slide" class="text-center" >
        <img src="{{ asset('client/images/slide/sl3.jpg') }}" class="img-thumbnail">
    </section>

    <section class="box-main1">
        <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> MOBILE </a> </h3>
        
        <div class="showitem" style="padding-bottom: 50px;">
            @foreach($product as $pro)
            <div class="col-md-3 item-product bor">
                @php
                    $imgs = $pro->getImage($pro->id);
                @endphp
                <a href="">
                    <img src="{{ asset('uploads/mobile/' . $imgs[0]) }}" class="" width="100%" height="180">
                </a>
                <div class="info-item">
                    <a href="" style="color: #484646;">{{ $pro->product_group->product->name }} {{ $pro->product_group->group->color }} {{ $pro->product_group->group->ram }} {{ $pro->product_group->group->memory }}</a>
                    <p>
                        @if($pro->sale)
                        <strike class="sale">{{ $pro->price }} VND</strike>
                        <br>
                        <b class="price">{{ $pro->sale }} VND</b>
                        @else
                        <b class="price">{{ $pro->price }} VND</b>
                        @endif
                    </p>
                </div>
                <div class="hidenitem">
                    {{-- <p><a href=""><i class="fa fa-search"></i></a></p> --}}
                    <p><a href="{{ route('addLike', $pro->id) }}"><i class="fa fa-heart"></i></a></p>
                    <p><a href="{{ route('addToCart', [$pro->id]) }}"><i class="fa fa-shopping-basket"></i></a></p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
