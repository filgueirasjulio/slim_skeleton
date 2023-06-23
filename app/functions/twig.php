<?php

use Twig\TwigFunction;

//para testar se uma função pode ser chamada na view
$teste = new TwigFunction('teste', function() {
    echo 'funções do twig funcionando corretamente';
});

return [
    $teste
];