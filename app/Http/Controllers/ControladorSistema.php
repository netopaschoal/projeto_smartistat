<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Dispositivo;
use App\Dado;
use App\User;

class ControladorSistema extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function listar_categorias(){
        $user = Auth::user();

        $disp = Dispositivo::where('user_id', $user->id)->get();
        $temp[] = 0;
        $i = 0;

        return view('categorias', compact('disp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novo_dispositivo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $disp = new Dispositivo();
        $disp->nome_dispositivo = $request->input('nomeDispositivo');
        $disp->user_id = $user->id;
        $disp->email_notificacao ="nenhum email definido";
        $disp->alarme = "10";
        $disp->save();

        $dados = new Dado();
        $dados->dispositivo_id = $disp->id;
        $dados->save(); 
        return redirect('/lista_categorias');
    }

    public function mudar_grafico(Request $request, $id){
            $disp = Dispositivo::find($id);
            if(isset($disp)){
                 $inicio = $request->input('data_inicio');
                 $final = $request->input('data_final');
                 $data_concatenada = $inicio."D".$final;
                 $data_formatada = str_replace("/", "-", $data_concatenada);
                 $disp->data_grafico = $data_formatada;
                 $disp->save();
            }
        return redirect("/listar_dados/${id}");
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
      $disp = Dispositivo::find($id);
      if (isset($disp)) {
          $disp->delete();
      }  
      return redirect('/lista_categorias');
    }

    public function listar_dados($id)
    {
        $user = Auth::user();
        $lista_ids = explode("e", $id);
        $disp = Dispositivo::where('id',$id)->get();
        $dados = Dado::where('dispositivo_id',$id)->get();
        $temp[] = 0;
        $i = 0;
        if (count($disp) == 0)
            echo "<h2>Erro</h2>";
        else {
            foreach($disp as $d){
                $data_dispositivo = $d->data_grafico;
            }
            if(count($dados) == 0){
                echo "nao tem dados";
            }
            else{
                foreach($dados as $dado){
                    $temp[$i] = $dado->temperatura;
                $i++;
                }
            }
            
        $temp_max = max($temp);
        $temp_min = min($temp);
        $temp_media = round(array_sum($temp) / count($temp), 2);
        $temp_data = $dados[count($temp) - 1]['created_at']; // pega a ultima posicao do array
            if (strlen($data_dispositivo) > 6){
                $datas = explode("D", $data_dispositivo);
                $data_inicio = $datas[0]." - "; 
                $data_final = $datas[1]; 
    
            }
            else {
                $data_inicio = "Todo o ";
                $data_final ="período"; 
        }
    }
      return view('grafico', ['id_dispositivo'=>$id,'data_inicio'=>$data_inicio,
      'data_final'=>$data_final,'temp_max'=>$temp_max,'temp_min'=>$temp_min,
      'temp_media'=>$temp_media,'temp_data'=>$temp_data]);
    
}
    /**
     * Fetch the particular company details
    * @return json response
    */
   public function chart($id_dispositivo)
   {
    $user = Auth::user();
    
    $disp = Dispositivo::where('id',$id_dispositivo)->get();
    if (count($disp) == 0)
        echo "<h2>Você não possui usuarios cadastrados</h2>";
    else {
        foreach($disp as $d){
            $data_dispositivo = $d->data_grafico;
        }
        if (strlen($data_dispositivo) > 6){
            $datas = explode("D", $data_dispositivo);
            $data_inicio = $datas[0]; 
            $data_final = $datas[1]; 

            $result = \DB::table('dados')
              ->where('dispositivo_id',$id_dispositivo)
              ->whereDate('created_at', '>=',$data_inicio)
              ->whereDate('created_at', '<',$data_final)
              ->get();
  return response()->json($result);
        }
        else {
            $result = \DB::table('dados')
              ->where('dispositivo_id',$id_dispositivo)
              ->get();
            return response()->json($result);
        }
                
    }
   
    
  
}

}