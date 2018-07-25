<?php

function getUTF8($string) {
    $enc = mb_detect_encoding($string, "auto");
    return mb_convert_encoding($string, "UTF-8", $enc == "" ? "ASCII" : $enc);
}
