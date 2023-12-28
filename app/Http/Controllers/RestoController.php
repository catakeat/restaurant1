<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestoController extends Controller
{
    function index(){
     return view('home');
    }

function list(){
    $lista = Restaurant::all();
    //return $lista;
       return view('list',['lista'=>$lista]);
}

}
