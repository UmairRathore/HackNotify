<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu " id="sidebarNav">
            <li class="nav-static-title">Admin</li>


            <li class="menu-item">
                <a href="{{route('user-list')}}" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#user" aria-expanded="false" aria-controls="user">
                    <span><i class="ti ti-user"></i>User</span>
                </a>
            </li>

{{--            <li class="menu-item">--}}
{{--                <a href="{{route('indian-blood-donors-list')}}" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#user" aria-expanded="false" aria-controls="user">--}}
{{--                    <span><i class="ti ti-notepad"></i>Indian Blood Donors</span>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li class="menu-item">
                <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#company" aria-expanded="false" aria-controls="company">
                    <span><i class="ti ti-list"></i>Company</span>
                </a>
                <ul id="company" class="collapse" aria-labelledby="company" data-bs-parent="#side-nav-accordion">
{{--                    <li> <a href="#">Company </a> </li>--}}
                    <li> <a href="{{route('company-list')}}">Company </a> </li>
{{--                    <li> <a href="#">Search Breach</a> </li>--}}
                    <li> <a href="{{route('searchbreach-list')}}">Search Breach</a> </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#home" aria-expanded="false" aria-controls="home">
                    <span><i class="ti ti-home"></i>Home</span>
                </a>
                <ul id="home" class="collapse" aria-labelledby="home" data-bs-parent="#side-nav-accordion">
                    <li> <a href="{{route('homeheading-list')}}">Heading </a> </li>
                    <li> <a href="{{route('recentbreaches-list')}}">Recent Breaches</a> </li>
                </ul>
            </li>


            {{--            <li class="menu-item">--}}
            {{--                <a href="{{route('homeheading-list')}}">--}}
            {{--                    <span>Home</span>--}}
            {{--                </a>--}}
            {{--            </li>--}}

            {{--            <li class="menu-item">--}}
            {{--                <a href="{{route('recentbranches-list')}}">--}}
            {{--                    <span>Recent Branches</span>--}}
            {{--                </a>--}}
            {{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="{{route('aboutus-list')}}">--}}
{{--                    <span>About us </span>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li class="menu-item">
                <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#aboutus" aria-expanded="false" aria-controls="aboutus">
                    <span><i class="ti ti-notepad"></i>About </span>
                </a>
                <ul id="aboutus" class="collapse" aria-labelledby="aboutus" data-bs-parent="#side-nav-accordion">
                    <li> <a href="{{route('aboutus-list')}}">About Us </a> </li>
                </ul>
            </li>


            <li class="menu-item">
                <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#donate" aria-expanded="false" aria-controls="donate">
                    <span><i class="ti ti-money"></i>Donate</span>
                </a>
                <ul id="donate" class="collapse" aria-labelledby="donate" data-bs-parent="#side-nav-accordion">
                    <li> <a href="{{route('donate-list')}}">Heading </a> </li>
                    <li> <a href="{{route('paymentmethod-list')}}">Payment Method</a> </li>
                </ul>
            </li>

{{--            <li class="menu-item">--}}
{{--                <a href="{{route('donate-list')}}">--}}
{{--                    <span>Donate</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="{{route('paymentmethod-list')}}">--}}
{{--                    <span>Payment-Method</span>--}}
{{--                </a>--}}
{{--            </li>--}}



{{--            <li class="menu-item">--}}
{{--                <a href="{{route('dataprotection-list')}}">--}}
{{--                    <span>Data Protection</span>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li class="menu-item">
                <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#dataprotection" aria-expanded="false" aria-controls="dataprotection">
                    <span><i class="ti ti-lock"></i>Data Protection</span>
                </a>
                <ul id="dataprotection" class="collapse" aria-labelledby="dataprotection" data-bs-parent="#side-nav-accordion">
                    <li> <a href="{{route('dataprotection-list')}}">Data Protection </a> </li>
                    <li> <a href="{{route('gdprcompliance-list')}}"> GDPR Compliance </a> </li>
                </ul>
            </li>




            <li class="menu-item">
                <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#cards&footer" aria-expanded="false" aria-controls="cards&footer">
                    <span><i class="ti ti-folder"></i>Cards And Footer</span>
                </a>
                <ul id="cards&footer" class="collapse" aria-labelledby="cards&footer" data-bs-parent="#side-nav-accordion">
                    <li> <a href="{{route('cards-list')}}">Cards</a> </li>
                    <li> <a href="{{route('footer-list')}}">footer</a> </li>
                </ul>
            </li>
{{--            <li class="menu-item">--}}
{{--                <a href="{{route('cards-list')}}">--}}
{{--                    <span>Cards</span>--}}
{{--                </a>--}}
{{--            </li>--}}



{{--            <li class="menu-item">--}}
{{--                <a href="{{route('footer-list')}}">--}}
{{--                    <span>Footer</span>--}}
{{--                </a>--}}
{{--            </li>--}}





        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>
