@extends('layouts.app')

@section('title', 'InnovationCadet-About')

@section('content')
    <!-- Start About Section -->
    <section class="td_shape_section_2 mt-5">
        <div class="td_shape td_shape_position_1 td_accent_color">
            <svg xmlns="http://www.w3.org/2000/svg" width="51" height="37" viewBox="0 0 51 37" fill="none">
                <path opacity="0.51" d="M1.76764 36.4103L25.5 1.81671L49.2324 36.4103H1.76764Z" stroke="currentColor"/>
            </svg>
        </div>
        <div class="td_shape td_shape_position_2">
            <img src="{{ asset('assets/img/home_4/about_shape_2.svg') }}" alt="">
        </div>
        <div class="td_shape td_shape_position_3">
            <img src="{{ asset('assets/img/home_4/about_shape_3.svg') }}" alt="">
        </div>
        <div class="td_shape td_shape_position_4">
            <img src="{{ asset('assets/img/home_4/about_shape_4.svg') }}" alt="">
        </div>
        <div class="td_shape td_shape_position_5"></div>
        <div class="td_height_120 td_height_lg_80"></div>
        <div class="container">
            <div class="row align-items-center td_gap_y_40">
                <div class="col-xl-6">
                    <div class="td_image_box td_style_5">
                        <div class="td_image_box_img_1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <img src="{{ asset('assets/img/home_4/about_img_1.png') }}" alt="">
                        </div>
                        <div class="td_image_box_img_2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <img src="{{ asset('assets/img/home_4/about_img_2.png') }}" alt="">
                        </div>
                        <div class="td_image_box_circle wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="td_image_box_circle_in td_center">
                                <img src="{{ asset('assets/img/home_4/about_img_circle_text_icon.svg') }}" alt=""
                                     class="td_image_box_circle_icon">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="td_image_box_circle_text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="td_section_heading td_style_1 td_mb_30">
                        <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">
                            About us</p>
                        <h2 class="td_section_title td_fs_48 td_mb_30">We are Always Best Course For your Learning </h2>
                        <p class="td_section_subtitle td_fs_18 mb-0">Far far away, behind the word mountains, far from
                            the Consonantia, there live the blind texts. Separated they marks grove right at the coast
                            of the Semantics a large language ocean</p>
                    </div>
                    <div class="td_mb_40">
                        <ul class="td_list td_style_4 td_mp_0">
                            <li>
                                <div class="td_list_icon td_center">
                                    <div class="td_list_icon_icon_in td_center">
                                        <img src="{{ asset('assets/img/home_4/about_icon_1.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="td_list_right">
                                    <h3 class="td_fs_20 td_semibold td_mb_2">সেরা শিক্ষকমণ্ডলী</h3>
                                    <p class="mb-0 td_fs_14 td_heading_color">Dislike men who are so and demoralized</p>
                                </div>
                            </li>
                            <li>
                                <div class="td_list_icon td_center">
                                    <div class="td_list_icon_icon_in td_center">
                                        <img src="{{ asset('assets/img/home_4/about_icon_2.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="td_list_right">
                                    <h3 class="td_fs_20 td_semibold td_mb_2">শহরের প্রাণকেন্দ্রে</h3>
                                    <p class="mb-0 td_fs_14 td_heading_color">Dislike men who are so and demoralized</p>
                                </div>
                            </li>
                            <li>
                                <div class="td_list_icon td_center">
                                    <div class="td_list_icon_icon_in td_center">
                                        <img src="{{ asset('assets/img/home_4/about_icon_3.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="td_list_right">
                                    <h3 class="td_fs_20 td_semibold td_mb_2">সাপ্তাহিক মূল্যায়ন</h3>
                                    <p class="mb-0 td_fs_14 td_heading_color">Dislike men who are so and demoralized</p>
                                </div>
                            </li>
                            <li>
                                <div class="td_list_icon td_center">
                                    <div class="td_list_icon_icon_in td_center">
                                        <img src="{{ asset('assets/img/home_4/about_icon_1.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="td_list_right">
                                    <h3 class="td_fs_20 td_semibold td_mb_2">২৪/৭ সাপোর্ট</h3>
                                    <p class="mb-0 td_fs_14 td_heading_color">Dislike men who are so and demoralized</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="{{route('about')}}" class="td_btn td_style_1 td_radius_10 td_medium">
          <span class="td_btn_in td_white_color td_accent_bg">
            <span>More About </span>
            <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
              <path
                  d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                  stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End About Section -->

@endsection
