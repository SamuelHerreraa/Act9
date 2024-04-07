<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        .jumbotron {
            background: #ff6600; /* Cambio de color a naranja */
            color: #fff;
            padding: 80px 20px;
            border-radius: 10px;
            text-align: center;
            position: relative; /* Añadido */
            overflow: hidden; /* Añadido */
        }

        .jumbotron::before {
            content: '';
            position: absolute;
            top: 0;
            left: -50%;
            width: 200%;
            height: 100%;
            background: #ff6600; /* Mismo color que el jumbotron */
            transform: skewX(45deg);
            z-index: -1;
        }

        .jumbotron h1 {
            margin-bottom: 30px;
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff9933; /* Cambio de color a naranja claro */
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ff6600; /* Cambio de color a naranja al pasar el ratón */
        }

        .navigation {
            text-align: center;
            margin-bottom: 20px;
        }

        .navigation a {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 10px;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navigation a:hover {
            background-color: #ff6600; /* Cambio de color a naranja al pasar el ratón */
            color: #fff;
        }

        .section {
            margin-bottom: 40px;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #ff6600; /* Cambio de color a naranja */
            text-align: center; /* Añadido */
        }

        .section-content {
            display: flex;
            align-items: center;
            justify-content: center; /* Añadido */
        }

        .section-content p {
            max-width: 80%; /* Añadido */
            text-align: center; /* Añadido */
        }

        .section-content img {
            max-width: 300px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <h1>Welcome to Phoenix Landing Page</h1>
    </div>

    <br>

    <div class="navigation">
        @if (Route::has('login'))
            <nav>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" >Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</div>

</body>
</html>
