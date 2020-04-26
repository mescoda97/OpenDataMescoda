<?php

namespace App\Http\Controllers;

use Notification;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class preus_bcn extends Controller
{
    public function import(){

    	Excel::import(new preus_bcn, '2018_lloguer_preu_trim.csv');
    	return redirect('/')->with('success', 'All good!');
    	//Notification::success('Success message');
    }
}
