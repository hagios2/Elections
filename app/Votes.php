<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    protected $fillable = ['user_id', 'candidate'];
    
    public function vote()
    {
        return $this->belongsTo(User::class);
    }

    
}
