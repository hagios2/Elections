<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    protected $fillable = ['candidate'];
    
    public function voter()
    {
        return $this->belongsTo(User::class);
    }
}
