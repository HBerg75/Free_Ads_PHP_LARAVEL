<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Http\Requests\getAnnonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
   public function annonceCreate(){
    return view('create');
   }

    public function getAnnonce(getAnnonce $request){

        $validated = $request->validated();
        // $path = $request->file('photo')->store('/Annonce');
        // $pathSaved = $request->file('photo')->store('/Annonce');



        $ad = new Annonce();
        $ad->title = $validated['title'];
        $ad->description = $validated['description'];
        // $ad->photo = $pathSaved;
        $ad->localisation = $validated['localisation'];
        $ad->price = $validated['price'];
        $ad->id_users = auth()->id();
        $ad->save();

return view('success');

   }
}
