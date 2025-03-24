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

require 'giaeconnect.php'; // ainda não está nesta pasta, por enquanto

// Não adicionar ainda o GIAEConnect

function loginGiae($user, $pass){
    // adicionar função de login de origem do giae
    // validar
    // adicionar cookie do utilizador
    setcookie();
}

function validateSessaoValida($token){
    // adicionar função de validar token de sessão
    // este token irá sempre ficar nos cookies da pessoa com validade de 1 hora
}

function getDataFromUser($token){
    // buscar dados ao GIAE
    // adicionar à "cache do giae"
}
?>