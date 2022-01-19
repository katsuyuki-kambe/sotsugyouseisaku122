<!-- resources/views/userprofiles.blade.php -->

 <?php $__env->startSection('content'); ?>
     <!-- Bootstrapの定形コード… -->
     <div class="card-body">
         <div class="card-title">
             プロフィール登録
         </div>
         <!-- バリデーションエラーの表示に使用-->
     	<?php echo $__env->make('common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- バリデーションエラーの表示に使用-->
         <!-- 本登録フォーム -->
         <form action="<?php echo e(url('userprofiles')); ?>" method="POST" class="form-horizontal">
             <?php echo e(csrf_field()); ?>

             <!-- 氏名 -->
             <div class="form-group">
                 <div class="col-sm-6">
                     <input type="text" name="item_name" class="form-control">
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
     <!-- Book: 既に登録されてる本のリスト -->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/cms/resources/views/userprofiles.blade.php ENDPATH**/ ?>