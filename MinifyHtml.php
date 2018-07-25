<?php

function minifyHTML($html) {
// $html = preg_replace('/<!--([\\s\\S]*?)-->/', '', $html);
    $html = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $html);
    $html = str_ireplace(
            array("\r\n", " >", "\t"), array("\n", ">", ""), $html
    );
    return $html;
}
