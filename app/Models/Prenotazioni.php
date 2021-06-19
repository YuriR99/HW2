<?php
     namespace App\Models;

     use Illuminate\Database\Eloquent\Model;
    
     class Prenotazione extends Model {
        protected $table = 'prenotazione';
        protected $fillable = [
            'Data_Check_In','Data_Check_Out','Tipo'
        ];

        public function Users(){
            return $this->belongTo(User::class, 'ID', 'Persona');
        }
     }
?>