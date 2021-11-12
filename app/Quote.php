<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = ['mount', 'termins', 'interests', 'initial_payment', 'quote'];
}
