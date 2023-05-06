<?php

namespace App\Models;
use App\Models\Affaire;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    use HasFactory;

    protected $fillable = [
    'deadline',
     'next_steps' ,
    'notes',
    'document',
    'affaire_id'
    ];

 


    public function Affaire(){
        return $this->belongsTo(Affaire::class);
    }
}
