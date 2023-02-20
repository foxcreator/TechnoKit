

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Moul|Anybody:Bold">

    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>TechnoKit: @yield('title')</title>
    <style>
        html, body, header, .carousel{
            height: 60vh;
        }
        @media (max-width: 740px) {
            .html, body, header, .carousel{
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .html, body, header, .carousel{
                height: 100vh;
            }
        }
    </style>
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container navi">


        <a href="{{ route('index') }}" class="navbar-brand">
            <strong class="blue-text"><img src="cat-7497114_640.png" height="25px" width="25px"></strong>
        </a>
        <a href="{{ route('index') }}" class="navbar-brand">
            <strong class="blue-text headtext">TechnoKit</strong>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarContent" style="margin-left: 50%">
            <ul class="navbar-nav mr-auto text-menu">
                <li class="nav-item active">
                    <a href="{{ route('index') }}" class="nav-link">Главная</a>
                </li>
                <li class="nav-item">
                    {{-- TODO Настроить роут на каталог!! ошибка неизвесная переменная --}}
                    <a href="{{ route('category') }}" class="nav-link">Каталог</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Контакты</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">О нас</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('basket') }}" class="nav-link">
                        <h5 style="font-weight: bold"><i class="bi bi-cart"></i></h5>
                    </a>
                </li>
            </ul>


        </div>
    </div>
</nav>


@yield('content')

<footer>
    <div class="container">
        <div class="row" style="color: aliceblue">
            <div class="col-4">1asdasd</div>
            <div class="col-4">2asdasd</div>
            <div class="col-4">3asdasd</div>
            <div class="col-4">4asdasd</div>
        </div>
    </div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>


</html>

