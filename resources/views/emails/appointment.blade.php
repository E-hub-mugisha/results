<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Appointment Request - Results Focused Fitness</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f7f9fc;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        .email-container {
            background: #ffffff;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
            padding: 25px 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        .header {
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header h2 {
            margin: 0;
            color: #007bff;
        }
        .content p {
            margin: 10px 0;
        }
        .content strong {
            color: #000;
        }
        .footer {
            margin-top: 25px;
            font-size: 14px;
            color: #777;
            text-align: center;
            border-top: 1px solid #eee;
            padding-top: 15px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h2>New Appointment Request</h2>
        </div>

        <div class="content">
            <p><strong>Full Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email Address:</strong> {{ $data['email'] }}</p>
            <p><strong>Requested Course:</strong> {{ $data['course'] }}</p>
        </div>

        <div class="footer">
            <p>This message was sent automatically from the <strong>Results Focused Fitness</strong> website appointment form.</p>
        </div>
    </div>
</body>
</html>
