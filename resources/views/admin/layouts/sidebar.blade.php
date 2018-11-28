<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ route('listCategory') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Category</a>
            </li>
            <li>
                <a href="{{ route('listProduct') }}"><i class="fa fa-table fa-fw"></i> Product</a>
            </li>
            <li>
                <a href="{{ route('listGroup') }}"><i class="fa fa-edit fa-fw"></i> Group</a>
            </li>
            <li>
                <a href="{{ route('listProductGroup') }}"><i class="fa fa-edit fa-fw"></i> Product Group</a>
            </li>
            <li>
                <a href="{{ route('listBillImport') }}"><i class="fa fa-edit fa-fw"></i> Bill Import</a>
            </li>
            <li>
                <a href="{{ route('listDetailBillImport') }}"><i class="fa fa-edit fa-fw"></i> Detail Bill Import</a>
            </li>
            <li>
                <a href="{{ route('listDetailProduct') }}"><i class="fa fa-edit fa-fw"></i> Detail Product</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>