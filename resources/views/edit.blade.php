@extends('layouts.app')

@section('content')


<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    a {
        background-color: transparent
    }

    [hidden] {
        display: none
    }

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    svg,
    video {
        display: none;
        vertical-align: middle
    }

    video {
        max-width: 100%;
        height: auto
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
        --border-opacity: 1;
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .font-semibold {
        font-weight: 600
    }

    .h-5 {
        height: 1.25rem
    }

    .h-8 {
        height: 2rem
    }

    .h-16 {
        height: 4rem
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 1.125rem
    }

    .leading-7 {
        line-height: 1.75rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .ml-1 {
        margin-left: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mr-2 {
        margin-right: .5rem
    }

    .ml-2 {
        margin-left: .5rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .ml-12 {
        margin-left: 3rem
    }

    .-mt-px {
        margin-top: -1px
    }

    .max-w-6xl {
        max-width: 72rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .overflow-hidden {
        overflow: hidden
    }

    .p-6 {
        padding: 1.5rem
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .pt-8 {
        padding-top: 2rem
    }

    .fixed {
        position: fixed
    }

    .relative {
        position: relative
    }

    .top-0 {
        top: 0
    }

    .right-0 {
        right: 0
    }

    .shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
        text-align: center
    }

    .text-gray-200 {
        --text-opacity: 1;
        color: #edf2f7;
        color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
        --text-opacity: 1;
        color: #e2e8f0;
        color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
        --text-opacity: 1;
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
        --text-opacity: 1;
        color: #718096;
        color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
        --text-opacity: 1;
        color: #4a5568;
        color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
        --text-opacity: 1;
        color: #1a202c;
        color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
        text-decoration: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
        width: 1.25rem
    }

    .w-8 {
        width: 2rem
    }

    .w-auto {
        width: auto
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:block {
            display: block
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:h-20 {
            height: 5rem
        }

        .sm\:ml-0 {
            margin-left: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:text-left {
            text-align: left
        }

        .sm\:text-right {
            text-align: right
        }
    }

    @media (min-width:768px) {
        .md\:border-t-0 {
            border-top-width: 0
        }

        .md\:border-l {
            border-left-width: 1px
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width:1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (prefers-color-scheme:dark) {
        .dark\:bg-gray-800 {
            --bg-opacity: 1;
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--bg-opacity))
        }

        .dark\:bg-gray-900 {
            --bg-opacity: 1;
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--bg-opacity))
        }

        .dark\:border-gray-700 {
            --border-opacity: 1;
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--border-opacity))
        }

        .dark\:text-white {
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity))
        }

        .dark\:text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .dark\:text-gray-500 {
            --tw-text-opacity: 1;
            color: #6b7280;
            color: rgba(107, 114, 128, var(--tw-text-opacity))
        }
    }
    </style>

    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }

    h1.reg_h1 {
        margin: 0;
        padding: 20px;
    }

    p.note_text {
        text-align: left;
    }

    .reg_form_system {
        width: 60%;
        margin: 0 auto;
    }

    .guest {
        display: none;
    }

    .site_logos .site_logo_Inner {
        display: inline-block !important;
        align-items: center;
        width: auto;
        text-align: left !important;
    }

    .site_logos {
        text-align: center !important;
        margin: 0 auto !important;
        justify-content: center;
        align-content: center;
        align-items: center;
    }

    .site_logos .site_logo_Inner img {
        width: 100px;
    }

    .site_logos .site_logo_Inner h3,
    .site_logos .site_logo_Inner h4 {
        margin: 0;
    }

    @media only screen and (max-width: 992px) {
        .reg_form_system {
            width: 100%;
            margin: 0 auto;
        }

        .site_logo_Inner.text-left {
            text-align: center !important;
        }
    }
    </style>

    <link rel="icon" type="image/x-icon" href="{{asset('dashboard/assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/css/core.css')}}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/css/theme-default.css')}}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('dashboard/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('dashboard/assets/js/config.js')}}"></script>

</head>
</head>

<body class="antialiased">

    {{-- <div class="container-fluid navbar-light bg-light">
        <div class="row">
            <div class="com-md-12">
                <nav class="container navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="{{asset('logo/'.'CGHS.png')}}" alt="" width="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">







        </ul>
        <div class="d-flex">
            @if (Route::has('login'))
            <div class="top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
    </div>
    </nav>
    </div>
    </div>
    </div> --}}

    <div class="items-top justify-center min-h-screen bg-gray-100 ">


        <div>
            <div class="container  text-center top_logo_section">
                <div class="row site_logos pt-3 pb-5">
                    <div class="site_logo_Inner ">
                        <img src="{{asset('logo/'.'CGHS.png')}}" alt="" width="">
                        {{-- <p>Chakaria Government High School <br> Programs & Events - 2024</p>
                        <span> Chakaria Government High School <br> Programs & Events - 2024</span>                         --}}
                    </div>
                    <div class="site_logo_Inner text-left">

                        <h3>Chakaria Government High School</h3>
                        <h4>Programs & Events - 2024</h4>
                    </div>

                </div>
            </div>
            <h5 class="text-center reg_h1" style="">Registration Update Form</h5>



            <div class="card-body reg_form_system">
                <form action="{{route('dashboardList.update',$editData->reg_id)}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name"> Name <sapn class="text-danger">
                                *</sapn></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="subcategory_name" name="graduated_name"
                                value="{{$editData->graduated_name}}" placeholder="Graduated Name"
                                class="@error('graduated_name') is-invalid @enderror" value="{{old('graduated_name')}}"
                                required />
                            @error('graduated_name')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Batch <sapn class="text-danger">
                                *</sapn></label>
                        <div class="col-sm-10">

                            <select class="form-select" id="batch" name="batch" placeholder="Select Your Batch" required
                                class="@error('batch') is-invalid @enderror" value="{{old('batch')}}">
                                <option selected disabled value=""> Select Your Batch</option>
                                <option @if($editData->batch=='no batch') selected @endif value="no batch">No batch
                                </option>
                                <option @if($editData->batch=='1980') selected @endif value="1980">1980</option>
                                <option @if($editData->batch=='1981') selected @endif value="1981">1981</option>
                                <option @if($editData->batch=='1982') selected @endif value="1982">1982</option>
                                <option @if($editData->batch=='1983') selected @endif value="1983">1983</option>
                                <option @if($editData->batch=='1984') selected @endif value="1984">1984</option>
                                <option @if($editData->batch=='1985') selected @endif value="1985">1985</option>
                                <option @if($editData->batch=='1986') selected @endif value="1986">1986</option>
                                <option @if($editData->batch=='1987') selected @endif value="1987">1987</option>
                                <option @if($editData->batch=='1988') selected @endif value="1988">1988</option>
                                <option @if($editData->batch=='1989') selected @endif value="1989">1989</option>
                                <option @if($editData->batch=='1990') selected @endif value="1990">1990</option>
                                <option @if($editData->batch=='1991') selected @endif value="1991">1991</option>
                                <option @if($editData->batch=='1992') selected @endif value="1992">1992</option>
                                <option @if($editData->batch=='1993') selected @endif value="1993">1993</option>
                                <option @if($editData->batch=='1994') selected @endif value="1994">1994</option>
                                <option @if($editData->batch=='1995') selected @endif value="1995">1995</option>
                                <option @if($editData->batch=='1996') selected @endif value="1996">1996</option>
                                <option @if($editData->batch=='1997') selected @endif value="1997">1997</option>
                                <option @if($editData->batch=='1998') selected @endif value="1998">1998</option>
                                <option @if($editData->batch=='1999') selected @endif value="1999">1999</option>
                                <option @if($editData->batch=='2000') selected @endif value="2000">2000</option>
                                <option @if($editData->batch=='2001') selected @endif value="2001">2001</option>
                                <option @if($editData->batch=='2002') selected @endif value="2002">2002</option>
                                <option @if($editData->batch=='2003') selected @endif value="2003">2003</option>
                                <option @if($editData->batch=='2004') selected @endif value="2004">2004</option>
                                <option @if($editData->batch=='2005') selected @endif value="2005">2005</option>
                                <option @if($editData->batch=='2006') selected @endif value="2006">2006</option>
                                <option @if($editData->batch=='2007') selected @endif value="2007">2007</option>
                                <option @if($editData->batch=='2008') selected @endif value="2008">2008</option>
                                <option @if($editData->batch=='2009') selected @endif value="2009">2009</option>
                                <option @if($editData->batch=='2010') selected @endif value="2010">2010</option>
                                <option @if($editData->batch=='2011') selected @endif value="2011">2011</option>
                                <option @if($editData->batch=='2012') selected @endif value="2012">2012</option>
                                <option @if($editData->batch=='2013') selected @endif value="2013">2013</option>
                                <option @if($editData->batch=='2014') selected @endif value="2014">2014</option>
                                <option @if($editData->batch=='2015') selected @endif value="2015">2015</option>
                                <option @if($editData->batch=='2016') selected @endif value="2016">2016</option>
                                <option @if($editData->batch=='2017') selected @endif value="2017">2017</option>
                                <option @if($editData->batch=='2018') selected @endif value="2018">2018</option>
                                <option @if($editData->batch=='2019') selected @endif value="2019">2019</option>
                                <option @if($editData->batch=='2020') selected @endif value="2020">2020</option>
                                <option @if($editData->batch=='2021') selected @endif value="2021">2021</option>
                                <option @if($editData->batch=='2022') selected @endif value="2022">2022</option>
                                <option @if($editData->batch=='2023') selected @endif value="2023">2023</option>
                            </select>
                            @error('batch')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Mobile No <sapn
                                class="text-danger">*</sapn></label>
                        <div class="col-sm-10">
                            <input type="text" required class="form-control" id="mobile_number" name="mobile_number"
                                placeholder="Mobile Number" placeholder="Select your batch"
                                value="{{$editData->mobile_number}}"
                                class="@error('mobile_number') is-invalid @enderror" value="{{old('mobile_number')}}" />
                            @error('mobile_number')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Address <sapn
                                class="text-danger">*</sapn></label>
                        <div class="col-sm-10">
                            <input type="text" required class="form-control" id="address" name="address"
                                placeholder="Address" value="{{$editData->address}}"
                                class="@error('address')  is-invalid @enderror" value="{{old('address')}}" />
                            @error('address')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Blood Group <sapn
                                class="text-danger">*</sapn></label>
                        <div class="col-sm-10">

                            <select class="form-select" id="blood_group" name="blood_group" required
                                placeholder="Blood Group" class="@error('blood_group') is-invalid @enderror"
                                value="{{old('blood_group')}}">
                                <option selected disabled value="">
                                    Select Your Blood Group
                                </option>
                                <option @if($editData->blood_group=='O(+)') selected @endif value="O(+)">O(+)</option>
                                <option @if($editData->blood_group=='O(-)') selected @endif value="O(-)">O(-)</option>
                                <option @if($editData->blood_group=='A(+)') selected @endif value="A(+)">A(+)</option>
                                <option @if($editData->blood_group=='A(-)') selected @endif value="A(-)">A(-)</option>
                                <option @if($editData->blood_group=='B(+)') selected @endif value="B(+)">B(+)</option>
                                <option @if($editData->blood_group=='B(-)') selected @endif value="B(-)">B(-)</option>
                                <option @if($editData->blood_group=='AB(+)') selected @endif value="AB(+)">AB(+)
                                </option>
                                <option @if($editData->blood_group=='AB(-)') selected @endif value="AB(-)">AB(-)
                                </option>
                            </select>
                            @error('blood_group')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">T-Shirt Size <sapn
                                class="text-danger">*</sapn></label>
                        <div class="col-sm-10">

                            <select class="form-select" id="t-shirt" name="t_shirt" required placeholder="T-Shirt Size"
                                class="@error('t_shirt') is-invalid @enderror" value="{{old('t_shirt')}}">
                                <option value="{{$editData->t_shirt}}" selected>{{$editData->t_shirt}}</option>
                                <option value="M= Chest: 38 inc & Length: 26.5 inc">M= Chest: 38 inc & Length: 26.5 inc
                                </option>
                                <option value="L= Chest: 40 inc & Length: 27.5 inc">L= Chest: 40 inc & Length: 27.5 inc
                                </option>
                                <option value="XL= Chest: 42 inc & Length: 28.5 inc">XL= Chest: 42 inc & Length: 28.5
                                    inc
                                </option>
                                <option value="XXL= Chest: 44 inc & Length: 29.5 inc">XXL= Chest: 44 inc & Length: 29.5
                                    inc
                                </option>
                                @error('t_shirt')
                                <strong class=" text-danger">{{ $message }}</strong>
                                @enderror

                            </select>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Profession <sapn
                                class="text-danger">*</sapn></label>
                        <div class="col-sm-10">

                            <select class="form-select" id="profession" required name="profession"
                                placeholder="Profession" class="@error('profession') is-invalid @enderror"
                                value="{{old('profession')}}">
                                <option selected disabled>Select Your Profession</option>
                                <option @if($editData->profession=='businessman') selected @endif
                                    value="businessman">Businessman</option>
                                <option @if($editData->profession=='doctor') selected @endif value="doctor">Doctor
                                </option>
                                <option @if($editData->profession=='engineer') selected @endif value="engineer">Engineer
                                </option>
                                <option @if($editData->profession=='advocate') selected @endif value="advocate">Advocate
                                </option>
                                <option @if($editData->profession=='job holder(govt)') selected @endif value="job
                                    holder(govt)">Job Holder(Govt)</option>
                                <option @if($editData->profession=='job holder (private)') selected @endif value="job
                                    holder (private)">Job Holder (Private)</option>
                                <option @if($editData->profession=='teacher') selected @endif value="teacher">Teacher
                                </option>
                                <option @if($editData->profession=='others') selected @endif value="others">Others
                                </option>

                            </select>
                            @error('profession')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Name of profession
                            institute</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="profession_institute"
                                value="{{$editData->profession_institute}}" name="profession_institute"
                                placeholder="Profession Institute Name" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Name of designation</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="designation" name="designation"
                                value="{{$editData->designation}}" placeholder="Designation" />
                        </div>
                    </div>
                    <div class="row mb-3" class="btn-group">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Guest</label>
                        <div class="col-sm-10 text-right">

                            <div class='guest'>
                                <input type="radio" checked name="guest" value="0">0
                            </div>

                            <div class="btn-group" data-toggle="buttons">
                                <label id='RADIO' class="btn btn-primary">
                                    <input type="radio" name="guest" @if($editData->guest==0) checked="checked" @endif
                                    value="0">None
                                </label>
                                <label id='RADIO' class="btn btn-primary">
                                    <input type="radio" name="guest" @if($editData->guest==1) checked="checked" @endif
                                    value="1">1
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="guest" @if($editData->guest==2) checked="checked" @endif
                                    value="2">2
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="guest" @if($editData->guest==3) checked="checked" @endif
                                    value="3">3
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="guest" @if($editData->guest==4) checked="checked" @endif
                                    value="4">4
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="guest" @if($editData->guest==5) checked="checked" @endif
                                    value="5">5
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Registration Fee </label>
                        <div class="col-sm-10">
                            <p class='note_text'>1020</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Family Member (per
                            person)</label>
                        <div class="col-sm-10">
                            <p class='note_text'>700 <sapn class='text-danger'>(t-shirt not included) *</sapn>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Total</label>
                        <div class="col-sm-10">
                            <p class='note_text' name='total' id='total'>
                                {{$editData->total}}
                            </p>
                            <input name="total" id="name" value="{{ 1200}}" type="hidden">
                        </div>
                    </div>



                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name"> Payment Number <sapn
                                class="text-danger">*</sapn></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="bkash" name="payment"
                                value="{{$editData->bkash}}" placeholder=" Payment number" required
                                class="@error('payment') is-invalid @enderror" value="{{old('payment')}}" />

                            @error('payment')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>



                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name"> Transaction id <sapn
                                class="text-danger">*</sapn></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="transaction_id" name="transaction_id"
                                value="{{$editData->transaction_id}}" placeholder=" Transaction Id"
                                class="@error('transaction_id') is-invalid @enderror" required
                                value="{{old('transaction_id')}}" />
                            @error('transaction_id')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>


                    <div class="row justify-content-end text-center">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit Registration </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



        <div id="results"></div>



    </div>












    <script src="{{asset('dashboard/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('dashboard/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('dashboard/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('dashboard/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('dashboard/assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
    function myFunction() {
        let a = document.getElementById("guest").value
        console.log(a);


    }
    </script>

    <script>
    // Get a reference to the input element
    const inputElement = document.getElementById('guest');
    const input = document.querySelector('inlineRadio').value;
    console.log(input);
    // Add an event listener to the input element
    inputElement.addEventListener('input', function() {
        // Get the value of the input element
        const inputValue = inputElement.value;

        // Do something with the value (e.g., display it)
        total.innerHTML = (inputValue * 500) + 1200;
        console.log('Input value:', inputValue);
    });
    </script>

    <script>
    let results = document.getElementById("results");

    // Set up a click handler on the parent of the radio buttons so that
    // any clicks to the descendants will bubble up to the parent
    document.querySelector("div.btn-group").addEventListener("click", function(evt) {
        // Check if a radio button triggered the event
        if (evt.target.type === "radio") {
            // Populate the results area with the value of the clicked element
            const inputValue = evt.target.value
            total.innerHTML = (inputValue * 700) + 1020;
        }
    });
    </script>

</body>

</html>
<!-- <input name="total" id="name" value="{{ 1200}}" type="text"> -->

@endsection