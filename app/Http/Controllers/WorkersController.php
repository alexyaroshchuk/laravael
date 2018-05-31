<?php

namespace App\Http\Controllers;


use App;
use App\Workers;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    public function showWorkers(){
        $workers = Workers::all();
        return view('workers', compact('workers'));
    }
}
