<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 09:07:15 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ url('images/baalangan_icon.PNG') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ url('admin_assets/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
    <link href="{{ url('admin_assets/assets/plugins/fancy-file-uploader/fancy_fileupload.css') }}" rel="stylesheet" />


    <link href="{{ url('admin_assets/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ url('admin_assets/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet') }}" />
    <link href="{{ url('admin_assets/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}"
        rel="stylesheet" />
    <link href="{{ url('admin_assets/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ url('admin_assets/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ url('admin_assets/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ url('admin_assets/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin_assets/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ url('admin_assets/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ url('admin_assets/assets/css/icons.css') }}" rel="stylesheet">
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ url('admin_assets/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ url('admin_assets/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ url('admin_assets/assets/css/header-colors.css') }}" />

    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.0.1/model-viewer.min.js"></script>
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- include Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <style>
        /* Ensure the sidebar takes up the full height */
        .sidebar-wrapper {
            height: 100vh;
            /* Full viewport height */
            overflow-y: auto;
            /* Enable vertical scrolling */
            overflow-x: hidden;
            /* Disable horizontal scrolling */
        }

        /* Optional: Style the scrollbar */
        .sidebar-wrapper::-webkit-scrollbar {
            width: 8px;
            /* Width of the scrollbar */
        }

        .sidebar-wrapper::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.3);
            /* Color of the scrollbar thumb */
            border-radius: 10px;
            /* Rounded corners for the scrollbar thumb */
        }

        .sidebar-wrapper::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* Background of the scrollbar track */
        }

        .simplebar-placeholder {
            display: none !important;
        }

        .sidebar-wrapper .metismenu a .parent-icon i {
            width: 30px;
        }

        /* Update Button Styling */
        button.btn.btn-primary.btn-update {
            max-width: 230px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgb(0, 140, 255);
            /* New Color */
            color: white;
            border: none;
            border-radius: 50px;
            /* Rounded with more curve */
            padding: 10px 10px;
            font-size: 18px;
            font-weight: 700;
            margin-top: 2rem;
            cursor: pointer;
            transition: all 0.4s ease-out;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            /* Stronger shadow for depth */
        }

        /* Hover Effect for Update Button */
        button.btn.btn-primary.btn-update:hover {
            background: rgb(63 110 166);
            /* Darker shade of the color */
            transform: scale(1.1);
            /* Enlarge */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            /* Enhanced shadow */
            color: #f8f9fa;
            /* Slight color change on hover */
            box-shadow: inset 4px 4px 8px #bebebe, inset -3px -4px 3px #ffffff;
        }

        /* Active State for Update Button */
        button.btn.btn-primary.btn-update:active {
            transform: scale(0.95);
            /* Shrink when clicked */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            /* Slight shadow on click */
        }

        /* Back Button Styling */
        a.mt-3.btn.btn-secondary.btn-back {
            max-width: 230px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgb(50, 50, 50);
            /* Black color */
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 10px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.4s ease-out;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        /* Hover Effect for Back Button */
        a.mt-3.btn.btn-secondary.btn-back:hover {
            background: black;
            /* Slightly darker shade of black for hover */
            transform: scale(1.1);
            /* Enlarge */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            /* Enhanced shadow */
            box-shadow: inset 4px 4px 8px #bebebe, inset -3px -4px 3px #ffffff;
        }

        /* Active State for Back Button */
        a.mt-3.btn.btn-secondary.btn-back:active {
            transform: scale(0.95);
            /* Shrink when clicked */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            /* Slight shadow on click */
        }
    </style>
    <title>Enquiry || Admin</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('images/follow-up.jpg') }}" class="logo-icon" alt="follow-up logo">
                </div>
                <div>
                    <h4 class="logo-text">Enquiry</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i></div>
            </div>
            <!--navigation-->
            {{-- <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ url('/dashboard') }}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/officerbmi_list') }}">
                        <div class="parent-icon"><i class="fa-solid fa-calculator"></i>
                        </div>
                        <div class="menu-title">BMI Calculation List</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/scheme_list') }}">
                        <div class="parent-icon"><i class="fas fa-tasks"></i>
                        </div>
                        <div class="menu-title">Scheme</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/event_list') }}">
                        <div class="parent-icon"><i class="fa-regular fa-calendar"></i>
                        </div>
                        <div class="menu-title">Event</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/nutrition_list') }}">
                        <div class="parent-icon"><i class="fa-solid fa-person"></i>
                        </div>
                        <div class="menu-title">Supplementary Nutrition</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/role_list') }}">
                        <div class="parent-icon"><i class="fa-solid fa-users"></i>
                        </div>
                        <div class="menu-title">Role</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/center_list') }}">
                        <div class="parent-icon"><i class="fa-solid fa-building-user"></i>
                        </div>
                        <div class="menu-title">Center</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/user_list') }}">
                        <div class="parent-icon"><i class="fa-solid fa-user"></i>
                        </div>
                        <div class="menu-title">User</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/children_list') }}">
                        <div class="parent-icon"><i class="fa-solid fa-children"></i>
                        </div>
                        <div class="menu-title">Childrens</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/food_list') }}">
                        <div class="parent-icon"><i class="fa-solid fa-plate-wheat"></i>
                        </div>
                        <div class="menu-title">Food Chat</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/teacher_list') }}">
                        <div class="parent-icon"><i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="menu-title">Worker</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/officer_list') }}">
                        <div class="parent-icon"><i class="fa-solid fa-user-tie"></i>
                        </div>
                        <div class="menu-title">Officer</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/about_us_list') }}">
                        <div class="parent-icon"><i class="fa-solid fa-circle-user"></i>
                        </div>
                        <div class="menu-title">About-Us</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/contact_us_list') }}">
                        <div class="parent-icon"><i class="fa fa-address-book"></i>
                        </div>
                        <div class="menu-title">Contact-Us</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/term_and_condition_list') }}">
                        <div class="parent-icon"><i class="fa-solid fa-file-contract"></i>
                        </div>
                        <div class="menu-title">Terms & Condition</div>
                    </a>
                </li>

				<li>
                    <a href="{{ url('/privacy_policy_list') }}">
                        <div class="parent-icon"><i class="fas fa-file-signature"></i>
                        </div>
                        <div class="menu-title">Privacy & Policy</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/notificationlist') }}">
                        <div class="parent-icon"><i class="fa-solid fa-bell"></i>
                        </div>
                        <div class="menu-title">Notification</div>
                    </a>
                </li>
            </ul> --}}

            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ url('/dashboard') }}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i></div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/equirylist') }}">
                        <div class="parent-icon"><i class="fas fa-info-circle"></i></div>
                        <div class="menu-title">Enquiry List</div>
                    </a>
                </li>

                {{-- <li><a href="{{ url('/center_list') }}"><div class="parent-icon"><i class="fa-solid fa-building-user"></i></div><div class="menu-title">Center</div></a></li>
                <li><a href="{{ url('/children_list') }}"><div class="parent-icon"><i class="fa-solid fa-children"></i></div><div class="menu-title">Children</div></a></li>
                <li><a href="{{ url('/event_list') }}"><div class="parent-icon"><i class="fa-regular fa-calendar"></i></div><div class="menu-title">Event</div></a></li>
                <li><a href="{{ url('/food_list') }}"><div class="parent-icon"><i class="fa-solid fa-plate-wheat"></i></div><div class="menu-title">Food Chat</div></a></li>
                <li><a href="{{ url('/nutrition_list') }}"><div class="parent-icon"><i class="fa-solid fa-person"></i></div><div class="menu-title">Supplementary Nutrition</div></a></li>
                <li><a href="{{ url('/officer_list') }}"><div class="parent-icon"><i class="fa-solid fa-user-tie"></i></div><div class="menu-title">Officer</div></a></li>
                <li><a href="{{ url('/role_list') }}"><div class="parent-icon"><i class="fa-solid fa-users"></i></div><div class="menu-title">Role</div></a></li>
                <li><a href="{{ url('/scheme_list') }}"><div class="parent-icon"><i class="fas fa-tasks"></i></div><div class="menu-title">Scheme</div></a></li>
                <li><a href="{{ url('/teacher_list') }}"><div class="parent-icon"><i class="fas fa-chalkboard-teacher"></i></div><div class="menu-title">Worker</div></a></li>
                <li><a href="{{ url('/user_list') }}"><div class="parent-icon"><i class="fa-solid fa-user"></i></div><div class="menu-title">User</div></a></li>
                <li><a href="{{ url('/getsearchrole') }}"><div class="parent-icon"><i class="fa-solid fa-clock"></i></div><div class="menu-title">Attendance</div></a></li>

                <li>
                    <a href="#" class="has-arrow">
                        <div class="parent-icon"><i class="fa-solid fa-cog"></i></div>
                        <div class="menu-title">App Setting</div>
                    </a>
                    <ul>
                        <li><a href="{{ url('/about_us_list') }}"><div class="parent-icon"><i class="fa-solid fa-circle-user"></i></div>About-Us</a></li>
                        <li><a href="{{ url('/contact_us_list') }}"><div class="parent-icon"><i class="fa fa-address-book"></i></div>Contact-Us</a></li>
                        <li><a href="{{ url('/term_and_condition_list') }}"><div class="parent-icon"><i class="fa-solid fa-file-contract"></i></div>Terms & Condition</a></li>
                        <li><a href="{{ url('/privacy_policy_list') }}"><div class="parent-icon"><i class="fas fa-file-signature"></i></div>Privacy & Policy</a></li>
                        <li><a href="{{ url('/notificationlist') }}"><div class="parent-icon"><i class="fa-solid fa-bell"></i></div>Notification</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>

        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand gap-3">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>

                    {{-- <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
						<input class="form-control px-5" disabled type="search" placeholder="Search">
						<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"><i class='bx bx-search'></i></span>
					  </div> --}}


                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center gap-1">
                            {{-- <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li> --}}
                            {{-- <li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="{{ url('admin_assets/assets/images/county/02.png') }}" width="22" alt="">
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ url('admin_assets/assets/images/county/01.png') }}" width="20" alt=""><span class="ms-2">English</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ url('admin_assets/assets/images/county/02.png') }}" width="20" alt=""><span class="ms-2">Catalan</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ url('admin_assets/assets/images/county/03.png') }}" width="20" alt=""><span class="ms-2">French</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ url('admin_assets/assets/images/county/04.png') }}" width="20" alt=""><span class="ms-2">Belize</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ url('admin_assets/assets/images/county/05.png') }}" width="20" alt=""><span class="ms-2">Colombia</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ url('admin_assets/assets/images/county/06.png') }}" width="20" alt=""><span class="ms-2">Spanish</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ url('admin_assets/assets/images/county/07.png') }}" width="20" alt=""><span class="ms-2">Georgian</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ url('admin_assets/assets/images/county/08.png') }}" width="20" alt=""><span class="ms-2">Hindi</span></a>
									</li>
								</ul>
							</li> --}}
                            {{-- <li class="nav-item dark-mode d-none d-sm-flex">
								<a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
								</a>
							</li> --}}

                            <li class="nav-item dropdown dropdown-app">
                                {{-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a> --}}
                                <div class="dropdown-menu dropdown-menu-end p-0">
                                    <div class="app-container p-2 my-2">
                                        <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/slack.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Slack</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/behance.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Behance</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/google-drive.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Dribble</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/outlook.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Outlook</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/github.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">GitHub</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/stack-overflow.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Stack</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/figma.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Stack</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/twitter.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Twitter</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/google-calendar.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Calendar</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/spotify.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Spotify</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/google-photos.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Photos</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/pinterest.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Photos</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/linkedin.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">linkedin</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/dribble.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Dribble</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/youtube.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">YouTube</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/google.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">News</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/envato.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Envato</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="{{ url('admin_assets/assets/images/app/safari.png') }}"
                                                                width="30" alt="">
                                                        </div>
                                                        <div class="app-name">
                                                            <p class="mb-0 mt-1">Safari</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div><!--end row-->

                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown dropdown-large">
                                {{-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a> --}}
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Notifications</p>
                                            <p class="msg-header-badge">8 New</p>
                                        </div>
                                    </a>
                                    <div class="header-notifications-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ url('admin_assets/assets/images/avatars/avatar-1.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Daisy Anderson<span
                                                            class="msg-time float-end">5 sec
                                                            ago</span></h6>
                                                    <p class="msg-info">The standard chunk of lorem</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-danger text-danger">dc
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Orders <span class="msg-time float-end">2
                                                            min
                                                            ago</span></h6>
                                                    <p class="msg-info">You have recived new orders</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ url('admin_assets/assets/images/avatars/avatar-2.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Althea Cabardo <span
                                                            class="msg-time float-end">14
                                                            sec ago</span></h6>
                                                    <p class="msg-info">Many desktop publishing packages</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success">
                                                    <img src="{{ url('admin_assets/assets/images/app/outlook.png') }}"
                                                        width="25" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Account Created<span
                                                            class="msg-time float-end">28 min
                                                            ago</span></h6>
                                                    <p class="msg-info">Successfully created new email</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-info text-info">Ss
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Product Approved <span
                                                            class="msg-time float-end">2 hrs ago</span></h6>
                                                    <p class="msg-info">Your new product has approved</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ url('admin_assets/assets/images/avatars/avatar-4.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Katherine Pechon <span
                                                            class="msg-time float-end">15
                                                            min ago</span></h6>
                                                    <p class="msg-info">Making this the first true generator</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success"><i
                                                        class='bx bx-check-square'></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Your item is shipped <span
                                                            class="msg-time float-end">5 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">Successfully shipped your item</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-primary">
                                                    <img src="{{ url('admin_assets/assets/images/app/github.png') }}"
                                                        width="25" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New 24 authors<span
                                                            class="msg-time float-end">1 day
                                                            ago</span></h6>
                                                    <p class="msg-info">24 new authors joined last week</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ url('admin_assets/assets/images/avatars/avatar-8.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Peter Costanzo <span
                                                            class="msg-time float-end">6 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">It was popularised in the 1960s</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">
                                            <button class="btn btn-primary w-100">View All Notifications</button>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                {{-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-shopping-bag'></i>
								</a> --}}
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">My Cart</p>
                                            <p class="msg-header-badge">10 Items</p>
                                        </div>
                                    </a>
                                    <div class="header-message-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="position-relative">
                                                    <div class="cart-product rounded-circle bg-light">
                                                        <img src="{{ url('admin_assets/assets/images/products/11.png') }}"
                                                            class="" alt="product image">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                    <p class="cart-product-price mb-0">1 X $29.00</p>
                                                </div>
                                                <div class="">
                                                    <p class="cart-price mb-0">$250</p>
                                                </div>
                                                <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="position-relative">
                                                    <div class="cart-product rounded-circle bg-light">
                                                        <img src="{{ url('admin_assets/assets/images/products/02.png') }}"
                                                            class="" alt="product image">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                    <p class="cart-product-price mb-0">1 X $29.00</p>
                                                </div>
                                                <div class="">
                                                    <p class="cart-price mb-0">$250</p>
                                                </div>
                                                <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="position-relative">
                                                    <div class="cart-product rounded-circle bg-light">
                                                        <img src="{{ url('admin_assets/assets/images/products/03.png') }}"
                                                            class="" alt="product image">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                    <p class="cart-product-price mb-0">1 X $29.00</p>
                                                </div>
                                                <div class="">
                                                    <p class="cart-price mb-0">$250</p>
                                                </div>
                                                <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="position-relative">
                                                    <div class="cart-product rounded-circle bg-light">
                                                        <img src="{{ url('admin_assets/assets/images/products/04.png') }}"
                                                            class="" alt="product image">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                    <p class="cart-product-price mb-0">1 X $29.00</p>
                                                </div>
                                                <div class="">
                                                    <p class="cart-price mb-0">$250</p>
                                                </div>
                                                <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="position-relative">
                                                    <div class="cart-product rounded-circle bg-light">
                                                        <img src="{{ url('admin_assets/assets/images/products/05.png') }}"
                                                            class="" alt="product image">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                    <p class="cart-product-price mb-0">1 X $29.00</p>
                                                </div>
                                                <div class="">
                                                    <p class="cart-price mb-0">$250</p>
                                                </div>
                                                <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="position-relative">
                                                    <div class="cart-product rounded-circle bg-light">
                                                        <img src="{{ url('admin_assets/assets/images/products/06.png') }}"
                                                            class="" alt="product image">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                    <p class="cart-product-price mb-0">1 X $29.00</p>
                                                </div>
                                                <div class="">
                                                    <p class="cart-price mb-0">$250</p>
                                                </div>
                                                <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="position-relative">
                                                    <div class="cart-product rounded-circle bg-light">
                                                        <img src="{{ url('admin_assets/assets/images/products/07.png') }}"
                                                            class="" alt="product image">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                    <p class="cart-product-price mb-0">1 X $29.00</p>
                                                </div>
                                                <div class="">
                                                    <p class="cart-price mb-0">$250</p>
                                                </div>
                                                <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="position-relative">
                                                    <div class="cart-product rounded-circle bg-light">
                                                        <img src="{{ url('admin_assets/assets/images/products/08.png') }}"
                                                            class="" alt="product image">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                    <p class="cart-product-price mb-0">1 X $29.00</p>
                                                </div>
                                                <div class="">
                                                    <p class="cart-price mb-0">$250</p>
                                                </div>
                                                <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="position-relative">
                                                    <div class="cart-product rounded-circle bg-light">
                                                        <img src="{{ url('admin_assets/assets/images/products/09.png') }}"
                                                            class="" alt="product image">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                    <p class="cart-product-price mb-0">1 X $29.00</p>
                                                </div>
                                                <div class="">
                                                    <p class="cart-price mb-0">$250</p>
                                                </div>
                                                <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <h5 class="mb-0">Total</h5>
                                                <h5 class="mb-0 ms-auto">$489.00</h5>
                                            </div>
                                            <button class="btn btn-primary w-100">Checkout</button>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('images/profile_pic.png') }}" class="user-img" alt="User details">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="{{ route('admin.profile', ['id' => Auth::guard('admin')->id()]) }}">
                                        <span>Profile</span>
                                    </a>
                                </li>
                            </a>

                            <a class="dropdown-item" href="#">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="{{ route('admin.logout') }}">
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </a>


                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
