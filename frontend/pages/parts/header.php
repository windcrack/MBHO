<?
$lastModifiedDate = "";
$filePath = $_SERVER["DOCUMENT_ROOT"] . '/frontend/dist/main.js';
if (file_exists($filePath)) {
	$lastModifiedDate = filemtime($filePath);
}
?>

<!DOCTYPE html>
<html lang="ru" class="html-init">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MBHO</title>
    <link rel="stylesheet" href="/frontend/src/styles/common/libs/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/frontend/dist/main.css">
    <script src="/frontend/src/js/libs/swiper-bundle.min.js"></script>
    <script src="/frontend/src/js/libs/jquery-3.5.1.js"></script>
    <script src="/frontend/src/js/libs/lazysizes.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"></script>
    <script type="module" src="/frontend/dist/main.js"></script>
</head>
<body class="body-init">
<header class="header">
    <?/*<div class="container-grid">
        <section class="header__body">
            <div class="burger-btn js-burger-btn">
                <div class="burger js-burger">
                    <span></span>
                </div>
            </div>
        </section>
        <section class="mob-header hide js-mob-header">

        </section>
    </div>*/?>

</header>
