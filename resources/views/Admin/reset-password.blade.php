<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ url('images/follow-up.jpg') }}" type="image/png" />
    <title>Reset Password</title>
    <link href="{{ url('admin_assets/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .forgot-password-container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .large-logo {
            width: 100%;
            max-width: 200px;
            height: auto;
            display: block;
            margin: 18px auto;
        }

        h5.text-center {
            margin-bottom: 20px;
        }

        .error {
            color: red;
            font-size: 0.875rem;
        }
    </style>
</head>

<body>
    <div class="forgot-password-container">
        <div class="form-header">
            <img src="{{ url('images/follow-up.jpg') }}" class="logo-icon large-logo" alt="follow-up">
        </div>
        <h5 class="text-center">Create New Password</h5>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST" id="reset-password-form">
            @csrf
            <div class="mb-3">
                <label for="password" class="form-label">New Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <small class="error" id="password-error"></small>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                <small class="error" id="password_confirmation-error"></small>
            </div>

            <button type="submit" class="btn btn-primary w-100">Reset Password</button>
        </form>

        <div class="text-center mt-3">
            <a href="{{ route('login') }}">Back to Login</a>
        </div>
    </div>

    <script>
        document.getElementById('reset-password-form').addEventListener('submit', function(event) {
            // Clear any previous error messages
            document.getElementById('password-error').textContent = '';
            document.getElementById('password_confirmation-error').textContent = '';

            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('password_confirmation').value;

            // Check if passwords match
            if (password !== confirmPassword) {
                event.preventDefault();  // Prevent form submission
                document.getElementById('password_confirmation-error').textContent = 'Passwords do not match.';
            }
        });
    </script>
</body>

</html>
