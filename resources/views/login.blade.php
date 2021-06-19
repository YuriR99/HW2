<!DOCTYPE html>
<html>
<head>
    @include('layouts.Head')
</head>
<body>
    <header id='loginS'>
    <nav>
                <div id="Barra">
                    <div id="logo">
                        <img src='{{ asset("Immagini/Logo H.png") }}'>
                    </div>
                </div>
                <div id="Barra2">
                    <a href="{{route('home')}}" class="link">Home</a>
                    <a href="{{route('recensioni')}}" class="link">Recensioni</a>
                    <a href="{{route('CercaH')}}" class="link">Cerca Hotel</a>
                    <a href="{{route('prenotazioni')}}" class="link">Le Tue Prenotazioni</a>
                </div>
                <div>
                </div>
                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
</nav>
                <form method='post' id="Log" action="{{route('login1')}}"> 
                @csrf
                    <p><label>Username <input type='text' name='username'></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>
                    <p><label><input type='submit' name='invia_dati'></label></p>
                    <h3>Se non sei iscritto clicca su: <a href="{{route('register')}}" class="SL link">Sign In</a></h3>
                </form>
    </header>
    @include('layouts.Footer')
</body>
</html>