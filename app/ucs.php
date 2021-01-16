<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ucs extends Model
{
    protected $table = 'ucs';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'id','name', 'tarifa', 'unidade_id', 'jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'
	];
}
