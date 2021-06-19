<?php

use Illuminate\Routing\Controller;
use App\Models\User;

class HomeController extends Controller {

    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user)){
            $user=array('username'=>null);
            return view('home')->with("user", $user);
        }
        
        return view("home")->with("user", $user);
    }
}
?>