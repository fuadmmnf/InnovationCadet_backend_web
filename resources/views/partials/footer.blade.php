<footer class="td_footer td_style_1 td_type_1 td_color_1">
    <div class="container">
        <div class="td_footer_row">
            <div class="td_footer_col">
                <div class="td_footer_widget">
                    <div class="td_footer_text_widget td_fs_18">
                        <img class="footer-logo" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <p>{{ $siteContact->address ?? 'Far far away, behind the word mountains, far from the Consonantia, there live the blind texts.' }}</p>
                    </div>
                    <div class="td_footer_social_btns td_fs_20">
                        @if($siteContact)
                            @if($siteContact->facebook)
                                <a href="{{ $siteContact->facebook }}" class="td_center" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            @endif
                            @if($siteContact->twitter)
                                <a href="{{ $siteContact->twitter }}" class="td_center" target="_blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            @endif
                            @if($siteContact->instagram)
                                <a href="{{ $siteContact->instagram }}" class="td_center" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            @endif
                            @if($siteContact->youtube)
                                <a href="{{ $siteContact->youtube }}" class="td_center" target="_blank">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <div class="td_footer_col">
                <div class="td_footer_widget">
                    <h2 class="td_footer_widget_title td_fs_32 td_white_color td_medium td_mb_30">মেনু বার</h2>
                    <ul class="td_footer_widget_menu">
                        <li><a href="{{ route('home') }}">হোম</a></li>
                        <li><a href="{{ route('about') }}">আমাদের সম্পর্কে</a></li>
                        <li><a href="{{ route('contact-us') }}">যোগাযোগ</a></li>
                    </ul>
                </div>
            </div>
            <div class="td_footer_col">
                <div class="td_footer_widget">
                    <h2 class="td_footer_widget_title td_fs_32 td_white_color td_medium td_mb_30">অন্যান্য</h2>
                    <ul class="td_footer_widget_menu">
                        <li><a href="{{ route('courses') }}">কোর্স সমূহ</a></li>
                        <li><a href="{{ route('teachers') }}">শিক্ষক তালিকা</a></li>
                        <li><a href="{{ route('student-registration') }}">ছাত্র রেজিস্ট্রেশন</a></li>
                    </ul>
                </div>
            </div>
            <div class="td_footer_col">
                <div class="td_footer_widget">
                    <h2 class="td_footer_widget_title td_fs_32 td_white_color td_medium td_mb_30">যোগাযোগ করুন</h2>
                    <ul class="td_footer_address_widget td_medium td_mp_0">
                        @if($siteContact && $siteContact->phone)
                            <li><i class="fa-solid fa-phone-volume"></i>
                                <a href="tel:{{ $siteContact->phone }}">{{ $siteContact->phone }}</a>
                            </li>
                        @endif
                        @if($siteContact && $siteContact->email)
                            <li><i class="fa-solid fa-envelope"></i>
                                <a href="mailto:{{ $siteContact->email }}">{{ $siteContact->email }}</a>
                            </li>
                        @endif
                        @if($siteContact && $siteContact->address)
                            <li><i class="fa-solid fa-location-dot"></i>
                                {{ $siteContact->address }}
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="td_footer_bottom td_fs_18">
        <div class="container">
            <div class="td_footer_bottom_in">
                <p class="td_copyright mb-0">Developed By:
                    <a href="https://innovatechbd.net/">Innova Tech Bangladesh</a>
                </p>
            </div>
        </div>
    </div>
</footer>
