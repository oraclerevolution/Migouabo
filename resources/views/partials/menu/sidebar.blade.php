<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Menu</span> 
            <i class="zmdi zmdi-more"></i>
        </li>
        
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">E-Commerce</span></div><div class="clearfix"></div></a>
            <ul id="ecom_dr" class="collapse collapse-level-1">
                <li>
                    <a href=" {{ route('category_path') }} ">Catégories</a>
                </li>
                <li>
                    <a href="{{ route('seller_path') }}">Vendeuses</a>
                </li>
                <li>
                    <a href=" {{ route('command_path') }} ">Commandes</a>
                </li>
            </ul>
        </li>
    </ul>
</div>