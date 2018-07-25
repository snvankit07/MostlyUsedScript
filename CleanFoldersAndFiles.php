<?php

function clearDir($dir_name) {
    $dir = dir($dir_name);
    while (false !== ($entry = $dir->read())) {
        if (is_file($dir_name . "/" . $entry)) {
            @unlink($dir_name . "/" . $entry);
        }
    }
    $dir->close();
}
