<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    //
    protected $table = 'inbox';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = ['name','email','message'];
}
