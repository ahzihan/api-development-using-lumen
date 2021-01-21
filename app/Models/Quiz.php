<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Quiz extends Model 
{
    use HasFactory;
    protected $table="quiz";
    protected $fillable = [
        'question', 'options', 'answer',
    ];

    
    public function answer(){
        return $this->hasMany('App\Models\Answer');
    }
}
