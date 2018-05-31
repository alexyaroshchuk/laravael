<?php

namespace App\Http\Controllers;
use App;
use App\Workers;
use App\SettlementSheets;
use Illuminate\Http\Request;

class WorkerInfoController extends Controller
{
    public function workerShow($id_worker){
        $worker = Workers::where('id_worker', $id_worker)->first();
        $workerAll = Workers::all();
        //dump($workerAll->settlementsheet);
        $settlementsheet = $worker -> settlementsheet;
        $worker_id=$worker->id_worker;
        $worker_id_position=$worker->id_position;
        dump($settlementsheet);
        return view('workerinfo', compact('worker_id', 'worker_id_position', 'settlementsheet')); 
        
    }
}
