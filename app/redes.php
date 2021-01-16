<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class redes extends Model
{
    protected $table = 'redes';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'id','name', "user_id"
	];
}
