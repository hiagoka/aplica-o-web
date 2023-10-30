<?php
/// arquivo de configuração para Linkar o php com o banco de dados. 
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'sislogin'); //nome da base de dados sislogin.

///variavel de conexão.

$conn = new MySQLi(HOST, USER, PASS, BASE);

