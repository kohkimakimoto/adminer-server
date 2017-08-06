<?php
$srcPath = __DIR__;
$path = getenv("ADMINER_PATH");
$theme = getenv("ADMINER_THEME_PATH");

if (preg_match('/\/adminer\.css/', $_SERVER["REQUEST_URI"]) && $theme) {
    if (file_exists($theme)) {
        header("Content-Type: text/css");
        header('Cache-Control: max-age=0');
        echo file_get_contents($theme);
        return;
    }
}

include_once($path);