@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            請求相手情報・請求先・請求金額登録の確認・手続き
        </div>
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        <!-- 投稿フォーム -->
        @if( Auth::check() )
        <form action="{{ url('debtor') }}" method="POST" class="form-horizontal">
             {{ csrf_field() }}

             <div class="form-group row">
                <label for="debtor_name" class="col-md-4 col-form-label text-md-right">請求相手のお名前</label>
                    <div class="col-md-6">
                        <input id="debtor_name" type="text" class="form-control" value="{{ $debtor->debtor_name }}">
                    </div>
             </div>
         
             <div class="form-group row">
                <label for="debtor_postal_code" class="col-md-4 col-form-label text-md-right">請求相手の郵便番号</label>
                    <div class="col-md-6">
                        <input id="debtor_postal_code" type="text" class="form-control" value="{{ $debtor->debtor_postal_code }}">
                    </div>
             </div>

             <div class="form-group row">
                <label for="debtor_prefecture" class="col-md-4 col-form-label text-md-right">請求相手の都道府県</label>
                    <div class="col-md-6">
                        <input id="debtor_prefecture" type="text" class="form-control" value="{{ $debtor->debtor_prefecture }}">
                    </div>
             </div>

             <div class="form-group row">
                <label for="debtor_city" class="col-md-4 col-form-label text-md-right">請求相手の市区町村</label>
                    <div class="col-md-6">
                        <input id="debtor_city" type="text" class="form-control" value="{{ $debtor->debtor_city }}">
                    </div>
             </div>
     
             <div class="form-group row">
                <label for="debtor_town" class="col-md-4 col-form-label text-md-right">請求相手の町名番地等</label>
                    <div class="col-md-6">
                        <input id="debtor_town" type="text" class="form-control" value="{{ $debtor->debtor_town }}">
                    </div>
             </div>

             <div class="form-group row">
                <label for="debtor_building" class="col-md-4 col-form-label text-md-right">請求相手の建物等</label>
                    <div class="col-md-6">
                        <input id="debtor_building" type="text" class="form-control" value="{{ $debtor->debtor_building }}">
                    </div>
             </div>

             <div class="form-group row">
                <label for="debtor_phone_number" class="col-md-4 col-form-label text-md-right">請求相手の電話番号</label>
                    <div class="col-md-6">
                        <input id="debtor_phone_number" type="text" class="form-control" value="{{ $debtor->debtor_phone_number }}">
                    </div>
             </div>

             <div class="form-group row">
                <label for="billing_amount" class="col-md-4 col-form-label text-md-right">請求金額(円)</label>
                    <div class="col-md-6">
                        <input id="billing_amount" type="text" class="form-control" value="{{ $debtor->billing_amount }}">
                    </div>
             </div>

             <div class="form-group row">
                <label for="annual_interest" class="col-md-4 col-form-label text-md-right">年間利息</label>
                    <div class="col-md-6">
                        <input id="annual_interest" type="text" class="form-control" value="{{ $debtor->annual_interest }}">
                    </div>
             </div>

             <div class="form-group row">
                <label for="revenue_stamp_fee" class="col-md-4 col-form-label text-md-right">収入印紙代(円)</label>
                    <div class="col-md-6">
                        <input id="revenue_stamp_fee" type="text" class="form-control" value="{{ $debtor->revenue_stamp_fee }}">
                    </div>
             </div>

             <div class="form-group row">
                <label for="credential_fee" class="col-md-4 col-form-label text-md-right">資格証明手数料(円)</label>
                    <div class="col-md-6">
                        <input id="credential_fee" type="text" class="form-control" value="{{ $debtor->credential_fee }}">
                    </div>
             </div>

             <div class="form-group row">
                <label for="submission_fee" class="col-md-4 col-form-label text-md-right">提出作業費用(円)</label>
                    <div class="col-md-6">
                        <input id="submission_fee" type="text" class="form-control" value="{{ $debtor->submission_fee }}">
                    </div>
             </div>

             <div class="form-group row">
                <label for="debtor_reason" class="col-md-4 col-form-label text-md-right">請求の原因・経緯</label>
                    <div class="col-md-6">
                        <input id="debtor_reason" type="text" class="form-control" value="{{ $debtor->debtor_reason }}">
                    </div>
             </div>

             <div class="form-group row">
                <label for="debtor_court_name" class="col-md-4 col-form-label text-md-right">手続き先裁判所</label>
                    <div class="col-md-6">
                        <input id="debtor_court_name" type="text" class="form-control" value="{{ $debtor->debtor_court_name }}">
                    </div>
             </div>

             <div class="form-group row">
                <label for="debtor_case_number" class="col-md-4 col-form-label text-md-right">事件番号</label>
                    <div class="col-md-6">
                        <input id="debtor_case_number" type="text" class="form-control" value="{{ $debtor->debtor_case_number }}">
                    </div>
             </div>

             <div class="links">
                    <a href="https://www.courts.go.jp/tokyo-s/vc-files/tokyo-s/file/7-hitsuyoushorui_tesuuryou.pdf">収入印紙代はこちらを参照</a>
             </div>


            <div>
                 <a href="/topindex"><button class="user-btn">トップ画面に戻る</button></a>
            </div>
        </form>
        @endif
    </div>
   
    
@endsection