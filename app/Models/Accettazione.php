<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Accettazione extends Model {

        protected $table = 'Accettazione';

        protected $fillable = [
            'Nome_Hotel','Tipo_Stanza','Data_In'
        ];

        public function Utenti(){
            return $this->belongsTo(User::class, 'Id_Utente','ID');
        }
    }
    
?>