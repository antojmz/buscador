<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Session;
use Log;
use Auth;
use View;
// Modelo
use App\Models\Search;
use App\Models\Estadistica;


class SearchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function getSearch(){
        return View::make('busqueda.busqueda');
    }

    public function getEstadisticas(){
        $model= new Estadistica();
        $result['estadistica'] = $model->getEst();
        return View::make('estadistica.estadistica',$result);
    }

    public function postSearch($string){
        $model= new Search();
        $result = $model->getSearch($string);
        if(count($result) > 0){
            $est = new Estadistica(); 
            $est->descripcion = $string; 
            $est->save(); 
        }
        return $result;
    }

}
