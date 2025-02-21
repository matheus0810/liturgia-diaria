<?php

namespace App\Helpers;

class LiturgiaHelper
{
    public static function traduzirCorLiturgica($cor)
    {
        $cores = [
            'Verde' => 'Green',
            'Vermelho' => 'Red',
            'Branco' => 'White',
            'Roxo' => 'Purple',
            'Rosa' => 'Pink',
            'Preto' => 'Black',
            'Azul' => 'Blue',
            'Dourado' => 'Gold',
            'Prata' => 'Silver'
        ];

        return $cores[$cor] ?? $cor; // Retorna a tradução ou a própria cor caso não esteja na lista
    }
}
