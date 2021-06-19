<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Preferiti extends Model {

        protected $table = 'preferiti';

        protected $fillable = [
            'Id_Utente','Nome_Hotel'
        ];

        public function Users1(){
            return $this->belongsTo(User::class, 'Id_Utente','ID');
        }
    }
    
?>