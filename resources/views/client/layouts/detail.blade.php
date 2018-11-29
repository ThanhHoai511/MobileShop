@extends('client.layouts.app')
@section('content')
<div class="col-md-9 bor">
    <section class="box-main1" >
        <div class="col-md-6 text-center">
            @php
                $img = $pro->getImage($pro->id);
            @endphp
            <img src="{{ asset('uploads/mobile/' . $img[0]) }}" class="img-responsive bor" id="imgmain" width="100%" height="370" data-zoom-image="images/16-270x270.png">
            
            <ul class="text-center bor clearfix" id="imgdetail">
                @for($i = 1; $i < count($img); $i++)
                    <li>
                        <img src="{{ asset('uploads/mobile/' . $img[$i])  }}" class="img-responsive pull-left" width="80" height="80">
                    </li>
                @endfor
            </ul>
        </div>
        <div class="col-md-6 bor" style="margin-top: 20px;padding: 30px;">
           <ul id="right">
                <li><h3> {{ $pro->product_group->product->name }} {{ $pro->product_group->group->color }} {{ $pro->product_group->group->ram }} {{ $pro->product_group->group->memory }}</h3></li>
                <li><p>
                    @if($pro->sale != null)
                        <strike class="sale">{{ $pro->sale }} VND</strike>
                    @endif
                    <b class="price">{{ $pro->price }} VND</b></li>
                <li><a href="{{ route('addToCart', $pro->id) }}" class="btn btn-default"> <i class="fa fa-shopping-basket"></i>Add To Cart</a></li>
           </ul>
        </div>
    </section>
    <div class="col-md-12" id="tabdetail">
        <div class="row">    
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
                <li><a data-toggle="tab" href="#menu1">Camera</a></li>
                <li><a data-toggle="tab" href="#menu2">Pin</a></li>
                <li><a data-toggle="tab" href="#menu3">Screen</a></li>
                <li><a data-toggle="tab" href="#menu4">Weight</a></li>
                <li><a data-toggle="tab" href="#menu5">Imei</a></li>
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <p>{{ $pro->description }}</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <p>Camera before: {{ $pro->camera_before }}</p>
                    <br>
                    <p>Camera after: {{ $pro->camera_after }}</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <p>Pin: {{ $pro->pin}}</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <p>Screen: {{ $pro->screen }}</p>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <p>Weight: {{ $pro->weight }}</p>
                </div>
                <div id="menu5" class="tab-pane fade">
                    <p>Imei: {{ $pro->imei }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
