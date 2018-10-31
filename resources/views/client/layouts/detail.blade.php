@extends('client.layouts.app')
@section('content')
<div class="col-md-9 bor">
    <section class="box-main1" >
        <div class="col-md-6 text-center">
            <img src="{{ asset('client/images/16-270x270.png') }}" class="img-responsive bor" id="imgmain" width="100%" height="370" data-zoom-image="images/16-270x270.png">
            
            <ul class="text-center bor clearfix" id="imgdetail">
                <li>
                    <img src="{{ asset('client/images/16-270x270.png') }}" class="img-responsive pull-left" width="80" height="80">
                </li>
                <li>
                    <img src="{{ asset('client/images/16-270x270.png') }}" class="img-responsive pull-left" width="80" height="80">
                </li>
                <li>
                    <img src="{{ asset('client/images/16-270x270.png') }}" class="img-responsive pull-left" width="80" height="80">
                </li>
                <li>
                    <img src="{{ asset('client/images/16-270x270.png') }}" class="img-responsive pull-left" width="80" height="80">
                </li>
               
            </ul>
        </div>
        <div class="col-md-6 bor" style="margin-top: 20px;padding: 30px;">
           <ul id="right">
                <li><h3> Tên sản phẩm </h3></li>
                <li><p> Khuyến mãi nếu có mà éo có thì thôi </p></li>
                <li><p><strike class="sale">19.000.000 đ</strike> <b class="price">11.000.000 đ</b</li>
                <li><a href="" class="btn btn-default"> <i class="fa fa-shopping-basket"></i>Add TO Cart</a></li>
           </ul>
        </div>
    </section>
    <div class="col-md-12" id="tabdetail">
        <div class="row">    
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Mô tả sản phẩm </a></li>
                <li><a data-toggle="tab" href="#menu1">Thông tin khác </a></li>
                <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>Nội dung</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3> Thông tin khác </h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3>Menu 3</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
