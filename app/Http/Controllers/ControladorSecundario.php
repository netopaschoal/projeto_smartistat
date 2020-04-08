<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Dispositivo;
use App\Dado;
use App\User;

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
}
