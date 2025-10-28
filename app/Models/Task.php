<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;             //

    protected $fillable = [    // Ont dit que les valeurs modifiables sont description,state
        'titre',
        'state',
        'user_id', // Ajout de user_id comme champ modifiable
    ];

    public function User()   // Relation entre taks et user (un taks appartient à un user)
    {
        return $this->belongsTo(User::class);
    }
}