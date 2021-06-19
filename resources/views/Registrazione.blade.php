<!DOCTYPE html>
<html>
<head>
    @include('layouts.Head')
    <script src="{{ asset('js\Registrazione.js') }}" defer="true"></script>
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
            <form name='signup' method='post' id="Reg" action="{{route('register1')}}"> 
            @csrf
                    <p><label>Nome <input type='text' name='nome' class="Nome"></label></p>
                    <span class="SNome"></span>
                    <p><label>Cognome <input type='text' name='cognome' class="Cognome"></label></p>
                    <span class="SCognome"></span>
                    <p><label>E-mail <input type='text' name='email' class="Email"></label></p>
                    <span class="SEmail"></span>
                    <p><label>Telefono <input type='text' name='Telefono' class="Telefono"></label></p>
                    <span class="STel"></span>
                    <p><label>Username <input type='text' name='user' class="Username"></label></p>
                    <span class="SUsername"></span>
                    <p><label>Password <input type='password' name='password' class="Password"></label></p>
                    <span class="SPassword"></span>
                    <p><label>Conferma Password <input type='password' name='CPassword' class="ConfirmPass"></label></p>
                    <span class="SConfirm"></span>
                    <p><label>Data Di Nascita <input type='date' name='data' class="Data"></label></p>
                    <span class="SData"></span>
                    <p><label><input type='submit' name="invia_dati" value="Registrati" id="submit"></label></p>
                <h3>Se sei già iscritto clicca su: <a href="{{route('login')}}" class="SL link">Login</a></h3>
            </form>
    </header>
    @include('layouts.Footer')
</body>
</html>