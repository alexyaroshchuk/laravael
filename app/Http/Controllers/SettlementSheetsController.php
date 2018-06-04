<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SettlementSheets;

class SettlementSheetsController extends Controller
{
    public function addSS(){
            return view('addSS');
    }

    public function storeSS(Request $request) {
        $id_settlement_sheets = $request ->id_settlement_sheets;
        $id_worker = $request->id_worker;
        $annual_leave = $request->annual_leave;
        $sick_leave = $request->sick_leave;
        $awards_fine = $request->awards_fine;
        $hours = $request->hours;
        $pay_date = $request->pay_date;
        $id_taxes = $request->id_taxes;

        SettlementSheets::create([
        'id_settlement_sheets'=>$id_settlement_sheets,
        'id_worker'=>$id_worker,
        'annual_leave'=>$annual_leave,
        'sick_leave' => $sick_leave,   
        'awards_fine' => $awards_fine,   
        'hours' => $hours,   
        'pay_date' => $pay_date,   
        'id_taxes' => $id_taxes     
        ]);      
      //return redirect()->back()->with('message', 'Расчетный лист добавлен');                                                
    }
}
