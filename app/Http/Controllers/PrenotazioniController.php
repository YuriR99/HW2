<?php

use Illuminate\Routing\Controller;
use App\Models\User;

class PrenotazioniController extends Controller {

    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user)){
            $user=array('username'=>null);
            return view('Prenotazioni')->with("user", $user);
        }
        
        return view("Prenotazioni")->with("user", $user);
    }
}
?>