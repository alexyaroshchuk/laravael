<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettlementSheets extends Model
{
    protected $table = 'settlement_sheets';
    protected $primaryKey = 'id_settlement_sheets';
    protected $fillable = ['id_worker', 'annual_leave', 'sick_leave',
                            'awards_fine', 'hours', 'pay_date', 'id_taxes'];

    public function worker(){
        return $this -> belongTo('App\Workers');
    } 
}
