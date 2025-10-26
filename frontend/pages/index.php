<?php
function list_files($path)
{
    if ($path[mb_strlen($path) - 1] != '/') {
        $path .= '/';
    }

    $files = array();
    $dh = opendir($path);
    while (false !== ($file = readdir($dh))) {
        if ($file != '.' && $file != '..' && !is_dir($path . $file) && $file[0] != '.' && $file != "index.php") {
            $page = file_get_contents(__DIR__."/".$file);

            preg_match('/<title>(.+?)<\/title>/m', $page, $matches);

            if ($matches && !empty($matches[1])) {
                $files[$matches[1]] = [
                    "file" => $file,
                    "title" => $matches[1],
                ];
            }
        }
    }

    closedir($dh);
    ksort($files);
    return $files;
}

$pages = list_files(__DIR__);

?>
<!DOCTYPE html>
<html lang="ru" class="html-init">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Название сайта</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
          crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5 mb-5">
  <h1>Свёрстанные страницы</h1>
  <ul class="list-group">
      <? foreach ($pages as $page) : ?>
        <li class="list-group-item"><a href="./<?= $page["file"] ?>"><?= $page["title"] ?></a></li>
      <? endforeach; ?>
  </ul>
</div>
</body>
</html>