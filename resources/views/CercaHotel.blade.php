<!DOCTYPE html>
<html>

<head>
    @include('layouts.Head')
    <script src="{{ asset('js\Script.js') }}" defer="true"></script>
    <script src="{{ asset('js\Hotels.js') }}" defer="true"></script>
</head>

<body>
    <header id='CRH'>
        @include('layouts.NavBar')
        @if($user['username'] == null)
        <div class='Attenzione'>
            <h1>Per poter cercare o visualizzare la lista degli hotel disponibili</h1> <a href='Login.php' class='button' class='link'>Accedo o Registrati</a>
        </div>
        @else
        <script>let Id = "{{$user['ID']}}" </script>
        <div id='Sez'>
            <div id='Hotel'>
                <h1>Hotel Disponibili</h1>
                <p>Clicca Sul Nome Di Un Hotel Per Avviare La Prenotazione</p>
                <div class='lineaHV'></div>
            </div>
        </div>
        @endif
    </header>
    @if($user['username'] != null)
    <section id='List'>
        <h1>Altri Hotel</h1>
        <p>Cerca Hotel Nella Tua Città Di Tuo interesse</p>
        <p><input id='Ricerca' name='C' type='text' placeholder='Cerca'>
            <input id='R' type='submit' name='invia_dati'>
        </p>
        <div class='linea'></div>
        <div id='ListaH'>
        </div>
    </section>";
    @endif
    @include('layouts.Footer')
</body>

</html>