@extends('layouts.app')

@section('title', 'InnovationCadet-Courses')

@section('content')
    <!-- Start Popular Courses Section -->
    <section class="td_gray_bg_7 td_shape_section_3">
        <div class="td_shape td_shape_position_1">
            <img src="{{ asset('assets/img/home_4/course_shape_1.svg') }}" alt="">
        </div>
        <div class="td_shape td_shape_position_2">
            <img src="{{ asset('assets/img/home_4/course_shape_2.svg') }}" alt="">
        </div>
        <div class="td_shape td_shape_position_3">
            <img src="{{ asset('assets/img/home_4/course_shape_3.svg') }}" alt="">
        </div>
        <div class="td_shape td_shape_position_4"></div>
        <div class="td_height_112 td_height_lg_75"></div>
        <div class="container">
            <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s"
                 data-wow-delay="0.2s">
                <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">
                    Popular Courses
                </p>
                <h2 class="td_section_title td_fs_48 mb-0">Academic Courses</h2>
            </div>
            <div class="td_height_50 td_height_lg_50"></div>
            <div class="row td_gap_y_30">
                @foreach($courses as $course)
                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                        <div class="td_card td_style_3 td_type_1 d-block td_radius_10">
                            <a href="#" class="td_card_thumb">
                                <img
                                    src="{{ $course->image ? asset(''.$course->image) : asset('assets/img/default-course-image.jpg') }}"
                                    alt="">
                            </a>
                            <div class="td_card_info">
                                <div class="td_card_info_in">
                                    <a href="#"
                                       class="td_card_category td_fs_14 td_semibold td_heading_color td_mb_14">
                                        <span>Pre School</span>
                                    </a>
                                    <h2 class="td_card_title td_fs_24 td_mb_16">
                                        <a href="#">{{ $course->course_title }}</a>
                                    </h2>
                                    <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">
                                        {{ Str::limit($course->course_des, 100) }}...
                                    </p>
                                    <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                                        <li>
                                            <img src="{{ asset('assets/img/icons/user_3.svg') }}" alt="">
                                            <span class="td_opacity_7">{{ $course->sheet_amount }} Seats</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/icons/book.svg') }}" alt="">
                                            <span class="td_opacity_7">{{ $course->duration }} Semesters</span>
                                        </li>
                                    </ul>
                                    <div class="td_card_btn">
                                        <a href="#" class="td_btn td_style_1 td_radius_30 td_medium">
                                        <span class="td_btn_in td_white_color td_accent_bg">
                                            <span>Enroll Now</span>
                                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor"
                                                      stroke-width="1.5" stroke-linecap="round"
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
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="td_height_50 td_height_lg_40"></div>
            <div class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <a href="{{route('courses')}}" class="td_btn td_style_3 td_medium td_heading_color td_fs_18">
                    <span>See all Courses</span>
                    <i>
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 6L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M12 11C12 11 17 7.31756 17 5.99996C17 4.68237 12 1 12 1" stroke="currentColor"
                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </i>
                </a>
            </div>
        </div>
        <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Popular Courses Section -->

@endsection
