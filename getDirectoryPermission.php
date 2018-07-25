<?php

function getDirectoryPermissionMode() {
    if (defined('DIRECTORY_PERMISSION_MODE'))
        return DIRECTORY_PERMISSION_MODE;

    $settings = settings();
    return octdec($settings['DirectoryPermissionMode']);
}
