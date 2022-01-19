<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>頭を鍛える</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                    <!-- logout -->
                        <!--a href="<?php echo e(url('/ ')); ?>">Home</a-->
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/topindex">
                                             ホームへ戻る
                                    </a>

                         </div>
                </div>

            <div class="content">
                <div class="title m-b-md">
                    メニュー
                </div>
                <div class="links">
                    <a href="https://apps.apple.com/jp/app/%E3%82%B3%E3%82%B0%E3%83%88%E3%83%AC-%E3%81%95%E3%81%8C%E3%81%97%E7%AE%97-%E5%88%9D%E7%B4%9A/id1455932305">コグトレアプリ紹介</a>
                    <a href="https://my-best.com/2007">脳トレアプリ一覧</a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /home/ubuntu/cms/resources/views/study.blade.php ENDPATH**/ ?>