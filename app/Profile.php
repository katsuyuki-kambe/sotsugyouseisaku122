<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

// Userテーブルとのリレーション （従テーブル側）
public function user() {
    return $this->HasOne('App\User');
}

}
