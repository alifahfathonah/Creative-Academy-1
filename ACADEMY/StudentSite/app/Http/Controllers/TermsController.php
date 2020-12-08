<?php

namespace App\Http\Controllers;

use App\Model\TermModel;
use Illuminate\Http\Request;
class TermsController extends Controller
{
    function TermPage(){
        $term= TermModel::all();
        return view('Page.term',[
            'term'=>$term
        ]);
    }
}
