<!DOCTYPE html>
<html>
    <head>
        @include('layouts.Head')
    </head>
    <body>
        <header>
            <div id="Testo1">
                <div id="detTesto">
                    Find Your Hotel
                    Quickly And Easily With <strong>Easy Hotels !</strong>
                </div>
            </div>
            @include('layouts.NavBar')
        </header>
            <section>
              <div id="Testo">
                <div id="Testo2">
                <h1>Ecco Cosa Puoi Fare Nel Nostro Sito</h1>
                </div>
                <div id="linea"></div>
              </div>
                <div class="det">
                    <div id="I1">
                        <img src='{{ asset("Immagini/ricercahotel1.jpg") }}'>
                        <p>Nel nostro sito potrai cercare l'hotel più adatto a te</p>
                        <h1>Cliccando su Cerca Hotel</h1>
                    </div>
                    <div id="I2">
                        <img src='{{ asset("Immagini/prenotazioni.jpg") }}'>
                        <p>Puoi gestire le tue prenotazioni facilmente</p>
                        <h1>Cliccando su Le Tue Prenotazioni</h1>
                        </div>
                </div>
                <div class="det">
                    <div id="I3">
                        <img src='{{ asset("Immagini/Recensioni.jpg") }}'>
                        <p>Puoi anche lasciare una recensione con un voto da 1 a 5</p>
                        <p>cosi potrai aiutare altre persone con le proprie ricerche</p>
                        <h1>Cliccando su Recensioni</h1>
                    </div>
                </div>
            </section>
            @include('layouts.Footer')
    </body>
</html>