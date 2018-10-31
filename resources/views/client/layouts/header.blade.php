<div id="header">
    <div id="header-top">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-6" id="header-text">
                    <a>Nguyen Thi Thanh Hoai</a><b>CNTT3-K56</b>
                </div>
                <div class="col-md-6">
                    <nav id="header-nav-top">
                        <ul class="list-inline pull-right" id="headermenu">
                            <li>
                                <a href=""><i class="fa fa-unlock"></i> Login</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-user"></i> My Account <i class="fa fa-caret-down"></i></a>
                                <ul id="header-submenu">
                                    <li><a href="">Contact</a></li>
                                    <li><a href="">Cart</a></li>
                                    <li><a href="">Checkout</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-share-square-o"></i> Checkout</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" id="header-main">
            <div class="col-md-5">
                <form class="form-inline">
                    <div class="form-group">
                        <label>
                            <select name="category" class="form-control">
                                <option> All Category</option>
                                <option> Dell </option>
                                <option> Hp </option>
                                <option> Asuc </option>
                                <option> Apper </option>
                            </select>
                        </label>
                        <input type="text" name="keywork" placeholder=" input keywork" class="form-control">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <a href="">
                    <img src="{{ asset('client/images/logo-default.png') }}">
                </a>
            </div>
            <div class="col-md-3" id="header-right">
                <div class="pull-right">
                    <div class="pull-left">
                        <i class="glyphicon glyphicon-phone-alt"></i>
                    </div>
                    <div class="pull-right">
                        <p id="hotline">HOTLINE</p>
                        <p>0396136933</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
