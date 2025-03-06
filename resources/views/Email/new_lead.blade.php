<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Lead Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }
        .header {
            background-color: #0073e6;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            border-radius: 8px 8px 0 0;
        }
        .content {
            padding: 20px;
            line-height: 1.6;
        }
        .lead-info p {
            margin: 10px 0;
        }
        .lead-info strong {
            color: #0073e6;
        }
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            📧 JustDial - New Lead Notification
        </div>
        <div class="content">
            <h2>New Lead Details</h2>
            <div class="lead-info">
                <p><strong>Lead ID:</strong> {{ $enquiry->leadid }}</p>
                <p><strong>Name:</strong> {{ $enquiry->name }}</p>
                <p><strong>Email:</strong> {{ $enquiry->email }}</p>
                <p><strong>Phone:</strong> {{ $enquiry->phone }}</p>
                <p><strong>Status:</strong> {{ $enquiry->status }}</p>
                <p><strong>Platform:</strong> {{ $enquiry->platform }}</p>
            </div>
            <p>For more information, please check the admin panel.</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} JustDial. All Rights Reserved.
        </div>
    </div>
</body>
</html>

