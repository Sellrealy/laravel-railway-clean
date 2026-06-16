<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guestbook extends Model
{
protected $fillable = [

    'nama',

    'lagu',

    'artist',

    'cover',

    'preview',

    'pesan'

];
}