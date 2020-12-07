<?php

namespace App\Http\Controllers;

use App\Model\FreeClassModel;
use Illuminate\Http\Request;

class FreeClassController extends Controller
{
    function FreeClassPage(){
        $freeclass= FreeClassModel::all();
        return view('Page.freeClass',[
            'freeclass'=>$freeclass
        ]);
    }
}
