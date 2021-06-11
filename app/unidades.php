<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidades extends Model
{
    protected $table = 'unidades';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'id','unidade', 'cnpj','alunos','endereco','contato','numero','email','rede_id'
	];
}
