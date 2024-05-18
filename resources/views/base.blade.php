<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav>
            <ul class="liste-items">
                <li class="items"> <a href="{{route('home.index')}}">RAPIDO</a> </li>
                <li class="items"> <a href="{{route('home.index')}}"></a> </li>
                <li class="items"> <a href="{{route('home.index')}}"></a> </li>
                <li class="items"> <a href="{{route('home.index')}}"></a> </li>
                <li class="items"> <a href="{{route('home.index')}}"></a> </li>
                <li class="items"> <a href="{{route('home.index')}}"></a> </li>
                <li class="items"> <a href="{{route('home.index')}}"></a> </li>


                @guest

                <li class="items">
                    <a href="{{route('login')}}" >Se Connecter</a>
                </li>

                @endguest
              
                @auth
                <li class="items">
                    <a href="{{route('login')}}" >{{Illuminate\Support\Facades\Auth::user()->name}}</a>
                </li>
                                
                <li class="items btn-nav">
                    <form action="{{route('logout')}}" method="post">
                        @csrf 
                        <button title="deconnexion" >Deconexxion</button>
                    </form>  
                </li>
                @endauth
               
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>