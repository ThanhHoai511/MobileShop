<div id="menunav">
    <div class="container">
        <nav>
            <div class="home pull-left">
                <a href="{{ route('index') }}">Home</a>
            </div>
            <!--menu main-->
            <ul id="menu-main">
                <li>
                    <a href="">Contact</a>
                </li>
                <li>
                    <a href="">About us</a>
                </li>
            </ul>
            <!-- end menu main-->

            <!--Shopping-->
            <ul class="pull-right" id="main-shopping">
                <li>
                    <a href="{{ route('cart') }}"><i class="fa fa-shopping-basket"></i> My Cart </a>
                </li>
            </ul>
            <!--end Shopping-->
        </nav>
    </div>
</div>
