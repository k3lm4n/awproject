<?php

#Arquivos diretórios raízes
$PastaInterna = "";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
} else {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Diretórios Específicos
define('DIRIMG', DIRPAGE . "public/img/");
define('DIRCSS', DIRPAGE . "public/css/");
define('DIRJS', DIRPAGE . "public/js/");

#Acesso ao banco de dados
define('HOST', "localhost:3306");
define('DB', "medcon");
define('USER', "root");
define('PASS', "");
