<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile; //この行を上に追加
use App\User;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//この行を上に追加


class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('profiles');
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
        //新規登録
        $profiles = new Profile(); // ログインしている人のid番号に該当するユーザー情報をUserテーブルからとってきて$user変数に格納
        

        //追加記述 12/19
        $profiles->name = $request->name; 
        $profiles->name_furigana = $request->name_furigana; 
        $profiles->phone_number = $request->phone_number; 
        $profiles->birthday = $request->birthday; 
        $profiles->sex = $request->sex; 
        $profiles->zip = $request->zip; 
        $profiles->prefecture = $request->prefecture; 
        $profiles->address = $request->address; 
        $profiles->job = $request->job; 
        $profiles->company = $request->company;
        $profiles->user_id = auth()->id();
        
        $profiles->save();//実行ボタンを押す操作。それにより本当にDBへのデータ保存・更新などが実行される。保存のときはsave、更新のときはupdate()などに

        return redirect('/profiles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //12/19追加
        $val = Profiles::with('user')->where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //ここに加える

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
