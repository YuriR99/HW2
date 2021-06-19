<!DOCTYPE html>
<html>
<head>
    @include('layouts.Head')
   
    <script> let username = "{{$user['username']}}"</script>
    <script src="{{ asset('js\Preferiti.js') }}" defer="true"></script>
    <script src="{{ asset('js\Utente.js') }}" defer="true"></script>
    
</head>
<body>
    <header id='P_Utente'>
        @include('layouts.NavBar')
        <div id="Info_U">
                <div id="T_U"></div>
                <br>
                <a href="{{route('logout')}}" id="logout" class="button link">Logout</a>
                <a id="Pref" class="button link">Preferiti</a>
            </div>
            <div id="Pref_U" class='N'>
                        <h1>I Tuoi Hotel Preferiti</h1>
            </div>
    </header>
    @include('layouts.Footer')
</body>
</html>