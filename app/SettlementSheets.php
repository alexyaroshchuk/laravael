<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettlementSheets extends Model
{
    protected $table = 'settlement_sheets';
    protected $primaryKey = 'id_settlement_sheets';
    
    public function worker(){
        return $this -> belongTo('App\Workers');
    } 
}
