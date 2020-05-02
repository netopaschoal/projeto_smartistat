<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Dispositivo;
use App\Dado;
use App\User;
use App\Events\AlarmeEvent;

class ControladorSecundario extends Controller
{
    public function mudar_unidade($id,$unidade){
        $disp = Dispositivo::find($id);
        if(isset($disp)){
             $disp->unidade_temp = $unidade;
             $disp->save();
        }
    return redirect("/listar_dados/${id}");
    

}

public function gravar(Request $request){
    $data = $request->all();

    $disp = Dispositivo::where('id',$data['dispositivo_id'])->get();
    foreach($disp as $d){
        $email = $d->email_notificacao;
        $nome_dispositivo = $d->nome_dispositivo;
        $temperatura = $d->temp_max;
    }
   
   $valor = new Dado();
   $valor->temperatura = $data['temperatura'];
   $valor->dispositivo_id = $data['dispositivo_id'];

   $valor->save(); 
   // dispara o evento se a temperatura for maior que o valor setado pelo usuario
   if($data['temperatura'] > $temperatura){
       event(new AlarmeEvent($email));
   }
}

public function teste_botao()
{
    $disp = Dispositivo::find(1);
    return view('teste_botao', compact('disp'));
}

public function updateStatus(Request $request)
{
    $disp = Dispositivo::findOrFail($request->user_id);
    $disp->alarme = $request->status;
    $disp->save();

    return response()->json(['message' => 'Notificação por email ativada']);
}
}
