<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="mobile-only-brand pull-left">
        <div class="nav-header pull-left">
            <div class="logo-wrap">
                <a href="/migouabo">
                    <img class="brand-img" src="{{asset('public/tests/dist/img/logo.png')}}" alt="brand"/>
                    <span class="brand-text">doodle</span>
                </a>
            </div>
        </div>	
        <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
        <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
        <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
        <form id="search_form" role="search" class="top-nav-search collapse pull-left">
            <div class="input-group">
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                <button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
                </span>
            </div>
        </form>
    </div>
    <div id="mobile_only_nav" class="mobile-only-nav pull-right">
        <ul class="nav navbar-right top-nav pull-right">
            <li>
                <a id="open_right_sidebar" href="#"><i class="zmdi zmdi-settings top-nav-icon"></i></a>
            </li>
            <li class="dropdown app-drp">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-apps top-nav-icon"></i></a>
                <ul class="dropdown-menu app-dropdown" data-dropdown-in="slideInRight" data-dropdown-out="flipOutX">
                    <li>
                        <div class="app-nicescroll-bar">
                            <ul class="app-icon-wrap pa-10">
                                <li>
                                    <a href="weather.html" class="connection-item">
                                    <i class="zmdi zmdi-cloud-outline txt-info"></i>
                                    <span class="block">weather</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="inbox.html" class="connection-item">
                                    <i class="zmdi zmdi-email-open txt-success"></i>
                                    <span class="block">e-mail</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="calendar.html" class="connection-item">
                                    <i class="zmdi zmdi-calendar-check txt-primary"></i>
                                    <span class="block">calendar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="vector-map.html" class="connection-item">
                                    <i class="zmdi zmdi-map txt-danger"></i>
                                    <span class="block">map</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="chats.html" class="connection-item">
                                    <i class="zmdi zmdi-comment-outline txt-warning"></i>
                                    <span class="block">chat</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact-card.html" class="connection-item">
                                    <i class="zmdi zmdi-assignment-account"></i>
                                    <span class="block">contact</span>
                                    </a>
                                </li>
                            </ul>
                        </div>	
                    </li>
                    <li>
                        <div class="app-box-bottom-wrap">
                            <hr class="light-grey-hr ma-0"/>
                            <a class="block text-center read-all" href="javascript:void(0)"> more </a>
                        </div>
                    </li>
                </ul>
            </li>
            
            <li class="dropdown auth-drp">
                <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{asset('public/tests/dist/img/user1.png')}}" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
                <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                    <li>
                        <a href="#"><i class="zmdi zmdi-account"></i><span>Profil</span></a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="zmdi zmdi-settings"></i><span>Paramètres</span></a>
                    </li>

                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="zmdi zmdi-power"></i><span>Déconnexion</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>	
</nav>