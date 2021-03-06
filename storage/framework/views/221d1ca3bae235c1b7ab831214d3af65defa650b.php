<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    <header class="d-flex">
        <h3 class="text-white">HAIR SALON SHIGEMATSU</h3>
        <div class="nav-items">
            <ul　class="list-inline list-unstyled">
                <li class ="list-inline-item"><a href="<?php echo e(route('home')); ?>">ホーム</a></li>
                <li class ="list-inline-item"><a href="<?php echo e(route('blog')); ?>">ブログ</a></li>
                <li class ="list-inline-item"><a href="https://www.google.com/maps/place/HAIR+SALON+SHIGEMATSU/@33.844497,132.7818808,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x57ac6e82927295a!8m2!3d33.844497!4d132.7840695"><i class="bi bi-geo-alt-fill"></i></a></li>
            </ul>
        </div>
    </header>

    <?php echo $__env->yieldContent('content'); ?>

    <footer>
        <p>089-932-3682</p>
        <p class="copy-rights">©2021 by HAIR SALON SHIGEMATSU</p>
    </footer>
</body>
</html><?php /**PATH /Users/fujimotokouki/laravel/HairSalonShigematsu/homepage/resources/views/layouts/app.blade.php ENDPATH**/ ?>