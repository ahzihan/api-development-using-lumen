<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Answer extends Model 
{
    use HasFactory;
    protected $table="answer";
    protected $fillable = [
        'user_id', 'quiz_id', 'answer',
    ];

    
    public function quiz(){
        return $this->belongsTo('App\Models\Quiz');
    }
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}
