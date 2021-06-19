<!DOCTYPE html>
<html>
<head>
    @include('layouts.Head')
    <script>let username = "{{$user['username']}}"</script>
    <script src="{{ asset('js\prenotazioni.js') }}" defer="true"></script>
    <script src="{{ asset('js\Accettazioni.js') }}" defer="true"></script>
</head>
<body>
    <header id='Prenota'>
        @include('layouts.NavBar')
        @if($user['username'] == null)
        <div class='Attenzione'><h1>Per poter visionare lo storico delle prenotazione bisogna essere iscritti</h1> <a href='Login.php' class='button' class='link'>Accedo o Registrati</a></div>
                   @else
                   <div id='Prenotazioni'>
                    <h1>Storico Prenotazioni</h1>
                    </div>
                    <div id ='IA'>
                    <h1>Le Tue Prenotazioni In Fase D'Accettazione</h1>
                    </div>";
                   @endif
    </header>
    @include('layouts.Footer')
</body>
</html>