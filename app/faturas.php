<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faturas extends Model
{
    protected $table = 'faturas';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'id','date','consumo_ponta', 'consumo_fora_ponta', 'consumo_total', 'demanda_medida', 'demanda_contratada', 'custo', 'geracao_mensal', 'injetada_fp', 'injetada_p',
         'saldo_mensal', 'saldo_acumulado', 'uc_id'
	];
}
