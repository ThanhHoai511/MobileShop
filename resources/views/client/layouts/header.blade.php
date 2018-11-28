<div id="header">
    <div id="header-top">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-5" id="header-text">
                    <a>Nguyen Thi Thanh Hoai</a><b>CNTT3-K56</b>
                </div>
                <div class="col-md-7">
                    <nav id="header-nav-top">
                        <ul class="list-inline pull-right" id="headermenu">
                            @if(!Auth::check())
                                <li>
                                    <a href="{{ route('login') }}"><i class="fa fa-unlock"></i> Login</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}"><i class="fa fa-user"></i> Register</a>
                                </li>
                            @else
                                <li>
                                    <a href=""><i class="fa fa-user"></i> {{ Auth::user()->name }} <i class="fa fa-caret-down"></i></a>
                                    <ul id="header-submenu" style="width: 150px;">
                                        <li><a href="{{ route('editPass') }}">Change password</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a> 
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            @endif
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
                        <input type="text" name="keywork" placeholder="Search" class="form-control">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <a href="{{ route('index') }}">
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
