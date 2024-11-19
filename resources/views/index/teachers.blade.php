@extends('layouts.app')

@section('title', 'InnovationCadet-Teachers')

@section('content')

    <!-- Start Team Section -->
    <section class="mt-5">
        <div class="td_height_112 td_height_lg_75"></div>
        <div class="container">
            <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s"
                 data-wow-delay="0.2s">
                <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">
                    WE CHANGE YOUR LIFE & WORLD</p>
                <h2 class="td_section_title td_fs_48 mb-0">We’re Dedicated To Excellent <br>Service And Kids Care</h2>
            </div>
            <div class="td_height_50 td_height_lg_50"></div>
            <div class="row td_gap_y_24">
                @foreach($teachers as $teacher)
                    <!-- Loop through the teachers -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="td_team td_style_3 text-center position-relative">
                            <div class="td_team_thumb_wrap td_mb_20">
                                <div class="td_team_thumb">
                                    <img src="{{ asset('' . $teacher->image) }}" alt="{{ $teacher->name }}"
                                         class="w-100 td_radius_10">
                                </div>
                                <img class="td_team_thumb_shape" src="{{ asset('assets/img/home_4/team_shape.png') }}"
                                     alt="">
                            </div>
                            <div class="td_team_info td_white_bg">
                                <h3 class="td_team_member_title td_fs_24 td_semibold mb-0">{{ $teacher->name }}</h3>
                                <p class="td_team_member_designation mb-0 td_fs_18 td_opacity_7 td_heading_color">{{ $teacher->course }}
                                <p class="td_team_member_designation mb-0 td_fs_18 td_opacity_7 td_heading_color">{{ $teacher->designation }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="td_height_50 td_height_lg_50"></div>
            <div class="td_team_3_footer text_center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <b class="td_fs_18 td_normal td_fs_18 td_heading_color">Our Valuable Expert Teachers Team</b>
                <a href="{{route('teachers')}}" class="td_btn td_style_1 td_radius_30 td_medium">
                <span class="td_btn_in td_white_color td_accent_bg">
                    <span>See All Team</span>
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        <path
                            d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </span>
                </a>
            </div>
        </div>
        <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Team Section -->

@endsection
