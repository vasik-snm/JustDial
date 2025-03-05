<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ url('images/follow-up.jpg') }}" type="image/png" />
    <title>Enquiry List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .ps-3 {
            padding-left: 1rem !important;
            margin-right: auto;
        }
        .d-flex {
    position: relative; /* Ensure the parent is positioned */
}

.test {
    position: absolute;
    right: 15px;
    top: 9px;
    z-index: 1;
}
@media only screen and (max-width: 600px) {
    .ps-3 {
    padding-left: 1rem !important;
    width: 100%;
}
.mb-3.page-breadcrumb.d-sm-flex.align-items-center {
    display: flex
;
    align-items: center;
}
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
                                <h1 class="mb-4 text-left">Enquiry List</h1>
                                <div class="mb-3 text-left">
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Home</a>
                                    <!-- Back button -->
                                </div>
                            </div>

                        </div>

                        <div class="mb-3 page-breadcrumb d-sm-flex align-items-center">
                            <div class="breadcrumb-title pe-3">Enquiry</div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                    <ol class="p-0 mb-0 breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Enquiry List</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="text-right col-md-6">
                                <div class="text-right1">
                                    <a href="{{ route('createEnquiry') }}" class="btn btn-success">Create Enquiry</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                        <div class="card-body">


                            <div class="table-responsive">
                                <div class="d-flex justify-content-between mb-3 test1">
                                    <div class="test">
                                        <label for="dateFilter">Filter by Date:</label>
                                        <select id="dateFilter" class="form-control">
                                            <option value="all">All</option>
                                            <option value="today">Today</option>
                                            <option value="yesterday">Yesterday</option>
                                            <option value="week">This Week</option>
                                            <option value="month">This Month</option>
                                            <option value="year">This Year</option>
                                        </select>
                                    </div>
                                </div>
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Lead ID</th>
                                            <th>Lead Type</th>
                                            <th>Prefix</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Date</th>
                                            <th>Category</th>
                                            <th>City</th>
                                            <th>Area</th>
                                            <th>Branch Area</th>
                                            <th>DNC Mobile</th>
                                            <th>DNC Phone</th>
                                            <th>Company</th>
                                            <th>Pincode</th>
                                            <th>Time</th>
                                            <th>Branch Pin</th>
                                            <th>Parent ID</th>
                                            <th>Status</th>
                                            <th>Plateform</th>
                                            <th>Action</th>
                                            <th>Follow Up</th>
                                        </tr>
                                    </thead>
                                    <tbody id="enquiryTableBody">
                                        @foreach ($enquiry_list as $enquiry)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $enquiry->leadid }}</td>
                                                <td>{{ $enquiry->leadtype }}</td>
                                                <td>{{ $enquiry->prefix }}</td>
                                                <td>{{ $enquiry->name }}</td>
                                                <td>{{ $enquiry->mobile }}</td>
                                                <td>{{ $enquiry->phone }}</td>
                                                <td>{{ $enquiry->email }}</td>
                                                <td>{{ \Carbon\Carbon::parse($enquiry->date)->format('d-m-Y') }}</td>
                                                <td>{{ $enquiry->category }}</td>
                                                <td>{{ $enquiry->city }}</td>
                                                <td>{{ $enquiry->area }}</td>
                                                <td>{{ $enquiry->brancharea }}</td>
                                                <td>{{ $enquiry->dncmobile }}</td>
                                                <td>{{ $enquiry->dncphone }}</td>
                                                <td>{{ $enquiry->company }}</td>
                                                <td>{{ $enquiry->pincode }}</td>
                                                <td>{{ $enquiry->time }}</td>
                                                <td>{{ $enquiry->branchpin }}</td>
                                                <td>{{ $enquiry->parentid }}</td>
                                                <td>{{ $enquiry->status ?? 'Pending' }}</td>
                                                <td>{{ $enquiry->platform }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal" data-enquiry-id="{{ $enquiry->id }}"
                                                        data-status="{{ $enquiry->latestFollowUp->status ?? 'Pending' }}"
                                                        data-date="{{ $enquiry->date }}"
                                                        data-notes="{{ $enquiry->notes }}"
                                                        data-next-follow-up="{{ $enquiry->latestFollowUp?->next_follow_up ? \Carbon\Carbon::parse($enquiry->latestFollowUp->next_follow_up)->format('Y-m-d\TH:i') : '' }}"
                                                        data-last-follow-date="{{ $enquiry->latestFollowUp ? \Carbon\Carbon::parse($enquiry->latestFollowUp->date)->format('d-m-Y') : 'N/A' }}"
                                                        data-last-notes="{{ $enquiry->latestFollowUp ? $enquiry->latestFollowUp->notes : 'N/A' }}">
                                                        Change Status
                                                    </button>
                                                </td>
                                                </td>
                                                <td>
                                                    <a href="{{ route('showFollowUps', $enquiry->id) }}"
                                                        class="btn btn-info">
                                                        <i class="fas fa-eye"></i>View
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('updateStatus') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="enquiry_id" name="enquiry_id">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Enquiry Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">

                            <!-- Status -->
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" name="status" class="form-select" required>
                                    <option value="Not Connect">Not Connect</option>
                                    <option value="Request Call Back">Request Call Back</option>
                                    <option value="Follow Up">Follow Up</option>
                                    <option value="Purposal Send">Proposal Send</option>
                                    <option value="Won">Won</option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="Rejected">Rejected</option>
                                    <option value="Wrong Category">Wrong Category</option>
                                    <option value="Job/Internship">Job/Internship</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>

                            <div class="row mb-3">
                                <!-- Last Follow Date -->
                                <div class="col-md-6">
                                    <label for="last_follow_date" class="form-label">Last Date:</label>
                                    <input type="text" id="last_follow_date" class="form-control" value="01/10/2000"
                                        readonly>
                                </div>

                                <!-- Last Notes -->
                                <div class="col-md-6">
                                    <label for="last_notes" class="form-label">Last Notes:</label>
                                    <textarea id="last_notes" class="form-control" rows="1" readonly>Sample note here</textarea>
                                </div>
                            </div>


                            <!-- Date -->
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" id="date" name="date" class="form-control">
                            </div>

                            <!-- Notes -->
                            <div class="mb-3">
                                <label for="notes" class="form-label">Notes</label>
                                <textarea id="notes" name="notes" class="form-control" rows="3"></textarea>
                            </div>

                            <!-- Next Follow Up -->
                            <div class="mb-3">
                                <label for="next_follow_up" class="form-label">Next Follow Up</label>
                                <input type="datetime-local" id="next_follow_up" name="next_follow_up"
                                    class="form-control">
                            </div>

                            <!-- Upload document -->
                            <div class="mb-3">
                                <label for="document" class="form-label">Upload Document</label>
                                <input type="file" id="document" name="document" class="form-control">
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script>
            $('#exampleModal').on('show.bs.modal', function(event) {
                let button = $(event.relatedTarget);
                $('#enquiry_id').val(button.data('enquiry-id'));
                $('#status').val(button.data('status'));
                $('#date').val(button.data('date'));
                $('#notes').val('');
                $('#next_follow_up').val(button.data('next-follow-up'));
                $('#last_follow_date').val(button.data('last-follow-date'));
                $('#last_notes').val(button.data('last-notes'));
            });

            function setFollowUpData(lastFollowDate, lastNotes) {
                document.getElementById('last_follow_date_text').textContent = lastFollowDate || 'N/A';
                document.getElementById('last_notes_text').textContent = lastNotes || 'N/A';

                document.getElementById('last_follow_date').value = lastFollowDate || '';
                document.getElementById('last_notes').value = lastNotes || '';
            }
        </script>

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
            // Initialize DataTable
            $(document).ready(function() {
                if ($('.alert-success').length > 0) {
                    $('.alert-success').delay(3000).fadeOut('slow');
                }
                if ($('.alert-danger').length > 0) {
                    $('.alert-danger').delay(3000).fadeOut('slow');
                }
            });


            $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                console.log('Button Data:', button.data()); // Yeh check karein
                console.log('Enquiry ID:', button.data('enquiry-id')); // Specific check

                var modal = $(this);
                modal.find('#enquiry_id').val(button.data('enquiry-id'));
                console.log('Form Enquiry ID:', modal.find('#enquiry_id').val()); // Final check
            });

            $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);

                var enquiryId = button.data('enquiry-id');
                var status = button.data('status');
                var date = button.data('date');
                var notes = button.data('notes');
                var nextFollowUp = button.data('next-follow-up');

                console.log('Modal Data:', {
                    enquiryId,
                    status,
                    date,
                    notes,
                    nextFollowUp,
                    document
                });

                $('#enquiry_id').val(enquiryId || '');
                $('#status').val(status || 'Pending');
                $('#date').val(date || '');
                $('#notes').val(notes || '');
                $('#next_follow_up').val(nextFollowUp || '');
            });

             $(document).ready(function() {
                    // Initialize DataTable
                //
                $('#dateFilter').on('change', function() {
                    let filter = $(this).val();
                    $.ajax({
                        url: '{{ route('fetchEnquiries') }}',
                        type: 'GET',
                        data: {
                            filter: filter
                        },
                        success: function(data) {
                            console.log('Filtered Data:', data);
                            console.log('Date Filter:', $('#dateFilter').val());
                            if($('#dateFilter').val() != 'all'){

                            const tableBody = document.getElementById('enquiryTableBody');
                            tableBody.innerHTML = '';

                            data.forEach((enquiry, index) => {
                            tableBody.innerHTML += `
                    <tr>
                         <td>${index + 1}</td>
                        <td>${enquiry.leadid || ''}</td>
                        <td>${enquiry.leadtype || ''}</td>
                        <td>${enquiry.prefix || ''}</td>
                        <td>${enquiry.name || ''}</td>
                        <td>${enquiry.mobile || ''}</td>
                        <td>${enquiry.phone || ''}</td>
                        <td>${enquiry.email || ''}</td>
                        <td>${enquiry.date || ''}</td>
                        <td>${enquiry.category || ''}</td>
                        <td>${enquiry.city || ''}</td>
                        <td>${enquiry.area || ''}</td>
                        <td>${enquiry.brancharea || ''}</td>
                        <td>${enquiry.dncmobile || ''}</td>
                        <td>${enquiry.dncphone || ''}</td>
                        <td>${enquiry.company || ''}</td>
                        <td>${enquiry.pincode || ''}</td>
                        <td>${enquiry.time || ''}</td>
                        <td>${enquiry.branchpin || ''}</td>
                        <td>${enquiry.parentid || ''}</td>
                        <td>${enquiry.status ?? 'Pending'}</td>
                        <td>${enquiry.platform || ''}</td>
                        <td><button class="btn btn-primary">Change Status</button></td>
                        <td><a href="/follow-ups/${enquiry.id}" class="btn btn-info">View</a></td>
                    </tr>`;
                        });
                         // Redraw the table with new data
                    }
                        },
                        error: function(err) {
                            console.error('Error fetching data:', err.responseJSON ?? err);
                        }
                    });
                });

                $('#dateFilter').trigger('change');
                // }
        });
        </script>
    @endsection
