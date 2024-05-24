<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; 
            align-items: center; 
            background: #f0f0f0;
            font-family: 'Roboto', sans-serif;
        }
        .form-login, .form-register {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 340px;
            box-sizing: border-box; 
            background: linear-gradient(to right, #ffffff, #e6e6e6);
        }
        img {
            display: block;
            margin: 0 auto 20px;
            width: 100px;
        }
        input[type="text"], input[type="password"], .btn-primary {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; 
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            padding: 12px 20px;
            margin-top: 20px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    @yield('konten')
</body>
</html>