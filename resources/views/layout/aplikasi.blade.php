<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-login {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="password"], .btn-primary {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            box-sizing: border-box;
        }
        .btn-primary {
           background-color: #007bff; /* Warna biru */
           color: white;
           border: none;
           border-radius: 5px;
           cursor: pointer;
           transition: background-color 0.3s;
       }
       .btn-primary:hover {
           background-color: #0056b3; /* Warna biru yang lebih gelap */
       }
    </style>

</head>
<body>
    @yield('konten')
</body>
</html>
</html>