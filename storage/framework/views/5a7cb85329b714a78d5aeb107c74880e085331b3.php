<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">プロフィール登録内容</div>

                <div class="card-body">
                        <div class="form-group row">
                            <label for="name">お名前</label>
                            <div> 
                                <input class="form-control" value="<?php echo e($user->name); ?>">
                            </div>
                        </div>

                    <!-- 12/31フリガナ追加-->
                        <div class="form-group row">
                            <label for="name_furigana">フリガナ</label>
                            <div> 
                                <input class="form-control" value="<?php echo e($user->name_furigana); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email">Emailアドレス</label>
                            <div> 
                                <input class="form-control" value="<?php echo e($user->email); ?>">
                            </div>
                        </div>

                        <!-- 12/31生年月日追加-->
                        <div class="form-group row">
                            <label for="birthday">生年月日</label>
                            <div> 
                                <input class="form-control" value="<?php echo e($user->birthday); ?>">
                            </div>
                        </div>

                        <!-- 12/31性別追加-->
                        <div class="form-group row">
                            <label for="sex">性別</label>
                            <div> 
                                <input class="form-control" value="<?php echo e($user->sex); ?>">
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="postal_code">郵便番号</label>
                            <div>
                                <input class="form-control" value="<?php echo e($user->postal_code); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prefecture">都道府県</label>
                            <div>
                                <input class="form-control" value="<?php echo e($user->prefecture); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city">市区町村</label>
                            <div>
                                <input class="form-control" value="<?php echo e($user->city); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="town">町名番地等</label>
                            <div>
                                <input class="form-control" value="<?php echo e($user->town); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="building">建物等</label>
                            <div>
                                <input class="form-control" value="<?php echo e($user->building); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number">電話番号</label>
                            <div>
                                <input class="form-control" value="<?php echo e($user->phone_number); ?>">
                            </div>
                        </div>

                        <!-- 12/31フリガナ追加-->
                        <div class="form-group row">
                            <label for="job">職業</label>
                            <div>
                                <input class="form-control" value="<?php echo e($user->job); ?>">
                            </div>
                        </div>

                        <!-- 12/31フリガナ追加-->
                        <div class="form-group row">
                            <label for="company">会社・屋号名（無しの場合は無しで入力）</label>
                            <div>
                                <input class="form-control" value="<?php echo e($user->company); ?>">
                            </div>
                        </div>                   
                        

                        <div>
                        <a href="/user/edit"><button class="user-btn">ユーザー登録内容の編集</button></a>
                        </div>

                        <div>
                        <a href="/topindex"><button class="user-btn">トップ画面に戻る</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/cms/resources/views/user/index.blade.php ENDPATH**/ ?>