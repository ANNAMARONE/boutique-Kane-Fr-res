<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable=[
        'prenom',
        'nom',
        'adresse',
        'telephone',
        'prenom',
        'email'


    ];
    public function produit()
    {
        return $this->hasMany(Produit::class);
        //Ou return $this->hasMany(Post::class, 'foreign_key');
    }
    public function commandes()
    {
        return $this->hasMany(Commande::class);
        //Ou return $this->hasMany(Post::class, 'foreign_key');
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
