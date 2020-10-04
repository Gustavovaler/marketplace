<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function encuadrarFoto($foto_temp_name,$lienzo){
   
        $f = fopen("log.txt", 'a+');
        $temp_foto = $foto_temp_name;
        $medidas = getimagesize($temp_foto);
        $ancho = $medidas[0];
        $alto = $medidas[1];
        fwrite($f, 'ancho ='.$ancho.' -- alto = '. $alto.'\\n');
        
        $relacion = $ancho/$alto;
        //cargamos el fondo
        $lienzo = $lienzo;
        $foto = imagecreatefromjpeg($temp_foto);
    
        if ($medidas[0] > $medidas[1]) {
    
            $foto_escalada = imagescale($foto,800,-1);
            $diferencia = (800 -(800/$relacion))/2;
            $alto_nuevo = 800-($diferencia*2);
            
            //pegamos la imagen sobre el fondo
            imagecopy($lienzo,$foto_escalada,0,$diferencia,0,0,800,$alto_nuevo);
    
        }elseif ($medidas[0] < $medidas[1]) {
            
            $diferencia = (800-(800*$relacion))/2;
            $ancho_nuevo = 800-($diferencia)*2;
            $foto_escalada = imagescale($foto,$ancho_nuevo,800);
            //pegamos la imagen sobre el fondo
            imagecopy($lienzo,$foto_escalada,$diferencia,0,0,0,$ancho_nuevo,800);
        }else{
            $diferencia = 0;
            $foto_escalada = imagescale($foto,800,800);
            imagecopy($lienzo,$foto_escalada,0,0,0,0,800,800);
    
        }
    
        fclose($f);
        return $lienzo;
    
    
    }
}
