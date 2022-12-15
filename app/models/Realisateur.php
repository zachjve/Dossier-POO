<?php

namespace Model;

class Realisateur extends Media
{
    protected $datas = [
        [
            'prenom' => 'Quentin',
            'nom' => 'Tarantino',
            'birth' => 1963,
            'place' => 'USA',
            'realisation' => [
                '1' => 'Django Unchained',
                '2' => 'Pulp Fiction',
                '3' => 'Inglorious Basterds'
            ]
        ],
        [
            'prenom' => 'Steven',
            'nom' => 'Spielberg',
            'birth' => 1946,
            'place' => 'USA',
            'realisation' => [
                '1' => 'Arrête-moi si tu peux',
                '2' => 'E.T',
                '3' => 'Les dents de la mer'
            ]
        ],
        [
            'prenom' => 'Martin',
            'nom' => 'Scorsese',
            'birth' => 1942,
            'place' => 'USA',
            'realisation' => [
                '1' => 'Le loup de Wall-Street',
                '2' => 'Shutter Island',
                '3' => 'The Irishman'
            ]
        ],
        [
            'prenom' => 'Olivier',
            'nom' => 'Nakache',
            'birth' => 1973,
            'place' => 'France',
            'realisation' => [
                '1' => 'Intouchable',
                '2' => 'Hors normes',
                '3' => 'Nos jours heureux'
            ]
        ]
    ];
}