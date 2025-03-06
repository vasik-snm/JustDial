<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ url('images/follow-up.jpg') }}" type="image/png" />
    <title>Follow Ups List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .ps-3 {
            padding-left: 1rem !important;
            margin-right: auto;
        }
    </style>
</head>

<body>

    @extends('Admin.layouts.main')

    @section('main-container')
        <div class="page-wrapper">
            <div class="page-content">
                <div class="card">
                    <div class="container-fluid">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <h1 class="mb-4 text-left">Follow Ups List</h1>
                                <div class="mb-3 text-left">
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Home</a>
                                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                                </div>
                            </div>

                        </div>

                        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
                            <div class="breadcrumb-title pe-3">Enquiry</div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                    <ol class="p-0 mb-0 breadcrumb">
                                        {{-- <li class="breadcrumb-item"><a href="javascript:;"><i
                                                    class="bx bx-home-alt"></i></a>
                                        </li> --}}
                                        <li class="breadcrumb-item active" aria-current="page">Follow Ups List</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="text-right col-md-6">
                                {{-- <div class="text-right1">
                                    <a href="{{ route('addScheme') }}" class="btn btn-success">Add New Scheme</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Enquiry ID</th>
                                                <th>Status</th>
                                                <th>Notes</th>
                                                <th>Follow Up Date</th>
                                                <th>Next Follow-Up</th>
                                                <th>Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($followUps as $index => $followUp)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $followUp->enquiry_id }}</td>
                                                    <td>{{ $followUp->status }}</td>
                                                    <td>{{ $followUp->notes }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($followUp->date)->format('d-m-Y') }}</td>
                                                    <td>{{ $followUp->next_follow_up ? \Carbon\Carbon::parse($followUp->next_follow_up)->format('d-m-Y h:i A') : 'N/A' }}</td>
                                                    <td>
                                                        @if ($followUp->document)
                                                            <a href="{{ asset('documents/' . $followUp->document) }}" target="_blank" title="View">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        @else
                                                            N/A
                                                        @endif
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6">No follow-ups found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <!-- Pop-up Modal -->
        <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
            <div class="modal-dialog">

            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Bootstrap JS (for modal functionality) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
               $(document).ready(function() {
                if ($('.alert-success').length > 0) {
                    $('.alert-success').delay(3000).fadeOut('slow');
                }
                if ($('.alert-danger').length > 0) {
                    $('.alert-danger').delay(3000).fadeOut('slow');
                }
            });
    </script>
    @endsection
