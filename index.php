<?php
    require_once "src/pages/auth.php";
    require_once "src/pages/feedback.php";

    require_once "src/components/footer.php";
    require_once "src/components/header.php";
    require_once "src/vendor/helpers.php";

    $request = $_SERVER['REQUEST_URI'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/css/style.css">
    <link href="src/assets/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <title><?php echo getTitle($request) ?></title>
</head>
<body>

<div class="wrapper">
    <header class="container">
        <?= !empty($headerContent) ? $headerContent : null ?>
    </header>
    <div class="content">
        <div class="container mt-5">
            <?php
                echo match ($request) {
                    '/' => (!empty($contentAuth) ? $contentAuth : 'Что то пошло не так'),
                    '/feedback' => (!empty($contentRegister) ? $contentRegister : 'Что то пошло не так'),
                    default => '404',
                };
             ?>
        </div>
    </div>
    <footer class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <?= !empty($footerContent) ? $footerContent : null ?>
    </footer>
</div>

<script src="src/js/script.js"></script>
<script src="src/assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>



