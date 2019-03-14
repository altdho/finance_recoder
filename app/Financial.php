<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    //
    // default financials
    protected $fillable = ['nama', 'katagori', 'jumlah'];
    protected $primaryKey = 'id';
    protected $table = 'financial'; //to change default table name on our database, cause the default from laravel is financials.
}
