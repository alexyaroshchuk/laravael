<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    protected $table = 'workers';
    protected $primaryKey = 'id_worker';
    public function settlementsheet() {
        return $this -> hasMany('App\SettlementSheets', 'id_worker', 'id_worker');
    }
    public function position() {
        return $this -> hasOne('App\WPosition', 'id_position', 'id_position');
    }
}
