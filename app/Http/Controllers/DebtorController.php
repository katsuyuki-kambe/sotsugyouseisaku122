<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Debtor; //この行を上に追加
use App\User;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//この行を上に追加

class DebtorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('debtor/post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //新規登録
         $debtor = new debtor(); // ログインしている人のid番号に該当するユーザー情報をUserテーブルからとってきて$user変数に格納
        

         //追加記述 12/19
         $debtor->debtor_name = $request->debtor_name; 
         $debtor->debtor_postal_code = $request->debtor_postal_code; 
         $debtor->debtor_prefecture = $request->debtor_prefecture;
         $debtor->debtor_city = $request->debtor_city;
         $debtor->debtor_town = $request->debtor_town;
         $debtor->debtor_building = $request->debtor_building;
         $debtor->debtor_phone_number = $request->debtor_phone_number;
         $debtor->billing_amount = $request->billing_amount;
         $debtor->annual_interest = $request->annual_interest;
         $debtor->revenue_stamp_fee = $request->revenue_stamp_fee;
         $debtor->credential_fee = $request->credential_fee;
         $debtor->submission_fee = $request->submission_fee;
         $debtor->debtor_reason = $request->debtor_reason;
         $debtor->debtor_court_name = $request->debtor_court_name;
         $debtor->debtor_case_number = $request->debtor_case_number;
         
         $debtor->user_id = auth()->id();
         
         $debtor->save();//実行ボタンを押す操作。それにより本当にDBへのデータ保存・更新などが実行される。保存のときはsave、更新のときはupdate()などに
 
         return redirect('debtor/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $val = debtor::with('user')->where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   

}
