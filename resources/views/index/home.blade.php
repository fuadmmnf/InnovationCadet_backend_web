@extends('layouts.app')

@section('title', 'InnovationCadet-Home')

@section('content')
    <!-- Start Hero Section -->
    <section class="td_hero td_style_4 td_center text-center td_hobble">
        <div class="container">
            <div class="td_hero_text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <p class="td_hero_subtitle_up td_accent_color text-uppercase td_semibold td_fs_18 td_mb_10 td_opacity_9 td_spacing_1">
                    ইনোভেশন ক্যাডেট কোচিং, ঠাকুরগাঁও</p>
                <h1 class="td_hero_title td_fs_48 td_mb_20">ঠাকুরগাঁও জেলার প্রথম এবং একমাত্র ক্যাডেট কোচিং সেন্টার</h1>
                <p class="td_hero_subtitle td_fs_18 td_heading_color text-capitalize td_mb_40">We denounce with
                    righteous indignation and dislike men who are so beguiled and demoralized</p>
                <div class="td_btns_group">
                    <a href="courses-grid-view.html" class="td_btn td_style_1 td_radius_30 td_medium">
          <span class="td_btn_in td_white_color td_accent_bg">
            <span>Find Courses</span>
            <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"/>
              <path
                  d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                  stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
                    </a>
                    <div class="td_avatars_wrap">
                        <div class="td_avatars">
                            <div><img src="{{ asset('assets/img/avatar_1.png') }}" alt=""></div>
                            <div><img src="{{ asset('assets/img/avatar_2.png') }}" alt=""></div>
                            <div><img src="{{ asset('assets/img/avatar_3.png') }}" alt=""></div>
                            <div>
                                <img src="{{ asset('assets/img/avatar_3.png') }}" alt="">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="mb-0 td_fs_20 td_semibold">৩০০+ ছাত্র</h3>
                            <p class="mb-0 td_fs_18 td_opacity_6">Join Our Online Class</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="td_hero_img_box_left">
            <div class="td_hero_img_1 position-absolute wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.35s">
                <div class="td_hero_img_in">
                    <img src="{{ asset('assets/img/home_4/hero_img_1.png') }}" alt="">
                </div>
            </div>
            <div class="td_hero_img_2 position-absolute wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">
                <div class="td_hero_img_in">
                    <img src="{{ asset('assets/img/home_4/hero_img_2.png') }}" alt="">
                </div>
            </div>
            <div class="td_hero_shape_1 position-absolute td_hover_layer_5">
                <img src="{{ asset('assets/img/home_4/hero_shape_1.svg') }}" alt="">
            </div>
            <div class="td_hero_shape_2 position-absolute td_hover_layer_3">
                <img src="{{ asset('assets/img/home_4/hero_shape_2.svg') }}" alt="">
            </div>
            <div class="td_hero_shape_5 position-absolute">
                <img src="{{ asset('assets/img/home_4/hero_shape_5.svg') }}" alt="">
            </div>
        </div>
        <div class="td_hero_img_box_right">
            <div class="td_hero_img_3 position-absolute wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.35s">
                <div class="td_hero_img_in">
                    <img src="{{ asset('assets/img/home_4/hero_img_3.png') }}" alt="">
                </div>
            </div>
            <div class="td_hero_img_4 position-absolute wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">
                <div class="td_hero_img_in">
                    <img src="{{ asset('assets/img/home_4/hero_img_4.png') }}" alt="">
                </div>
            </div>
            <div class="td_hero_shape_3 position-absolute td_hover_layer_5">
                <img src="{{ asset('assets/img/home_4/hero_shape_3.svg') }}" alt="">
            </div>
            <div class="td_hero_shape_4 position-absolute td_hover_layer_3">
                <img src="{{ asset('assets/img/home_4/hero_shape_4.svg') }}" alt="">
            </div>
        </div>
        <div class="td_hero_shape_6 position-absolute td_hover_layer_3">
            <img src="{{ asset('assets/img/home_4/hero_shape_6.svg') }}" alt="">
        </div>
        <div class="td_hero_shape_7 position-absolute">
            <img src="{{ asset('assets/img/home_4/hero_shape_7.svg') }}" alt="">
        </div>
        <div class="td_hero_shape_8 position-absolute td_hover_layer_3">
            <img src="{{ asset('assets/img/home_4/hero_shape_8.svg') }}" alt="">
        </div>
        <div class="td_hero_shape_9 position-absolute">
            <img src="{{ asset('assets/img/home_4/hero_shape_9.svg') }}" alt="">
        </div>
        <div class="td_hero_shape_10 position-absolute td_hover_layer_5">
            <img src="{{ asset('assets/img/home_4/hero_shape_10.svg') }}" alt="">
        </div>
    </section>
    <!-- End Hero Section -->


    <!-- Start About Section -->
    <section class="td_shape_section_2">
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

    <!-- Start FAQs Section -->
    <div class="td_gray_bg_5 td_shape_section_4 td_hobble">
        <div class="td_shape td_shape_position_1 td_hover_layer_5">
            <img src="{{ asset('assets/img/home_4/faq_shape_5.svg') }}" alt="">
        </div>
        <div class="td_shape td_shape_position_2">
            <img src="{{ asset('assets/img/home_4/faq_shape_6.svg') }}" alt="">
        </div>
        <div class="td_shape td_shape_position_3 td_hover_layer_3">
            <img src="{{ asset('assets/img/home_4/faq_shape_7.svg') }}" alt="">
        </div>
        <div class="td_shape td_shape_position_4">
            <img src="{{ asset('assets/img/home_4/faq_shape_5.svg') }}" alt="">
        </div>
        <div class="td_height_112 td_height_lg_75"></div>
        <div class="container">
            <div class="row align-items-center td_gap_y_40">
                <div class="col-xl-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="td_section_heading td_style_1">
                        <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">
                            FREQUENTLY ASKED QUESTIONS
                        </p>
                        <h2 class="td_section_title td_fs_48 mb-0">We are The Best Kids School in City</h2>
                    </div>
                    <div class="td_height_50 td_height_lg_50"></div>
                    <div class="td_accordians td_style_1 td_type_1">
                        @foreach ($faqs as $faq)
                            <div class="td_accordian {{ $loop->first ? 'active' : '' }}">
                                <div class="td_accordian_head">
                                    <h2 class="td_accordian_title td_fs_20 td_medium">{{ $faq->question }}</h2>
                                    <span class="td_accordian_toggle">
                                    <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.355 9L7 3.43725L1.645 9L0 7.28745L7 -9.53674e-07L14 7.28745L12.355 9Z"
                                            fill="white"/>
                                    </svg>
                                </span>
                                </div>
                                <div class="td_accordian_body">
                                    <p>{{ $faq->answer }}</p>
                                </div>
                            </div><!-- .td_accordian -->
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="td_image_box td_style_9">
                        <div class="td_image_box_img_1">
                            <img src="{{ asset('assets/img/home_4/faq_img.png') }}" alt="">
                        </div>
                        <div class="td_image_box_shape_2 position-absolute td_hover_layer_3">
                            <img src="{{ asset('assets/img/home_4/faq_shape_1.svg') }}" alt="">
                        </div>
                        <div class="td_image_box_shape_3 position-absolute td_hover_layer_5">
                            <img src="{{ asset('assets/img/home_4/faq_shape_2.svg') }}" alt="">
                        </div>
                        <div class="td_image_box_shape_4 position-absolute td_hover_layer_3">
                            <img src="{{ asset('assets/img/home_4/faq_shape_3.svg') }}" alt="">
                        </div>
                        <div class="td_image_box_shape_5 position-absolute">
                            <img src="{{ asset('assets/img/home_4/faq_shape_4.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="td_height_120 td_height_lg_80"></div>
    </div>
    <!-- End FAQs Section -->


    <!-- Start Testimonials Section -->
    <section class="td_shape_section_7 td_hobble">
        <div class="td_shape_position_1 position-absolute td_hover_layer_3">
            <img src="{{ asset('assets/img/home_2/testimonial_shape_1.svg') }}" alt="">
        </div>
        <div class="td_shape_position_2 position-absolute td_hover_layer_5">
            <img src="{{ asset('assets/img/home_2/testimonial_shape_2.svg') }}" alt="">
        </div>
        <div class="td_shape_position_3 position-absolute td_hover_layer_3">
            <img src="{{ asset('assets/img/home_2/testimonial_shape_3.svg') }}" alt="">
        </div>
        <div class="td_shape_position_4 position-absolute td_hover_layer_5">
            <img src="{{ asset('assets/img/home_2/testimonial_shape_4.svg') }}" alt="">
        </div>
        <div class="td_height_112 td_height_lg_75"></div>
        <div class="container">
            <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s"
                 data-wow-delay="0.2s">
                <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">
                    <i></i>
                    Testimonials
                    <i></i>
                </p>
                <h2 class="td_section_title td_fs_48 mb-0">What Our Students Say About <br>Our Online Services</h2>
                <p class="td_section_subtitle td_fs_18 mb-0">Far far away, behind the word mountains, far from the
                    Consonantia, there live <br>the blind texts. Separated they marks grove</p>
            </div>
            <div class="td_height_50 td_height_lg_50"></div>
            <div class="td_slider td_style_1 td_slider_gap_24 td_remove_overflow wow fadeInUp" data-wow-duration="1s"
                 data-wow-delay="0.3s">
                <div class="td_slider_container" data-autoplay="0" data-loop="1" data-speed="800" data-center="0"
                     data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
                     data-md-slides="2" data-lg-slides="2" data-add-slides="2">
                    <div class="td_slider_wrapper">
                        @foreach ($customerReviews as $review)
                            <div class="td_slide">
                                <div class="td_testimonial td_style_1 td_type_1 td_white_bg td_radius_5">
                                <span class="td_quote_icon td_accent_color">
                                    <svg width="65" height="46" viewBox="0 0 65 46" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                      <path opacity="0.05"
                                            d="M13.9286 26.6H1V1H26.8571V27.362L17.956 45H6.26764L14.8213 28.0505L15.5534 26.6H13.9286ZM51.0714 26.6H38.1429V1H64V27.362L55.0988 45H43.4105L51.9642 28.0505L52.6962 26.6H51.0714Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </span>
                                    <div class="td_testimonial_meta td_mb_24">
                                        <img src="{{ asset($review['img']) }}" alt="Reviewer Image">
                                        <div class="td_testimonial_meta_right">
                                            <h3 class="td_fs_24 td_semibold td_mb_2">{{ $review['name'] }}</h3>
                                            <p class="td_fs_14 mb-0 td_heading_color td_opacity_7">{{ $review['designation'] }}</p>
                                        </div>
                                    </div>
                                    <blockquote
                                        class="td_testimonial_text td_fs_20 td_medium td_heading_color td_mb_24 td_opacity_9">
                                        {{ $review['review'] }}
                                    </blockquote>
                                    <div class="td_rating" data-rating="{{ $review['rating'] }}">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="{{ $i <= $review['rating'] ? 'fa-solid fa-star fa-fw' : 'fa-regular fa-star fa-fw' }}"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="td_height_50 td_height_lg_40"></div>
                <div class="td_pagination td_style_1"></div>
            </div>
        </div>
        <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Testimonials Section -->



    <!-- Start Team Section -->
    <section>
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
