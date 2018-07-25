<?php

function remove_dir($path) {
    $d = @dir($path);
    if ($d) {
        while (false !== ($entry = $d->read())) {
            if (!in_array($entry, array(".", ".."))) {
                if (is_file($path . DIRECTORY_SEPARATOR . $entry)) {
                    @unlink($path . DIRECTORY_SEPARATOR . $entry);
                }
                if (is_dir($path . DIRECTORY_SEPARATOR . $entry)) {
                    remove_dir($path . DIRECTORY_SEPARATOR . $entry);
                }
            }
        }
        $d->close();
    }

    @rmdir($path);
}
