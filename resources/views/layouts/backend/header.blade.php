<header class="app-header top-bar">
    <!-- begin navbar -->
    <nav class="navbar navbar-expand-md">

        <!-- begin navbar-header -->
        <div class="navbar-header d-flex align-items-center">
            <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{asset('backend/assets/img/logo.png')}}" class="img-fluid logo-desktop" alt="logo" />
                <img src="{{asset('backend/assets/img/logo-icon.png')}}" class="img-fluid logo-mobile" alt="logo" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-align-left"></i>
        </button>
        <!-- end navbar-header -->


        <!-- begin navigation -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navigation d-flex">
                <ul class="navbar-nav nav-left">
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                            <i class="ti ti-align-right"></i>
                        </a>
                    </li>

                </ul>
                <ul class="navbar-nav nav-right ml-auto">
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            <i class="ti ti-email"></i>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            <i class="fe fe-bell"></i>--}}
{{--                            <span class="notify">--}}
{{--                                                    <span class="blink"></span>--}}
{{--                                        <span class="dot"></span>--}}
{{--                                        </span>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link search" href="javascript:void(0)">--}}
{{--                            <i class="ti ti-search"></i>--}}
{{--                        </a>--}}
{{--                        <div class="search-wrapper">--}}
{{--                            <div class="close-btn">--}}
{{--                                <i class="ti ti-close"></i>--}}
{{--                            </div>--}}
{{--                            <div class="search-content">--}}
{{--                                <form>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <i class="ti ti-search magnifier"></i>--}}
{{--                                        <input type="text" class="form-control autocomplete" placeholder="Search Here" id="autocomplete-ajax" autofocus="autofocus">--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                    <li class="nav-item dropdown user-profile">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('backend/assets/img/avtar/02.jpg')}}" alt="avtar-img">
                            <span class="bg-success user-status"></span>
                        </a>
{{--                        <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">--}}
{{--                            <div class="bg-gradient px-4 py-3">--}}
{{--                                <div class="d-flex align-items-center justify-content-between">--}}
{{--                                    <div class="mr-1">--}}
{{--                                        <h4 class="text-white mb-0">Alice Williams</h4>--}}
{{--                                        <small class="text-white">Henry@example.com</small>--}}
{{--                                    </div>--}}
{{--                                    <a href="#" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"> <i--}}
{{--                                            class="zmdi zmdi-power"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="p-4">--}}
{{--                                <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">--}}
{{--                                    <i class="fa fa-user pr-2 text-success"></i> Profile</a>--}}
{{--                                <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">--}}
{{--                                    <i class="fa fa-envelope pr-2 text-primary"></i> Inbox--}}
{{--                                    <span class="badge badge-primary ml-auto">6</span>--}}
{{--                                </a>--}}
{{--                                <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">--}}
{{--                                    <i class=" ti ti-settings pr-2 text-info"></i> Settings--}}
{{--                                </a>--}}
{{--                                <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">--}}
{{--                                    <i class="fa fa-compass pr-2 text-warning"></i> Need help?</a>--}}
{{--                                <div class="row mt-2">--}}
{{--                                    <div class="col">--}}
{{--                                        <a class="bg-light p-3 text-center d-block" href="#">--}}
{{--                                            <i class="fe fe-mail font-20 text-primary"></i>--}}
{{--                                            <span class="d-block font-13 mt-2">My messages</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <a class="bg-light p-3 text-center d-block" href="#">--}}
{{--                                            <i class="fe fe-plus font-20 text-primary"></i>--}}
{{--                                            <span class="d-block font-13 mt-2">Compose new</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </li>
                </ul>
            </div>
        </div>
        <!-- end navigation -->
    </nav>
    <!-- end navbar -->
</header>
