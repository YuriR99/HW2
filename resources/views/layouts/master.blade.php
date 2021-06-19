<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Hotels</title>
        <link rel="stylesheet" href='{{ asset("MHW.css") }}'>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Merriweather&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Merriweather&family=Pangolin&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Lobster&family=Merriweather&family=Pangolin&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<nav>
                <div id="Barra">
                    <div id="logo">
                        <img src='{{ asset("Immagini/Logo H.png") }}'>
                    </div>
                </div>
                <div id="Barra2">
                    <a href="MHW.php" class="link">Home</a>
                    <a href="Recensioni.php" class="link">Recensioni</a>
                    <a href="MHW2.php" class="link">Cerca Hotel</a>
                    <a href="Prenotazioni.php" class="link">Le Tue Prenotazioni</a>
                </div>
                   @if (Route::has('login'))
                                
                                <div id='login'>
                                <a href='Login.php' class='button' class='link'>Login/Sign In</a>
                                </div>
                   @else
                                <a href='Profilo_Utente.php' id='utente' class='button link'>Profilo $utente</a>
                   @endif
                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
            </nav>
            @yield
            <footer>
                    <div id="loghi">
                    <img src='{{ asset("Immagini/Logo instagram.png") }}'>
                    <img src='{{ asset("Immagini/Logo facebook.png") }}'>
                    </div>
                    <p><b>Yuri Alfio Randazzo</b><br>
                    <b>O46002285</b>
                    </p>
            </footer>
</body>
</html>