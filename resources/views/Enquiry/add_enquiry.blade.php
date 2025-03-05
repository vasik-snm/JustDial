<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ url('images/follow-up.jpg') }}" type="image/png" />
    <title>Add Enquiry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .red {
            max-width: 800px;
            margin: 30px auto;
            background-color: #ffffff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .submit-button {
            text-align: center;
        }

        .submit-button button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 2rem;
        }

        .submit-button button:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }

        .footer .social-icons a {
            margin: 0 10px;
            color: #fff;
            text-decoration: none;
        }

        .footer .footer-text {
            margin: 0;
        }

        .client_list {
            text-align: end;
            max-width: 85%;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }
        h1 {
    text-align: center;
    margin-bottom: 2rem;
}
        .card {
    border: 0 solid transparent;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
    padding: 31px 75px;
    margin-right: auto;
    margin-left: auto;
    width: 100%;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

a.btn.btn-secondary {
    padding: 10px 29px;
    margin-top: 1rem;
}

/* General Button Styling */
.btn {
    padding: 12px 28px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 12px;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    outline: none;
    border: none;
}

/* Neumorphic Primary Button */
.btn-primary {
    background: #e0e0e0;
    color: #007bff;
    box-shadow: 6px 6px 12px #bebebe, -6px -6px 12px #ffffff;
}

.btn-primary:hover {
    background: #d9d9d9;
    box-shadow: inset 4px 4px 8px #bebebe, inset -4px -4px 8px #ffffff;
}

/* Neumorphic Secondary Button */
.btn-secondary {
    background: #e0e0e0;
    color: #333;
    box-shadow: 6px 6px 12px #bebebe, -6px -6px 12px #ffffff;
}

.btn-secondary:hover {
    background: #d9d9d9;
    box-shadow: inset 4px 4px 8px #bebebe, inset -4px -4px 8px #ffffff;
}

/* Button Container */
.button-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}


        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            .form-group input {
                width: calc(100% - 18px);
            }

            .submit-button button {
                width: 100%;
                padding: 12px;
            }
            a.btn.btn-secondary {
                width: 100%;
                padding: 12px;
            }
        }
    </style>
</head>

<body>
    @extends('Admin.layouts.main')

    @section('main-container')
        <div class="page-wrapper">
            <div class="page-content">
                <div class="container-fluid">
                    <h1>Add Enquiry</h1>
                </div>

                <div class=" col-md-6">

                </div>
                <div class="card">
                    <div class="card-body">
                        <form id="client-form" action="{{ route('enquiryRegister') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
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

                            <div class="mb-3">
                                <label for="leadid" class="form-label">Lead ID</label>
                                <input type="text" id="leadid" class="form-control" name="leadid" required>
                            </div>

                            <div class="mb-3">
                                <label for="leadtype" class="form-label">Lead Type</label>
                                <input type="text" id="leadtype" class="form-control" name="leadtype" required>
                            </div>

                            <div class="mb-3">
                                <label for="prefix" class="form-label">Prefix</label>
                                <input type="text" id="prefix" class="form-control" name="prefix">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" class="form-control" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" id="mobile" class="form-control" name="mobile" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" id="phone" class="form-control" name="phone">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" id="date" class="form-control" name="date" required>
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <input type="text" id="category" class="form-control" name="category">
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" id="city" class="form-control" name="city">
                            </div>

                            <div class="mb-3">
                                <label for="area" class="form-label">Area</label>
                                <input type="text" id="area" class="form-control" name="area">
                            </div>

                            <div class="mb-3">
                                <label for="brancharea" class="form-label">Branch Area</label>
                                <input type="text" id="brancharea" class="form-control" name="brancharea">
                            </div>

                            <div class="mb-3">
                                <label for="dncmobile" class="form-label">DNC Mobile</label>
                                <input type="text" id="dncmobile" class="form-control" name="dncmobile">
                            </div>

                            <div class="mb-3">
                                <label for="dncphone" class="form-label">DNC Phone</label>
                                <input type="text" id="dncphone" class="form-control" name="dncphone">
                            </div>

                            <div class="mb-3">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" id="company" class="form-control" name="company">
                            </div>

                            <div class="mb-3">
                                <label for="pincode" class="form-label">Pincode</label>
                                <input type="text" id="pincode" class="form-control" name="pincode">
                            </div>

                            <div class="mb-3">
                                <label for="time" class="form-label">Time</label>
                                <input type="time" id="time" class="form-control" name="time">
                            </div>

                            <div class="mb-3">
                                <label for="branchpin" class="form-label">Branch Pincode</label>
                                <input type="text" id="branchpin" class="form-control" name="branchpin">
                            </div>

                            <div class="mb-3">
                                <label for="parentid" class="form-label">Parent ID</label>
                                <input type="text" id="parentid" class="form-control" name="parentid">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" class="form-select" name="status">
                                    <option value="Not Connect">Not Connect</option>
                                    <option value="Request Call Back">Request Call Back</option>
                                    <option value="Follow Up">Follow Up</option>
                                    <option value="Purposal Send">Purposal Send</option>
                                    <option value="Won">Won</option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="Rejected">Rejected</option>
                                    <option value="Wrong Category">Wrong Category</option>
                                    <option value="Job/Intership">Job/Intership</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Pending" selected>Pending</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="platform" class="form-label">Platform</label>
                                <input type="text" id="platform" class="form-control" name="platform">
                            </div>

                            <div class="mt-3 submit-button">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <div class="text-right1">
                                    <a href="{{ route('enquiryList') }}" class="btn btn-secondary">Back</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        {{-- <footer class="footer">
            <div class="social-icons">
                <a href="https://www.facebook.com/cxrana" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/cxrana" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/ahrana/" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p class="footer-text">Designed by <i class="fas fa-heart"></i> SNM Techcraft Innovation</p>
        </footer> --}}

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function() {
                if ($('.alert-success').length > 0) {
                    setTimeout(function() {
                        $('.alert-success').fadeOut('slow');
                    }, 3000);
                }
                if ($('.alert-danger').length > 0) {
                    setTimeout(function() {
                        $('.alert-danger').fadeOut('slow');
                    }, 3000);
                }
            });
        </script>
    </body>

    </html>
@endsection
