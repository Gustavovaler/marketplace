<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localidad;

class UtilsController extends Controller
{
    public function get_localidades(Request $request, $provincia){
      
        if (!$request->provincia) {
            $html = '<option value="">'.trans('global.pleaseSelect').'</option>';
        } else {
            $html = '';
            $localidades = Localidad::where('provincia', $provincia)->orderBy('nombre')->get();
            foreach ($localidades as $localidad) {
                $html .= '<option value="'.$localidad->id.'">'.$localidad->nombre.'</option>';
            }
        }
    
        return response()->json(['html' => $html]);
    }
}
