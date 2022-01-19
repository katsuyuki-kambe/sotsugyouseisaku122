<!-- resources/views/posts.blade.php -->

<?php $__env->startSection('content'); ?>
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            請求相手情報・請求先・請求金額登録フォーム
        </div>
        <!-- バリデーションエラーの表示に使用-->
    	<?php echo $__env->make('common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- バリデーションエラーの表示に使用-->
        <!-- 投稿フォーム -->
        <?php if( Auth::check() ): ?>
        <form action="<?php echo e(url('debtor')); ?>" method="POST" class="form-horizontal">
             <?php echo e(csrf_field()); ?>


             <div class="form-group row">
                <label for="debtor_name" class="col-md-4 col-form-label text-md-right">請求相手のお名前</label>
                    <div class="col-md-6">
                        <input id="debtor_name" type="text" class="form-control" placeholder="例）山田 太郎">
                    </div>
             </div>
         
             <div class="form-group row">
                <label for="debtor_postal_code" class="col-md-4 col-form-label text-md-right">請求相手の郵便番号</label>
                    <div class="col-md-6">
                        <input id="debtor_postal_code" type="text" class="form-control" placeholder="例）000-0000">
                    </div>
             </div>

             <div class="form-group row">
                <label for="debtor_prefecture" class="col-md-4 col-form-label text-md-right">請求相手の都道府県</label>
                    <div class="col-md-6">
                        <input id="debtor_prefecture" type="text" class="form-control" placeholder="例）大阪府">
                    </div>
             </div>

             <div class="form-group row">
                <label for="debtor_city" class="col-md-4 col-form-label text-md-right">請求相手の市区町村</label>
                    <div class="col-md-6">
                        <input id="debtor_city" type="text" class="form-control" placeholder="例）大阪市北区">
                    </div>
             </div>
     
             <div class="form-group row">
                <label for="debtor_town" class="col-md-4 col-form-label text-md-right">請求相手の町名番地等</label>
                    <div class="col-md-6">
                        <input id="debtor_town" type="text" class="form-control" placeholder="例）中之島1丁目1-1">
                    </div>
             </div>

             <div class="form-group row">
                <label for="debtor_building" class="col-md-4 col-form-label text-md-right">請求相手の建物等</label>
                    <div class="col-md-6">
                        <input id="debtor_building" type="text" class="form-control" placeholder="例）中之島○○ビル101号室">
                    </div>
             </div>

             <div class="form-group row">
                <label for="debtor_phone_number" class="col-md-4 col-form-label text-md-right">請求相手の電話番号</label>
                    <div class="col-md-6">
                        <input id="debtor_phone_number" type="text" class="form-control" placeholder="例）06-0000-0000">
                    </div>
             </div>

             <div class="form-group row">
                <label for="billing_amount" class="col-md-4 col-form-label text-md-right">請求金額(円)</label>
                    <div class="col-md-6">
                        <input id="billing_amount" type="text" class="form-control" placeholder="例）1200010">
                    </div>
             </div>

             <div class="form-group row">
                <label for="annual_interest" class="col-md-4 col-form-label text-md-right">年間利息</label>
                    <div class="col-md-6">
                        <input id="annual_interest" type="text" class="form-control" placeholder="例）3%">
                    </div>
             </div>

             <div class="form-group row">
                <label for="revenue_stamp_fee" class="col-md-4 col-form-label text-md-right">収入印紙代(円)</label>
                    <div class="col-md-6">
                        <input id="revenue_stamp_fee" type="text" class="form-control" placeholder="例）6000">
                    </div>
             </div>

             <div class="form-group row">
                <label for="credential_fee" class="col-md-4 col-form-label text-md-right">資格証明手数料(円)</label>
                    <div class="col-md-6">
                        <input id="credential_fee" type="text" class="form-control" placeholder="例）600">
                    </div>
             </div>

             <div class="form-group row">
                <label for="submission_fee" class="col-md-4 col-form-label text-md-right">提出作業費用(円)</label>
                    <div class="col-md-6">
                        <input id="submission_fee" type="text" class="form-control" placeholder="例）800">
                    </div>
             </div>

             <div class="form-group row">
                <label for="debtor_reason" class="col-md-4 col-form-label text-md-right">請求の原因・経緯</label>
                    <div class="col-md-6">
                        <input id="debtor_reason" type="text" class="form-control" placeholder="請求に至る原因を入力">
                    </div>
             </div>

             <div class="form-group row">
             <label for="debtor_court_name" class="col-md-4 col-form-label text-md-right">手続裁判所名</label>
             <select class="form-control" id="debtor_court_name" name="debtor_court_name">
            <option value="1">東京簡易裁判所</option>
            <option value="2">千葉簡易裁判所</option>
            <option value="3">佐倉簡易裁判所</option>
            <option value="4">千葉一宮簡易裁判所</option>
            <option value="5">松戸簡易裁判所</option>
            <option value="6">木更津簡易裁判所</option>
            <option value="7">館山簡易裁判所</option>
            <option value="9">八日市場簡易裁判所</option>
            <option value="10">佐原簡易裁判所</option>
            <option value="11">市川簡易裁判所</option>
            <option value="12">銚子簡易裁判所</option>
            <option value="13">東金簡易裁判所</option>
            <option value="14">さいたま簡易裁判所</option>
            <option value="15">越谷簡易裁判所</option>
            <option value="16">川越簡易裁判所</option>
            <option value="17">熊谷簡易裁判所</option>
            <option value="18">秩父簡易裁判所</option>
            <option value="19">川口簡易裁判所</option>
            <option value="20">大宮簡易裁判所</option>
            <option value="21">久喜簡易裁判所</option>
            <option value="22">飯能簡易裁判所</option>
            <option value="23">所沢簡易裁判所</option>
            <option value="24">本庄簡易裁判所</option>
      </select>
      </div>

             <div class="form-group row">
                <label for="debtor_case_number" class="col-md-4 col-form-label text-md-right">事件番号</label>
                    <div class="col-md-6">
                        <input id="debtor_case_number" type="text" class="form-control" placeholder="例）令和4年（ロ）第〇〇号">
                    </div>
             </div>

             <div class="links">
                    <a href="https://www.courts.go.jp/tokyo-s/vc-files/tokyo-s/file/7-hitsuyoushorui_tesuuryou.pdf">収入印紙代はこちらを参照</a>
             </div>


        
            <!--　登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </form>
        <?php endif; ?>
    </div>
   
    <?php if($errors->any()): ?>
	    <div class="alert alert-danger">
	        <ul>
	            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                <li><?php echo e($error); ?></li>
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        </ul>
	    </div>
	<?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/cms/resources/views/debtor/post.blade.php ENDPATH**/ ?>