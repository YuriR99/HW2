<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Hotels extends Model {

        protected $table = 'hotel';

        protected $fillable = [
            'Nome','Città','Telefono','Stelle','Valutazione_Media',
        ];

        public function Recensioni(){
            return $this->belongsToMany(Recensioni::class);
        }

        public function Stanze(){
            return $this->hasMany(Stanza::class, 'Codice','Codice_Hotel');
        }
    }
    
?>