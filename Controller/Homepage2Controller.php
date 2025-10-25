<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articoli;

class Homepage2Controller extends Controller
{
    public function index(){
        $articoli = Articoli::paginate(3);
        return view('homepage', compact('articoli'));
    }

    public function getArticoloById($id){
        $articolo = Articoli::find($id);
        if($articolo){
        return view('articolo', compact('articolo'));}
        else{
            return redirect('/homepage2');
        }
    }

    public function add(){
        return view('articoli-add');
    }

    public function create(Request $request){
        
        //Validate
        $this->validate($request, [
        
        'titolo' => 'required',
        'testo'=> 'required'
        ], [
            'titolo.required' =>'specifica un titolo',
            'testo.required' =>'specifica un testo'
        ]);


        $articolo = new Articoli;
        $articolo->titolo = $request->input('titolo');
        $articolo->sottotitolo = $request->input('sottotitolo');
        $articolo->autore = $request->input('autore');
        $articolo->testo = $request->input('testo');
        $articolo->foto = $request->input('foto');
        $articolo->save();
        return redirect('/homepage')->with('success_message', 'L&apos;articolo è stato salvato correttamente');

    }
}
