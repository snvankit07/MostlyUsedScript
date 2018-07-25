<?php

function isSslMode() {
    static $mode = null;

    if (is_null($mode)) {
        $mode = (array_key_exists('HTTPS', $_SERVER) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' && $_SERVER['SERVER_PORT'] == 443);
    }

    return $mode;
}
