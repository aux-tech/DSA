<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\redes;
use App\unidades;
use App\ucs;
use App\faturas;

class ControladorRelatorio extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $rede = redes::all();
        $unidade = unidades::all();
        $ucs = ucs::all();
        $fatura = faturas::all();
        return view('admin.gerador_relatorio', compact('rede','unidade','ucs','fatura'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faturas = faturas::all();
        $unidade = unidades::all();
        $ucs = ucs::all();
        $rede = redes::all();
        $id = $request->input('uc_id');
        $data_i =$request->input('date_i');
        $data_f =$request->input('date_f');
        $fatura = $faturas->where('uc_id',$id)->sortByDesc('id');
        
        $economia = 0;
        $arvores = 0;
        $carbono = 0;
        $banhos = 0;
        $posi = 0;

        for($i = 0;$i<24;$i++){
            $gera[$i] = 0;
        }
        for($i = 0;$i<13;$i++){
            $gerador[$i]=0;
        }

        foreach($fatura as $item)
        {     
            if ($data_i."-01" <= $item->date && $data_f."-01" >= $item->date)
            {
                $economia += $item->geracao_mensal*0.8; 
                $arvores += $item->geracao_mensal*0.1244;
                $carbono += $item->geracao_mensal*5.04*pow(10,-4);
                $banhos += $item->geracao_mensal/(1.105*1000);                   

                if(intval(substr($data_i,0,4)) == intval(substr($data_f,0,4)) )
                {
                    $gerador[intval(substr($item->date,5,6))] = $item->geracao_mensal;
                }
                else
                {
                    if( intval(substr($item->date,0,4)) == intval(substr($data_i,0,4)) )
                    {
                        $gera[intval(substr($item->date,5,6))] = $item->geracao_mensal;    
                    }
                    else
                    {
                        $gera[intval(substr($item->date,5,6))+12] = $item->geracao_mensal;
                    }
                    $posi = intval(substr($data_i,5,6));
                    for($i = 1;$i<=(13-$posi);$i++){
                        $gerador[$i]=$gera[$i+$posi -1];
                    }
                    for($i = (14-$posi);$i<13;$i++){
                        $gerador[$i]=$gera[$i + $posi -1];
                    }

                }
                
            }
                
        }

        foreach($ucs as $uc){
            
            if($id == $uc->id){
                
                    $mesesuc[0] = str_replace('.',',',$uc->jan);
                    $mesesuc[1] = str_replace('.',',',$uc->fev);
                    $mesesuc[2] = str_replace('.',',',$uc->mar);
                    $mesesuc[3] = str_replace('.',',',$uc->abr);
                    $mesesuc[4] = str_replace('.',',',$uc->mai);
                    $mesesuc[5] = str_replace('.',',',$uc->jun);
                    $mesesuc[6] = str_replace('.',',',$uc->jul);
                    $mesesuc[7] = str_replace('.',',',$uc->ago);
                    $mesesuc[8] = str_replace('.',',',$uc->set);
                    $mesesuc[9] = str_replace('.',',',$uc->out);
                    $mesesuc[10] = str_replace('.',',',$uc->nov);
                    $mesesuc[11] = str_replace('.',',',$uc->dez);
                
            }
            if($posi != 0){
                for($k = 0;$k<12;$k++){
                    $aux[$k]=$mesesuc[$k];
                }
                for($i = 0;$i<12;$i++){
                    if( ($i+$posi) <= 12){
                        $mesesuc[$i] = $mesesuc[$i+$posi-1];
                    }else{
                        $mesesuc[$i]=$aux[$i+$posi-13];
                    }
                }
            }
        }

        return view('admin.relatorio', compact('rede','unidade','ucs','fatura','id','data_i','data_f','economia','arvores','carbono','banhos','gerador','posi','mesesuc'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
