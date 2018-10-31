<!DOCTYPE html>
<html>
    <head>
        <title>Mobile Shop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('client/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('client/css/bootstrap.min.css') }}">
        
        <script  src="{{ asset('client/js/jquery-3.2.1.min.js')}}"></script>
        <script  src="{{ asset('client/js/bootstrap.min.js')}}"></script>
        <!---->
        <link rel="stylesheet" type="text/css" href="{{ asset('client/css/slick.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('client/css/slick-theme.css')}}"/>
        <!--slide-->
        <link rel="stylesheet" type="text/css" href="{{ asset('client/css/style.css')}}">
        
    </head>
    <body>
        <div id="wrapper">
            <!--HEADER-->
            @include('client.layouts.header')
            <!--END HEADER-->

            <!--MENUNAV-->
            @include('client.layouts.navbar')
            <!--ENDMENUNAV-->
            
            <div id="maincontent">
                <div class="container">
                    @include('client.layouts.sidebar')
                    @yield('content')
                </div>

                <div class="container">
                    <div class="col-md-4 bottom-content">
                        <a href=""><img src="{{ asset('client/images/free-shipping.png') }}"></a>
                    </div>
                    <div class="col-md-4 bottom-content">
                        <a href=""><img src="{{ asset('client/images/guaranteed.png') }}"></a>
                    </div>
                    <div class="col-md-4 bottom-content">
                        <a href=""><img src="{{ asset('client/images/deal.png') }}"></a>
                    </div>
                </div>
                <div class="container-pluid">
                    @include('client.layouts.footer')
                </div>
            </div>      
        </div>
        <script src="{{ asset('js/slick.min.js') }}"></script>
    </body>
</html>

<script type="text/javascript">
    $(function() {
        $hidenitem = $(".hidenitem");
        $itemproduct = $(".item-product");
        $itemproduct.hover(function(){
            $(this).children(".hidenitem").show(100);
        },function(){
            $hidenitem.hide(500);
        })
    })
</script>