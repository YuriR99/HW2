<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recensioni extends Model {

    protected $table = 'valuta';

    protected $fillable = [
        'Persona','Codice_Hotel','Voto'
    ];

    public function Utenti(){
        return $this->beLongsTo(User::class, 'Persona','ID');
    }

    public function Hotels(){
        return $this->hasMany(Hotels::class, 'Codice','Codice_Hotel');
    }
}
?>