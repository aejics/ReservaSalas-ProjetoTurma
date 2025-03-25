<?php
// .....::.............
// ....:.:.............
// ....:=:.............
// ....:-..............
// .::==-=-::==:=-..... AEJICS GIAE CONNECT
// ::...-:.::-+*+:..:.. INTEGRATION
// .....-:....-+:..:-:. 
// .....-:..:---:..:-.. V2.0 (sim, em módulo desta vez)
// ..::..:-..:::::....: by marco pisco - marco@marcopisco.com - @marpisco
// ..:.....::....:.....
// ..:::..........::...

// Este módulo depende da versão mais recente do GIAEConnect do itsjuoum.

require 'giaeConnect.php'; // ainda não está nesta pasta, por enquanto
$giaeConnect = new \juoum\GiaeConnect\GiaeConnect("giae.aejics.org");
// Não adicionar ainda o GIAEConnect

function loginGiae($user, $pass){
    $sessao = $giaeConnect->getSession($user, $pass);
    if (str_contains($giaeconnect->getConfInfo(), 'Erro do Servidor')){
        setcookie("token", "", time() - 3600, "/");
        die("A sua sessão é inválida.");
    } else {
        setcookie("token", $sessao, time() + 3600, "/");
    }
}

function validateSessaoValida($token){
    $giaeconnect->session=$token;
    if (str_contains($giaeconnect->getConfInfo(), 'Erro do Servidor')){
        // Esta ação pode levar trigger com um login noutro separador do GIAE.
        setcookie("token", "", time() - 3600, "/");
        die("A sua sessão é inválida.");
    }
}

function getDataFromUser($token){
    // buscar dados ao GIAE
    // adicionar à "cache do giae"
}
?>