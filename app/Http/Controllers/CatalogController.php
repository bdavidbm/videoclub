<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class CatalogController extends Controller
{
    public function getIndex(){
        $arrayPeliculas=movie::all();
        return view('catalog.index', compact('arrayPeliculas'));
    }

    public function getCreate(){
        return view('catalog.create');
    }

    public function getShow($id){
        $pelicula=Movie::findOrFail($id);
        return view('catalog.show', compact('pelicula'));
    }

    public function getEdit($id){
        $pelicula=Movie::findOrFail($id);
        return view('catalog.edit', compact('pelicula'));
    }
}
