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
                   @if($user['username'] == null)
                                <div id='login'>
                                <a href="{{route('login')}}" class='button' class='link'>Login/Sign In</a>
                                </div>
                   @else
                                <a href="{{route('profilo')}}" id='utente' class='button link'>Profilo {{$user['username']}}</a>
                   @endif
                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
</nav>