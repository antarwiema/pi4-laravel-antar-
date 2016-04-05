<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $guarded = array('id');
    protected $fillable = array('nama', 'lokasi');
}
