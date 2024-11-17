@extends('layouts.app')

@section('title', 'InnovationCadet-Contact Us')

@section('content')
    <!-- Start Contact Section -->
    <section>
        <div class="td_height_120 td_height_lg_80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-10 offset-xxl-1">
                    <div class="row align-items-center td_gap_y_40">
                        <div class="col-lg-7">
                            <img src="{{asset('assets/img/others/contact_img.jpg')}}" alt="" class="w-100">
                        </div>
                        <div class="col-xl-4 offset-xl-1 col-lg-5">
                            <div class="td_contact_info">
                                <div class="td_section_heading td_style_2 td_mb_20">
                                    <h2 class="td_contact_info_title td_fs_36 mb-0">Our Office Address</h2>
                                </div>
                                <div class="td_mb_40">
                                    <h2 class="td_fs_24 td_semibold td_mb_20">USA Campus</h2>
                                    <p class="td_fs_18 td_heading_color td_medium td_mb_10">100 Wilshire Blvd, Suite 700
                                        Santa Monica, CA 90401, USA</p>
                                    <p class="td_fs_18 td_heading_color td_medium td_mb_10 td_opacity_7">
                                        <a href="tel:+1(310)620-8565">+1 (310) 620-8565</a>
                                    </p>
                                    <p class="td_fs_18 td_heading_color td_medium mb-0 td_opacity_7">
                                        <a href="mailto:info@gmail.com">info@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="td_height_120 td_height_lg_80"></div>
        <div class="td_map">
            <iframe id="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd"
                    allowfullscreen=""></iframe>
        </div>
    </section>
    <!-- End Contact Section -->

@endsection
