<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
	//public $timestamps = true;
	protected $fillable = [
		'id',
		'titulo',
		'autor',
		'texto',
		'imagen',
		'created_at',
		'updated_at'

	];
	protected $primaryKey='id';
	protected $table='noticias';
}
