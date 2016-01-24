<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['name'];

    //One ToDo belongs to one User
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
