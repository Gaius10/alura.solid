<?php

namespace Alura\Solid\Model;

use Alura\Solid\Service\Contracts\Assistivel;
use Alura\Solid\Service\Contracts\Pontuavel;

class AluraMais extends Video implements Pontuavel, Assistivel
{

    public function __construct(
        Slug $nome,
        private Slug $categoria
    ) {
        parent::__construct($nome);
    }

    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/' . $this->nome . '/' . $this->categoria;
    }

    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
