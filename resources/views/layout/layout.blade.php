<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite(['resources/js/app.js'])
<body style="min-height:100vh" class="d-flex flex-column justify-content-between">
    <div class="container-fluid p-0 m-0">
    <nav class="navbar" style="background-color:#0000FF;">
        <div class="container-fluid align-items-center justify-content-center">
        <span class="navbar-brand mb-0" style="color:#FFFFFF;">
            <h1 class="display-4">Happy Book Store</h1>
        </span>
        </div>
    </nav>
    <div class="row justify-content-center">
        <div class="col-lg-8">
        <nav class="navbar navbar-expand-lg bg-light justify-content-center">
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <div class="container justify-content-center">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                    <li class="nav-item">
                    <a class="nav-link" style="color:blue;" aria-current="page" href="{{ route('home')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color:blue;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                    @foreach($catnav as $c)
                            <li><a class="dropdown-item" href="{{ route('category', $c->id) }}">{{ $c->category }}</a></li>
                    @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" style="color:blue;" href="{{ route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        </div>
    </div>
    </div>


    @yield('contents')
    
    <footer class="d-flex flex-column align-items-center"> 
        <h5 class="bg-primary text-light p-0 m-0 text-center" style="width:100%">© Happy Book Store 2021</h5>
    </footer>
</body>
</html>