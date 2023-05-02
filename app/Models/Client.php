<?php

namespace App\Models;
use App\Models\User;
use App\Models\Affaire;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(user::class) ; 
    } 
    public function Affaire(){
        return $this->hasMany(Affaire::class);
    }

   protected $fillable = [
                  'name',
                  'lastName',
                  'email',
                  'phone',
                  'sex',
                  'status',
                  'user_id'
   ];

}
