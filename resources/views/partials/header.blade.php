<header class="td_site_header td_style_1 td_type_1 td_sticky_header td_medium td_heading_color">
    <div class="td_main_header">
        <div class="container">
            <div class="td_main_header_in">
                <div class="td_main_header_left">
                    <a class="td_site_branding" href="{{route('home')}}">
                        <img class="header-logo" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="td_main_header_right">
                    <nav class="td_nav">
                        <div class="td_nav_list_wrap">
                            <div class="td_nav_list_wrap_in">
                                <ul class="td_nav_list">
                                    <li><a href="{{route('home')}}">হোম</a></li>
                                    <li><a href="{{route('about')}}">আমাদের সম্পর্কে</a></li>
                                    <li><a href="{{route('courses')}}">কোর্স সমূহ</a></li>
                                    <li><a href="{{route('teachers')}}">শিক্ষক তালিকা</a></li>
                                    <li><a href="{{route('contact-us')}}">যোগাযোগ</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="position-relative">
                        <button class="td_circle_btn td_center td_search_tobble_btn" type="button">
                            <img src="{{ asset('assets/img/icons/search.svg') }}" alt="">
                        </button>
                        <div class="td_header_search_wrap">
                            <form action="#" class="td_header_search">
                                <input type="text" class="td_header_search_input" placeholder="Search For Anything">
                                <button class="td_header_search_btn td_center">
                                    <img src="{{ asset('assets/img/icons/search_2.svg') }}" alt="">
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="td_hero_toolbox_wrap">
                        <a href="{{route('student-registration')}}" class="td_btn td_style_1 td_radius_30 td_medium">
                          <span class="td_btn_in td_white_color td_accent_bg">
                            <span>ছাত্র রেজিস্ট্রেশন</span>
                          </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
