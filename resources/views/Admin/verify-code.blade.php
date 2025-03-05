<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ url('images/follow-up.jpg') }}" type="image/png" />
    <title>Verify Code</title>
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
    </style>
</head>

<body>
    <div class="forgot-password-container">
        <div class="form-header">
            <img src="{{ url('images/follow-up.jpg') }}" class="logo-icon large-logo" alt="follow-up">
        </div>
        <h5 class="text-center">Enter the Code</h5>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('password.verify.code') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="code" class="form-label">Enter the 6-digit Code</label>
                <input type="text" class="form-control" id="code" name="code" required>
                @error('code')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Verify Code</button>
        </form>

        <div class="text-center mt-3">
            <a href="{{ route('login') }}">Back to Login</a>
        </div>
    </div>
</body>

</html>
