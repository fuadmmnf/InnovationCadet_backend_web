@extends('layouts.app')

@section('title', 'InnovationCadet-Student Registration')

@section('content')
    <!-- Start Students Register Section -->
    <section class="mt-5">
        <div class="td_height_120 td_height_lg_80"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="td_form_card td_style_1 td_radius_10 td_gray_bg_5">
                        <div class="td_form_card_in">
                            <h2 class="td_fs_36 td_mb_20 text-uppercase td_mb_16">Students Registration</h2>
                            <h3 class="td_fs_24 td_medium td_opacity_9 td_mb_32">Fields marked with * are required</h3>
                            <p class="td_fs_18 td_heading_color td_opacity_7 td_mb_40">
                                Fill out the form below to create your account.
                            </p>

                            <!-- Success Message -->
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <!-- Registration Form -->
                            <form action="{{ route('students.store') }}" method="POST">
                                @csrf <!-- CSRF Token for security -->

                                <!-- Name -->
                                <label class="td_medium td_heading_color td_mb_12">Full Name *</label>
                                <input type="text" name="name" class="td_form_field td_mb_30 td_medium td_white_bg"
                                       value="{{ old('name') }}">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <!-- Father's Name -->
                                <label class="td_medium td_heading_color td_mb_12">Father's Name</label>
                                <input type="text" name="father_name"
                                       class="td_form_field td_mb_30 td_medium td_white_bg"
                                       value="{{ old('father_name') }}">
                                @error('father_name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <!-- Email -->
                                <label class="td_medium td_heading_color td_mb_12">Email Address *</label>
                                <input type="email" name="email" class="td_form_field td_mb_30 td_medium td_white_bg"
                                       value="{{ old('email') }}">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <!-- Phone -->
                                <label class="td_medium td_heading_color td_mb_12">Phone *</label>
                                <input type="text" name="phone" class="td_form_field td_mb_30 td_medium td_white_bg"
                                       value="{{ old('phone') }}">
                                @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <!-- School -->
                                <label class="td_medium td_heading_color td_mb_12">School</label>
                                <input type="text" name="school" class="td_form_field td_mb_30 td_medium td_white_bg"
                                       value="{{ old('school') }}">
                                @error('school')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <!-- Submit Button -->
                                <button type="submit" class="td_btn td_style_1 td_radius_10 td_medium w-100 td_fs_20">
                                    <span class="td_btn_in td_white_color td_accent_bg">
                                        <span>Register</span>
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
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Students Register Section -->
@endsection
