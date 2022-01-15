<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','name_furigana','postal_code','prefecture','city','town','building','sex','phone_number','job','company','birthday'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //12/31追加
    public static $rules = [
        
        'name' => ['required', 'string', 'max:50'],
        'name_furigana' => ['required', 'string', 'max:50'],
        'email' => ['required', 'string', 'email:rfc', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'postal_code' => ['required', 'regex:/^[0-9]{3}-[0-9]{4}$/'],
        'prefecture' => ['required'],
        'city' => ['required', 'max:50',],
        'town' => ['required', 'max:50'],
        'building' => ['max:50'],
        'sex' => ['max:1'],
        'phone_number' => ['required', 'regex:/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{4}$/'],
    ];
    
    public static $messages = [
        'name.required' => 'お名前を入力してください。',
        'name.max' => 'お名前は50文字以内で入力してください。',
        'name_furigana.required' => 'フリガナを入力してください。',
        'name_furigana.max' => 'フリガナは50文字以内で入力してください。',
        'email.required' => 'E-mailアドレスを入力してください。',
        'email.email' => '正しいE-mailアドレスを入力してください。',
        'email.max' => 'E-mailアドレスは255文字以内で入力してください。',
        'email.unique' => 'そのメールアドレスは既に登録されています。',
        'postal_code.required' => '郵便番号を入力してください。',
        'postal_code.regex' => '郵便番号は、半角数字3桁、半角ハイフン、半角数字4桁、の形式で入力してください。',
        'prefecture.required' => '都道府県を入力してください。',
        'city.required' => '市区町村を入力してください。',
        'city.max' => '市区町村は50文字以内で入力してください。',
        'town.required' => '町名番地等を入力してください。',
        'town.max' => '町名番地等は50文字以内で入力してください',
        'building.required' => '建物等は50文字以内で入力してください。',
        'sex.required' => '男性は１、女性は２を選択してください。',
        'phone_number.required' => '電話番号を入力してください。',
        'phone_number.regex' => '電話番号は、半角数字と半角ハイフンで入力してください。'
    ];
//12/31追加
 



// Profileテーブルとのリレーション （主テーブル側）
public function Profile() {
    return $this->hasMany('App\Profiles');
}

// Loanテーブルとのリレーション （主テーブル側）
public function Loan() {
    return $this->hasMany('App\Loan');
}

// Courtテーブルとのリレーション （主テーブル側）
public function court() {
    return $this->hasMany('App\Court');
}

// Debtorテーブルとのリレーション （主テーブル側）
public function debtor() {
return $this->hasMany('App\Debtor');
}

}


