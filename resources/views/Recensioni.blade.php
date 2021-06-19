<!DOCTYPE html>
<html>
<head>
    @include('layouts.Head')
    <script src="{{ asset('js\Valutazioni.js') }}" defer="true"></script>
</head>
<body>
    <header id='Recensioni'>
        @include('layouts.NavBar')
        @if($user['username'] == null)
        <div class='Attenzione'><h1>Per poter visualizzare o lasciare una recensione</h1> <a href='Login.php' class='button' class='link'>Accedo o Registrati</a></div>
                   @else
                                    <script>let id = "{{$user['ID']}}"</script>
                    
                                    <section id = 'voti'>
                                    <div Id='VotiU'><h1>Ecco I Voti Dei Nostri Utenti</h1></div>
                                    <div id='VotiH'><h1>Le Valutazioni Dei Nostri Hotel</h1>
                                    <div class='lineaHV'></div></div>
                                    </section>
                   @endif
    </header>
    @include('layouts.Footer')
</body>
</html>