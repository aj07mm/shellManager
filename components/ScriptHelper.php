<?php
/**
 * Created by PhpStorm.
 * User: ramos
 * Date: 28/06/14
 * Time: 15:04
 */

class ScriptHelper {

    public static function isValidExtension($filename) {
        $allowedExtensions = array('sh', 'zsh', 'bash');

        $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
        return in_array($fileExtension, $allowedExtensions);
    }

} 