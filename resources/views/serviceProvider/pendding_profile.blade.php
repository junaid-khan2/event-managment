<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Not Approved</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #ff3e00, #ffbe30);
            color: #fff;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: black;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
            color: black;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #ff3e00;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #ff661a;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Account Was Not Approved</h1>
        <p>You can try again later When Admin Approved.</p>
        <a href="{{route('index')}}">Go to Home Page</a>
    </div>
</body>
</html>
