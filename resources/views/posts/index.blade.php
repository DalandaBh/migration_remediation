<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Laravel remediation</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="{{route('post.index')}}">Posts<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/albums">Albums</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="" >
                        Photos
                    </a>
                  
                </li>
                
                </ul>
                <form class="form-inline my-2 my-lg-0">
                </form>
            </div>
        </nav>
    </header>
    {{-- <div class="container">
        <h1 class="text-center mt-5">Welcome !</h1>
    </div> --}}
    <div class="container">
       @yield('content')
    </div>
</body>
</html>