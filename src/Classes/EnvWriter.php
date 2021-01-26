<?php

$path = base_path('.env');

if (file_exists($path)) {
file_put_contents($path, str_replace(
    'APP_KEY='.$this->laravel['config']['app.key'], 'APP_KEY='.$key, file_get_contents($path)
));
}


function putPermanentEnv($key, $value)
{
    $path = app()->environmentFilePath();

    $escaped = preg_quote('='.env($key), '/');

    file_put_contents($path, preg_replace(
        "/^{$key}{$escaped}/m",
        "{$key}={$value}",
        file_get_contents($path)
    ));
}
