<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <link rel="icon" href="/public/img/favicon/favicon.ico">
    <link rel="stylesheet" href="/public/css/normalize.css">
    <link rel="stylesheet" href="/public/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/public/css/sweetalert.css">
    <?php if ( $_SERVER['REQUEST_URI'] == '/' ) : ?>
        <link rel="stylesheet" href="/public/css/slick.css">
        <link rel="stylesheet" href="/public/css/slick-theme.css">
    <?php endif; ?>
    <link rel="stylesheet" href="/public/css/main.css">
    <script src="/public/scripts/jquery.min.js"></script>
</head>
<body <?php if ( $_SERVER['REQUEST_URI'] == '/' ) {
    echo 'class="main-page"';
}else{
    echo 'class="catalog"';
} ?>>
    <?= $content; ?>

</body>
</html>