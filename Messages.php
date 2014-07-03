<?php
/**
 * Created by PhpStorm.
 * User: ramos
 * Date: 02/07/14
 * Time: 22:02
 */

define('DIR_SCRIPTS_WRITE_ERROR', 'O diret&oacute;rio dos scripts n&atilde;o &eacute; v&aacute;lido ou n&atilde;o est&aacute; com permiss&atilde;o de escrita!');
define('FUNC_EXEC_NOT_ALLOWED', 'shellManager precisa que a função "shell_exec" esteja habilitada no servidor!');
define('INVALID_OS', 'shellManager requer um servidor *nix!');

//API MSGs


/*
class Messages {

    //Singleton pattern
    private static $instance;

    public const MESSAGES = serialize(array('DIR_SCRIPTS_WRITE_ERROR' => 'ssss'));

    private function __construct() {}

    public static function getInstance() {

        if( !isset(self::$instance) ) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;

    }

    public function __clone() {
        trigger_error('Clone ' . __CLASS__ . ' is not allowed.', E_USER_ERROR);
    }



}
*/