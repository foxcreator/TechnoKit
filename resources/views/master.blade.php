

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta property="og:description" content="Інтернет магазин якісної техникі" />
    <meta name="viewport" content="width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Moul|Anybody:Bold">
    <link rel="icon" href="{{ asset('Images/cat-7497114_640.png') }}" type="image/png" sizes="32x32">

    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>TechnoKit: @yield('title')</title>
    <style>
        html, body, .carousel{
            height: 60vh;
        }
        @media (max-width: 740px) {
            .html, body, .carousel{
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .html, body, .carousel{
                height: 100vh;
            }
        }
    </style>
</head>
<body>

<header>
    <a class="header-img" href="{{ route('index') }}">
    <img src="{{asset('Images/cat-7497114_640.png')}}" height="25px" width="25px">
    </a>
    <a class="header-logo" href="{{ route('index') }}">
        <div class="header-logos">TechnoKit</div>
    </a>
    <nav>
        <div class="topnav" id="myTopnav">
            <a href="{{ route('index') }}">Головна</a>
            <a href="{{ route('show', $category ?? '') }}">Каталог</a>
            <a href="{{ route('contacts') }}">Контакти</a>
            <a href="{{ route('aboutus') }}">Про нас</a>
            <a href="{{ route('basket') }}"><i class="bi bi-cart" style="font-size: 20px; font-weight: bold"></i></a>
            <a href="#" id="menu" class="icon">&#9776;</a>
        </div>
    </nav>
</header>




@yield('content')

<footer>
    <div class="container">
        <div class="row" style="color: aliceblue">
            <div class="col-3" style="font-size: 12px">© Created by FoxCreator</div>
            <div class="col-3" style="font-size: 12px"><a class="link-secondary" href="{{ asset('') }}" download>Договір оферти</a></div>
            <div class="col-3" style="font-size: 12px"><a class="link-secondary" href="{{ asset('') }}" download>Політика конфіденційності</a></div>
            <div class="col-3" style="font-size: 12px">All rights Reserved</div>
        </div>
    </div>
</footer>



<script src="/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


</body>


</html>

