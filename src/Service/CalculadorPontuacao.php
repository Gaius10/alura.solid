<?php

namespace Alura\Solid\Service;

use Alura\Solid\Service\Contracts\Pontuavel;

class CalculadorPontuacao
{
    public function recuperarPontuacao(Pontuavel $conteudo)
    {
        return $conteudo->recuperarPontuacao();
    }
}
