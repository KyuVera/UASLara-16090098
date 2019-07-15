<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TblArtikel extends Model
{
    use SoftDeletes;
    protected $fillable =  ['judul', 'isi', 'gambar', 'deleted_at'
	];
	protected $dates = ['deleted_at'];
}
