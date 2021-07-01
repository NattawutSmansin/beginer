<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonModel;
use App\Models\NemoModel;

class PersonController extends Controller
{
    public function index()
    {
        $personModels = new PersonModel;
        $nemoModels = new NemoModel;
   
        $personModels = $personModels->getPersonData();
        $nemoModels = $nemoModels->getNemoData();

       return view('welcome', compact( 'personModels', 'nemoModels' ));
    }
}
