<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class Pages extends Controller
{
    
    public function set_locale($lang){
    
        //Cookie::queue( Cookie::make('lang', $lang, 20) );
        return redirect()->route('inicio');
    }
    public function index()
   {
       // dd(App::getLocale(), Cookie::get('lang'));
        return view('inicio');
    }
    public function aboutus()
    {
        return view('nosotros');
    }

      public function services()
      
    {
        return view('servicios');
    }
    public function contacto()
      
    {
        return view('contacto');
    }
    public function servicio_competitividad()
      
    {
        return view('servicio_competitividad');
    }
    public function servicio_estudios()
      
    {
        return view('servicio_estudios');
    }
    public function servicio_gestion()
      
    {
        return view('servicio_gestion');
    }
    public function servicio_inversiones()
      
    {
        return view('servicio_inversiones');
    }
    public function servicio_legal()
      
    {
        return view('servicio_legal');
    }
    public function servicio_tech()
      
    {
        return view('servicio_tech');
    }
    public function empleos()
      
    {
        return view('empleos');
    }
    public function experiencia()
      
    {
        return view('experiencia');
    }
    public function login()
      
    {
        return view('login');
    }
}   
