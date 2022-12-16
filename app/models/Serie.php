<?php

namespace Model;

class Serie extends Media
{
    protected $datas = [
        [
            'titre' => 'Peaky Blinders',
            'image' => 'Assets/peaky.jpeg',
            'annee' => 2013,
            'saison' => 6,
            'episode' => [
                '1' => 6,
                '2' => 6,
                '3' => 6,
                '4' => 6,
                '5' => 6,
                '6' => 6
            ],
            'synopsis' => "Birmingham, en 1919. Un gang familial règne sur un quartier de la ville : 
                les Peaky Blinders, ainsi nommés pour les lames de rasoir qu'ils cachent dans la visière de leur 
                casquette.",
            'genre' => 'Criminel',
            'realisateur' => 4 //Tom Harper
        ],
        [
            'titre' => 'Star Wars Andor',
            'image' => 'Assets/andor.jpeg',
            'annee' => 2022,
            'saison' => 1,
            'episode' => [
                '1' => 12
            ],
            'synopsis' => "Cinq ans avant la périlleuse mission sur la planète tropicale Scarif, 
                Cassian Andor participe comme espion aux prémices de la résistance contre l'Empire galactique, 
                au sein de l'Alliance rebelle.",
            'genre' => 'Aventure',
            'realisateur' => 5 //Tony Gilroy

        ],
        [
            'titre' => 'The mentalist',
            'image' => 'Assets/mentalist.jpeg',
            'annee' => 2008,
            'saison' => 7,
            'episode' => [
                '1' => 23,
                '2' => 23,
                '3' => 24,
                '4' => 24,
                '5' => 22,
                '6' => 22,
                '7' => 13
            ],
            'synopsis' => "Un mentaliste utilise ses dons d'observation pour résoudre des crimes en tant que 
                consultant pour la police. Une façon pour lui contribuer à la justice et de démasquer le 
                mystérieux tueur en série qui a assassiné son épouse et sa fille.",
            'genre' => 'Mystère',
            'realisateur' => 6 //Bruno Heller
        ],
        [
            'titre' => 'Blue Nountain State',
            'image' => 'Assets/bms.jpeg',
            'annee' => 2010,
            'saison' => 3,
            'episode' => [
                '1' => 13,
                '2' => 13,
                '3' => 13
            ],
            'synopsis' => "Suivez les mésaventures de trois étudiants de première année à l'université de 
                Blue Mountain State: le quarterback Alex, le running back Craig et la mascotte Sammy.",
            'genre' => 'Comedie',
            'realisateur' => 7 //Lev Spiro
        ],
        [
            'titre' => 'Shingeki No Kyojin',
            'image' => 'Assets/snk.jpeg',
            'annee' => 2013,
            'saison' => 4,
            'episode' => [
                '1' => 25,
                '2' => 24,
                '3' => 20,
                '4' => 27
            ],
            'synopsis' => "Il y a un siècle, l'humanité a presque été exterminée par des titans qui dévorent 
                les hommes. Les survivants sont regroupés dans une ville fortifiée. C'est alors qu'un titan 
                colossal, plus haut que les murs de la ville, se présente devant la cité...",
            'genre' => 'Action',
            'realisateur' => 8 //Shinji Higuchi

        ]
    ];
}