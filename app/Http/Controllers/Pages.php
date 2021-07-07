<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use App\Mail\ContactenosMailable;
use Illuminate\Support\Facades\Mail;

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
    public function rudylaguna()
    {
        return view('Rudy');
    }
    public function vivianasanchez()
    {
        return view('Viviana');
    }
    public function sergiovillegas()
    {
        return view('Sergio');
    }
    public function alvaroorozco()
    {
        return view('Alvaro');
    }
    public function katherine()
    {
        return view('Katy');
    }
    public function geneolarte()
    {
        return view('Gene');
    }

      public function services()
      
    {
        return view('servicios');
    }
    public function contacto()
      
    {
        return view('contacto');
    }
//$image_one->getClientOriginalName()
    public function store(Request $request){

        $correo =new ContactenosMailable($request->all());

        Mail::to('CarlosAvalosch02@gmail.com')->send($correo);
        return 'Mensaje Enviado';

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
    //-------
    public function visionmision()
      
    {
        return view('visionmision');
    }
    public function publicaciones()
      
    {
        return view('publicaciones');
    }
    public function noticias()
      
    {
        return view('noticias');
    }
    public function videos()
      
    {
        return view('videos');
    }
    public function qrverificado()
      
    {
        return view('qrverificado');
    }
}   
