<?php

namespace Alura\Solid\Service;

use Alura\Solid\Service\Contracts\Assistivel;

class Assistidor
{
    public function assisteConteudo(Assistivel $conteudo)
    {
        $conteudo->assistir();
    }
}
