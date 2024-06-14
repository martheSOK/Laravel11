<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
    <style>
        nav ul li{
            list-style: none;
            padding-left:25pX
        }

        nav ul li a{

            list-style: none;
            text-decoration:none;

        }

        nav ul{
            display: flex;




        }
        nav{
            width:100%;
            height: 50px;
            background: #e6c2c2;
        }
    </style>
</head>
<body>

    <h1 style="margin-top:20px ; color: rgb(204, 100, 15)">Page about</h1>
    <nav>
        <ul>
            <li><a href="{{ route('welcome') }}">Welcome</a></li>
            <li><a href="{{ route('about') }}">about</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>


</body>
</html>
