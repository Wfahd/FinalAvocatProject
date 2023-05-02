<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Client;


class Affaire extends Model
{
    use HasFactory;


    protected $fillable = [
        'Name',
        'Description',
        'status',
        'client_id',
        'created_at',
        'priorité'
];



public function client(){
    return $this->belongsTo(Client::class);
}

}
