<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    // Userテーブルとのリレーション （従テーブル側）
    public function user() {
        return $this->belongsTo('App\User');
    }
}
