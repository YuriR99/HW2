<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stanza extends Model {
    protected $table = 'stanza';
    protected $fillable = [
        'Piano','Tipo',
    ];

    public function Hotels(){
        return $this->hasOne(Hotel::class, 'Codice_Hotel','Codice');
    }
}
?>



