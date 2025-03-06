@extends('Admin.layouts.main')

@section('main-container')
    <style>
        p.mb-0.text-secondary {
            font-size: 20px;
            font-weight: 600;
            font-weight: bold;
            font-color: black;
        }

        .card-body {
            height: 15vh;
            flex: 1 1 auto;
            padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
            color: var(--bs-card-color);
        }
    </style>
    <!--start page wrapper -->
    <div class="page-wrapper">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissable">
                {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger alert-dismissable">
                {{ Session::get('fail') }}
            </div>
        @endif
        <div class="page-content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-3">
                {{-- Today's Follow Ups --}}
                <a href="{{ route('enquiryList', ['today_follow_ups' => 'today']) }}" class="text-decoration-none">
                    <div class="col">
                        <div class="card radius-10 border-start border-4 border-secondary">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Today Follow Ups</p>
                                        <h4 class="my-1 text-secondary">{{ $todayFollowUpsCount }}</h4>
                                    </div>
                                    <div class="widgets-icons-2 rounded-circle ms-auto"
                                        style="background-color: #6C63FF; color: #fff; padding: 15px;">
                                        <i class="fa-solid fa-calendar-day"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                 {{-- Pending --}}
                 <a href="{{ route('enquiry.list', ['status' => 'Pending']) }}" class="text-decoration-none">
                    <div class="col">
                        <div class="card radius-10 border-start border-4 border-warning">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Pending</p>
                                        <h4 class="my-1 text-warning">{{ $pendingCount }}</h4>
                                    </div>
                                    <div class="text-white widgets-icons-2 rounded-circle bg-gradient-orange ms-auto">
                                        <i class="fa-solid fa-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Request Call Back --}}
                <a href="{{ route('enquiry.list', ['status' => 'Request Call Back']) }}" class="text-decoration-none">
                    <div class="col">
                        <div class="card radius-10 border-start border-4 border-info">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Request Call Back</p>
                                        <h4 class="my-1 text-info">{{ $requestCallBackCount }}</h4>
                                    </div>
                                    <div class="text-white widgets-icons-2 rounded-circle bg-gradient-blues ms-auto">
                                        <i class="fa-solid fa-phone-volume"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Cancelled --}}
                <a href="{{ route('enquiry.list', ['status' => 'Cancelled']) }}" class="text-decoration-none">
                    <div class="col">
                        <div class="card radius-10 border-start border-4 border-danger">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Cancelled</p>
                                        <h4 class="my-1 text-danger">{{ $cancelledCount }}</h4>
                                    </div>
                                    <div class="text-white widgets-icons-2 rounded-circle bg-gradient-burning ms-auto">
                                        <i class="fa-solid fa-ban"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Follow Up --}}
                <a href="{{ route('enquiry.list', ['status' => 'Follow Up']) }}" class="text-decoration-none">
                    <div class="col">
                        <div class="card radius-10 border-start border-4 border-success">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Follow Up</p>
                                        <h4 class="my-1 text-success">{{ $followUpCount }}</h4>
                                    </div>
                                    <div class="text-white widgets-icons-2 rounded-circle bg-gradient-ohhappiness ms-auto">
                                        <i class="fa-solid fa-clipboard-list"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Job/Internship --}}
                <a href="{{ route('enquiryList', ['status' => urlencode('Job/Internship')]) }}"
                    class="text-decoration-none">
                    <div class="col">
                        <div class="card radius-10 border-start border-4 border-info">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Job/Internship</p>
                                        <h4 class="my-1 text-info">{{ $jobInternshipCount }}</h4>
                                    </div>
                                    <div class="text-white widgets-icons-2 rounded-circle bg-gradient-blues ms-auto">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Marketing --}}
                <a href="{{ route('enquiry.list', ['status' => 'Marketing']) }}" class="text-decoration-none">
                    <div class="col">
                        <div class="card radius-10 border-start border-4 border-primary">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Marketing</p>
                                        <h4 class="my-1 text-primary">{{ $marketingCount }}</h4>
                                    </div>
                                    <div class="text-white widgets-icons-2 rounded-circle bg-gradient-blues ms-auto">
                                        <i class="fa-solid fa-bullhorn"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Not Connect --}}
                <a href="{{ route('enquiry.list', ['status' => 'Not Connect']) }}" class="text-decoration-none">
                    <div class="col">
                        <div class="card radius-10 border-start border-4 border-danger">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Not Connect</p>
                                        <h4 class="my-1 text-danger">{{ $notConnectCount }}</h4>
                                    </div>
                                    <div class="text-white widgets-icons-2 rounded-circle bg-gradient-burning ms-auto">
                                        <i class="fa-solid fa-phone-slash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Purposal Send --}}
                <a href="{{ route('enquiry.list', ['status' => 'Purposal Send']) }}" class="text-decoration-none">
                    <div class="col">
                        <div class="card radius-10 border-start border-4 border-primary">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Purposal Send</p>
                                        <h4 class="my-1 text-primary">{{ $purposalSendCount }}</h4>
                                    </div>
                                    <div class="text-white widgets-icons-2 rounded-circle bg-gradient-blues ms-auto">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Rejected --}}
                <a href="{{ route('enquiry.list', ['status' => 'Rejected']) }}" class="text-decoration-none">
                    <div class="col">
                        <div class="card radius-10 border-start border-4 border-dark">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Rejected</p>
                                        <h4 class="my-1 text-dark">{{ $rejectedCount }}</h4>
                                    </div>
                                    <div class="widgets-icons-2 rounded-circle ms-auto"
                                        style="background-color: #FF6347; padding: 15px;">
                                        <i class="fa-solid fa-thumbs-down" style="color: #FFFFFF;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Won --}}
                <a href="{{ route('enquiry.list', ['status' => 'Won']) }}" class="text-decoration-none">
                    <div class="col">
                        <div class="card radius-10 border-start border-4 border-success">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Won</p>
                                        <h4 class="my-1 text-success">{{ $wonCount }}</h4>
                                    </div>
                                    <div class="text-white widgets-icons-2 rounded-circle bg-gradient-ohhappiness ms-auto">
                                        <i class="fa-solid fa-trophy"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Wrong Category --}}
                <a href="{{ route('enquiry.list', ['status' => 'Wrong Category']) }}" class="text-decoration-none">
                    <div class="col">
                        <div class="card radius-10 border-start border-4 border-secondary">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Wrong Category</p>
                                        <h4 class="my-1 text-secondary">{{ $wrongCategoryCount }}</h4>
                                    </div>
                                    <div class="widgets-icons-2 rounded-circle ms-auto"
                                        style="background-color: #dc3545; color: #fff; padding: 15px;">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Total Leads --}}
                <a href="{{ route('enquiry.list') }}" class="text-decoration-none">
                    <div class="col">
                        <div class="card radius-10 border-start border-4 border-secondary">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Total Leads</p>
                                        <h4 class="my-1 text-secondary">{{ $totalLeadsCount }}</h4>
                                    </div>
                                    <div class="widgets-icons-2 rounded-circle ms-auto"
                                        style="background-color: #6C63FF; color: #fff; padding: 15px;">
                                        <i class="fa-solid fa-list"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>

    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    {{-- <footer class="page-footer">
        <p class="mb-0">Copyright © 2022. All right reserved.</p>
    </footer> --}}
    </div>
    <!--end wrapper-->

    <script>
        $(document).ready(function() {
            if ($('.alert-success').length > 0) {
                $('.alert-success').delay(2000).fadeOut('slow');
            }
            if ($('.alert-danger').length > 0) {
                $('.alert-danger').delay(2000).fadeOut('slow');
            }
        });
    </script>
@endsection
