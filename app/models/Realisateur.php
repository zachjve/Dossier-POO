<?php

namespace Model;

class Realisateur extends Media
{
    protected $datas = [
        [
            'prenom' => 'Quentin',
            'nom' => 'Tarantino',
            'image' => 'Assets/tarantino.jpeg',
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
            'image' => 'Assets/steven.jpeg',
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
            'image' => 'Assets/martin.jpeg',
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
            'image' => '',
            'birth' => 1973,
            'place' => 'France',
            'realisation' => [
                '1' => 'Intouchable',
                '2' => 'Hors normes',
                '3' => 'Nos jours heureux'
            ]
        ],
        [
            'prenom' => 'Tom',
            'nom' => 'Harper',
            'image' => '',
            'birth' => 1980,
            'place' => 'Londres',
            'realisation' => [
                '1' => 'Peaky Blinders',
            ]
        ],
        [
            'prenom' => 'Tony',
            'nom' => 'Gilroy',
            'image' => '',
            'birth' => 1956,
            'place' => 'USA',
            'realisation' => [
                '1' => 'Star Wars Andor',
                '2' => 'Jason Bourne',
                '3' => 'Rogue One'
            ]
        ],
        [
            'prenom' => 'Bruno',
            'nom' => 'Heller',
            'image' => '',
            'birth' => 1980,
            'place' => 'Londres',
            'realisation' => [
                '1' => 'The mentalist',
            ]
        ],
        [
            'prenom' => 'Lev',
            'nom' => 'Spiro',
            'image' => '',
            'birth' => '?',
            'place' => 'USA',
            'realisation' => [
                '1' => 'Blue Montain State',
            ]
        ],
        [
            'prenom' => 'Shinji',
            'nom' => 'Higuchi',
            'image' => '',
            'birth' => 1965,
            'place' => 'Japon',
            'realisation' => [
                '1' => 'Shingeki No Kyojin',
            ]
        ],
    ];
}