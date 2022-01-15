<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //減らすprotected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/topindex';
    //protected $redirectTo = RouteServiceProvider::topindex;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');


    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // 12/31追記　バリデーションルールとエラーメッセージは、
        // UserControllerと共用したいので、Userモデルに移動しています。
        return Validator::make($data, User::$rules, User::$messages);
    }
   // 12/31追記{
        //return Validator::make($data, [
            //'name' => ['required', 'string', 'max:255'],
           // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           // 'password' => ['required', 'string', 'min:8', 'confirmed'],
      //  ]);
  //  }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
    return User::create([
           'name' => $data['name'],
           'name_furigana' => $data['name_furigana'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'birthday' => $data['birthday'],
            'sex' => $data['sex'],
            'postal_code' => $data['postal_code'],
            'prefcture' => $data['prefecture'],
            'city' => $data['city'],
            'town' => $data['town'],
            'building' => $data['building'],
            'job' => $data['job'],
            'company' => $data['company'],
            'password' => Hash::make($data['password']),
        ]);

    }
}
