<?php

function getFilePermissionMode() {
    if (defined('FILE_PERMISSION_MODE'))
        return FILE_PERMISSION_MODE;

    $settings = settings();
    return octdec($settings['FilePermissionMode']);
}
