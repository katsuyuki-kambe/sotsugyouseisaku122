<!-- resources/views/profiles.blade.php -->

 <?php $__env->startSection('content'); ?>
     <!-- Bootstrapの定形コード… -->
     <div class="card-body">
         <div class="card-title">
             プロフィール登録
         </div>
         <!-- バリデーションエラーの表示に使用-->
     	<?php echo $__env->make('common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- バリデーションエラーの表示に使用-->
         <!-- 登録フォーム -->
         <form action="<?php echo e(url('profiles')); ?>" method="POST" class="form-horizontal">
             <?php echo e(csrf_field()); ?>

             <!-- 氏名 -->
             <div class="form-group">
                 氏名
                 <div class="col-sm-6">
                     <input type="text" name="name" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 氏名（フリガナ）
                 <div class="col-sm-6">
                     <input type="text" name="name_furigana" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 電話番号
                 <div class="col-sm-6">
                     <input type="tel" name="phone_number" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 生年月日（西暦）
                 <div class="col-sm-6">
                     <input type="date" max="9999-12-31" name="birthday" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 性別（1：男性　２：女性）
                 <div class="col-sm-6">
                     <input type="number" name="sex" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 郵便番号
                 <div class="col-sm-6">
                     <input type="text" size="10" maxlength="8" name="zip" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 住所（都道府県）
                 <div class="col-sm-6">
                     <input type="text" name="prefecture" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 住所（市区町村以降）
                 <div class="col-sm-6">
                     <input type="text" name="address" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 職業
                 <div class="col-sm-6">
                     <input type="text" name="job" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 勤務先名（任意）
                 <div class="col-sm-6">
                     <input type="text" name="company" class="form-control">
                 </div>
             </div>



             <!-- 登録ボタン -->
             <div class="form-group">
                 <div class="col-sm-offset-3 col-sm-6">
                     <button type="submit" class="btn btn-primary">
                         Save
                     </button>
                 </div>
             </div>
         </form>
     </div>
     <!-- Book: 既に登録されてるプロフィール -->
     
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/cms/resources/views/profiles.blade.php ENDPATH**/ ?>