<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use DB;
use Auth;
use App\Http\Controllers\expt;

class PrincipalController extends Controller
{
    public function index(){
    	return view('login');
    }
    public function pruebaE(){
        $encrypted = Crypt::encryptString('Hello world.');
        $decrypted = Crypt::decryptString($encrypted);
        return $encrypted.$decrypted;
    }

    public function registro(){
        return view('registro');
    }
    
    public function notificar($numero, $texto){
        $expertTexting = new experttexting_sms(); 
        $expertTexting->from    = 'Amigo Secreto'; // USE DEFAULT IN MOST CASES.
        $expertTexting->to      = '+52'.$numero;
        $expertTexting->msgtext = urlencode($texto);
        $expertTexting->Send();
       /* echo $expertTexting->QueryBalance();*/
        
    }
    public function orgIntercambio(Request $request){
        
        $input = $request->all();
        $info = array();
        $medida = (count($input)-1)/2;
        $reservador = array();
        for ($x = 1; $x <= $medida; $x++) {
            $nombre = $input["integrante".$x];
            $telefono = $input["telefono".$x];
            $tmp = array($nombre,$telefono);
            array_push($info, $tmp);
            } 
        shuffle($info);
        $user = Auth::user();
        $superTexto = $user->id.',';
        $campos="user_id,";
        for ($y = 0; $y<$medida;$y++){
            if($y==($medida-1)){
                array_push($info[$y],$info[0][0]);
                $superTexto=$superTexto.'"'.$info[$y][0].'","'.$info[$y][1].'","'.$info[$y][2].'"';
                $campos=$campos."compra".($y+1).",telefono".($y+1).",regala".($y+1)."";
            }else{
                array_push($info[$y],$info[($y+1)][0]);
                $superTexto=$superTexto.'"'.$info[$y][0].'","'.$info[$y][1].'","'.$info[$y][2].'",';
                $campos=$campos."compra".($y+1).",telefono".($y+1).",regala".($y+1).",";
            }
            $this->notificar($info[$y][1],"Hola ".$info[$y][0].",tu amigo secreto es:".$info[$y][2]);
        }
        $encrypted = Crypt::encryptString($input["clave_privada"]);
        $campos=$campos.",clave_privada";
        $superTexto=$superTexto.',"'.$encrypted.'"';
        DB::insert('insert into intercambio ('.$campos.') values('.$superTexto.')');
        // Creating an object of ExpertTexting SMS Class.
        return redirect()->route('listaInter');
    }

     public function misIntercambios(Request $request){
        $user = Auth::user();
        $intercambios = DB::select('SELECT * FROM intercambio WHERE user_id = '.$user->id);
        //return $intercambios;
        return view('web.misIntercambios')->with('intercambios', $intercambios);
    }

    public function aguaFiestas(Request $request){
        $id = $request->input('id');
        $pass = $request->input('pass');
        $intercambios = DB::table('intercambio')->where('id', $id)->pluck('clave_privada');
        $decrypted = Crypt::decryptString($intercambios);
        if($decrypted==$pass){
            $intercambio = DB::select('SELECT * FROM intercambio WHERE id = '.$id);
            $telefonos = DB::select('SELECT compra1,telefono1,compra2,telefono2,compra3,telefono3,compra4,telefono4,compra5,telefono5,compra6,telefono6,compra7,telefono7,compra8,telefono8,compra9,telefono9,compra10,telefono10,compra11,telefono11,compra12,telefono12 FROM intercambio WHERE id = '.$id);
            $ciclo = 0;
            $tmp = "";
            foreach ($telefonos as $telefono) {
                foreach ($telefono as $telephone) {
                if($ciclo==0){
                    $tmp=$telephone;
                    $ciclo++;
                }else{
                    $this->notificar($telephone,"Hola ".$tmp." , el administrador ha desbloqueado la lista y ya no es secreto.");
                    $tmp="";
                    $ciclo=0;
                }
                
                }
            }
            return view('web.detalle')->with('intercambio', $intercambio);
        }else{
            return '<script>alert("Clave privada no coincide");window.location.href = "'.route('listaInter').'";</script>';
        }

    }

}
