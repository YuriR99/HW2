<?php

use Illuminate\Routing\Controller;
use App\Models\Hotels;
use App\Models\Stanza;
use App\Models\Prenotazione;
use App\Models\User;
use App\Models\Preferiti;
use App\Models\Accettazione;
use App\Models\Recensioni;
use PhpParser\Node\Expr\FuncCall;

class QueryController extends Controller {
   
    public function Hotel(){
        return Hotels::all();
    }

    public function Stanze(){
        $Nome=$_GET['NomeH'];
        return Stanza::select('Piano','Tipo')->join('hotel','codice','=','Codice_Hotel')->where("Nome",'=',$Nome)->get();
    }

    public function Prenotazioni(){
        $Utente = $_GET['Username'];
        return User::with('prenotazioni')->where('username','=',$Utente)->get();
    }

    public function Piu_Inf(){
        $Utente = $_GET['Username'];
        return Prenotazione::select('Hotel.Nome','Città','Hotel.Telefono','Stelle','Data_Check_In','Data_Check_Out','Stanza.Tipo')->join('Cliente','ID','=','Persona')->join('Stanza','ID_Stanza','=','Codice_HS')->join('Hotel','Codice','=','Codice_Hotel')->where('Username','=',$Utente)->get();
    }

    public function Utente(){
        $Utente = $_GET['Username'];
        return User::select('Nome','Cognome','username','Email','Data_N','Telefono')->where('username','=',$Utente)->get();
    }

    public function CercaH(){
        $Citta = $_GET['Citta'];
        $curl = curl_init();

            curl_setopt_array($curl, [
            CURLOPT_URL => "https://hotels4.p.rapidapi.com/locations/search?query=$Citta&locale=it_IT",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: hotels4.p.rapidapi.com",
                "x-rapidapi-key: f125ec2f2cmsh085b904746877d3p12d53ajsn41af6b56e9e4"
            ],
        ]);
   
            $response = curl_exec($curl);
            $err = curl_error($curl);
   
            curl_close($curl);
   
        if($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

    public function AggPref(){
        $request = request();

        return Preferiti::create([
            'Id_Utente' => $request->query('ID'),
            'Nome_Hotel' => $request->query('Hotel')
        ]);
    }

    public function VediP(){
        
        return Preferiti::with('Users1')->select('Nome_Hotel')->get();
        //->join('Cliente','Cliente.ID','=','Id_Utente')->where('username','=',$Username)
    }

    public function RichiediAccettazione(){
        $request = request();

        return Accettazione::create([
            'Id_Utente' => $request->query('ID'),
            'Nome_Hotel' => $request->query('Hotel'),
            'Tipo_Stanza' => $request->query('Stanza'),
            'Data_In' => $request->query('Data')
        ]);
    }

    public function VisualizzaAccettazioni(){
        return Accettazione::with('Utenti')->select('Nome_Hotel','Tipo_Stanza','Data_In')->get();
    }

    public function EliminaPref(){
        $NomeH= $_GET['NomeH'];
        return Preferiti::with('Users1')->where('Nome_Hotel','=',$NomeH)->delete();
    }

    public function VotiHotels(){
        return Hotels::select('Nome','Valutazione_Media')->get();
    }

    public function Votiutenti(){
        return Recensioni::select('Voto','Cliente.username','Hotel.Nome')->join('Cliente','ID','Persona')->join('Hotel','Codice','Codice_Hotel')->get();
        //return Recensioni::with('Utenti')->with('Hotels')->get();
    }

    public function InviaVoto(){
        $request = request();

        return Recensioni::create([
            'Persona' => $request->query('ID'),
            'Codice_Hotel' => $request->query('Hotel'),
            'Voto' => $request->query('Voto')
        ]);
    }

    public function IdHotel(){
        $Nome = $_GET['Nome'];
        return Hotels::select('Codice')->where('Nome','=',$Nome)->get();
    }
}
?>