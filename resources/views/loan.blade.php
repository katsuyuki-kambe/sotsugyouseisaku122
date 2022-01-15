<!-- resources/views/loan.blade.php -->
@extends('layouts.app')
 @section('content')
     <!-- Bootstrapの定形コード… -->
     <div class="card-body">
         <div class="card-title">
             融資の申請
         </div>
         <!-- バリデーションエラーの表示に使用-->
     	@include('common.errors')
         <!-- バリデーションエラーの表示に使用-->
         <!-- 登録フォーム -->
         <form action="{{ url('loan') }}" method="POST" class="form-horizontal">
             {{ csrf_field() }}
             <!-- 融資希望金額 -->
             <div class="form-group">
                 融資希望金額(万円) 
                 <div class="col-sm-6">
                     <input type="text" size="10" maxlength="3" name="desired_loan_amount" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 連絡希望日
                 <div class="col-sm-6">
                     <input type="date" max="9999-12-31" name="desired_contact_date" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 融資希望理由
                 <div class="col-sm-6">
                     <input type="text" name="desired_reason" class="form-control">
                 </div>
             </div>



             <!-- 登録ボタン -->
             <div class="form-group">
                 <div class="col-sm-offset-3 col-sm-6">
                     <button type="submit" class="btn btn-primary">
                         申請
                     </button>
                 </div>
             </div>
    
         </form>
     </div>
     
 @endsection