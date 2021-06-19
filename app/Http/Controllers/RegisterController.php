<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller {

        public function create(){
            $request = request();

            return User::create([
                'Nome' => $request->nome,
                'Cognome' => $request->cognome,
                'Email' => $request->email,
                'Telefono' => $request->Telefono,
                'username' => $request->user,
                'password' => Hash::make($request->password),
                'Data_N' => $request->data
            ]);
        }
        public function checkUsername($query){
            $exist = User::where('username',$query)->exists();
            return ['exists' => $exist];
        }
        
        public function checkEmail($query){
            $exist = User::where('email',$query)->exists();
            return['exists' => $exist];
        }

        public function index(){
            return view('Registrazione');
        }
    }
?>