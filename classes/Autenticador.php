<?php
require_once 'Usuario.php';
require_once 'Sessao.php';

class Autenticador {
    private static $usuarios = [];

    public static function registrar(Usuario $usuario) {
        self::carregarUsuarios();
        self::$usuarios[] = $usuario;
        setcookie('usuarios', serialize(self::$usuarios), time() + 3600, '/');
    }

    public static function carregarUsuarios() {
        if (isset($_COOKIE['usuarios'])) {
            self::$usuarios = unserialize($_COOKIE['usuarios']);
        }
    }

    public static function login($email, $senha) {
        self::carregarUsuarios();
        foreach (self::$usuarios as $usuario) {
            if ($usuario->autenticar($email, $senha)) {
                Sessao::set('usuario', $usuario->getNome());
                return true;
            }
        }
        return false;
    }
}