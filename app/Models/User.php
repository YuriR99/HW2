<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'cliente';
    protected $primarykey = 'ID';
    protected $fillable = [
        'Nome','Cognome','username','Email','Data_N','Telefono',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function prenotazioni() {
        return $this->hasMany(Prenotazione::class, 'Persona', 'ID');
    }

    public function Recensioni() {
        return $this->hasMany(Recensioni::class);
    }

    public function Accettazione(){
        return $this->hasMany(Accettazione::class, 'ID','Id_Utente');
    }
}
