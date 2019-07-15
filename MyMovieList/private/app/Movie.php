<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class movie extends Model
{
	use SoftDeletes;
    protected $fillable =  ['movie', 'sinopsis', 'genre', 'tanggal_rilis', 'rating_usia', 'gambar', 'deleted_at'
	];
	protected $dates = ['deleted_at'];
}
