<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Session Booking - Results Focused Fitness</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f7f9fc;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        .email-container {
            background: #fff;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
            padding: 25px 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        .header h2 {
            color: #007bff;
            margin-bottom: 15px;
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
            <h2>New Session Booking Request</h2>
        </div>

        <p><strong>Service:</strong> {{ $data['service'] }}</p>
        <p><strong>Session Title:</strong> {{ $data['title'] }}</p>
        <p><strong>Client Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Start Time:</strong> {{ \Carbon\Carbon::parse($data['start_time'])->format('F j, Y g:i A') }}</p>
        <p><strong>End Time:</strong> {{ \Carbon\Carbon::parse($data['end_time'])->format('F j, Y g:i A') }}</p>

        <div class="footer">
            <p>This booking was submitted from the <strong>Results Focused Fitness</strong> website.</p>
        </div>
    </div>
</body>
</html>
