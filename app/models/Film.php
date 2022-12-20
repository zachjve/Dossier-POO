<?php

namespace Model;

class Film extends Media
{
  protected $datas = [
    [
      'titre' => 'Django Unchained',
      'annee' => 2012,
      'image' => 'Assets/django.jpeg',
      'synopsis' => "Deux ans avant la Guerre civile, un ancien esclave du nom de Django s'associe avec un 
        chasseur de primes d'origine allemande qui l'a libéré: il accepte de traquer avec lui des criminels 
        recherchés. En échange, il l'aidera à retrouver sa femme perdue depuis longtemps et esclave elle aussi.",
      'genre' => 'Western',
      'realisateur' => 0 //Tarantino
    ],
    [
      'titre' => 'Arrête-moi si tu peux',
      'annee' => 2002,
      'image' => 'Assets/arrete.jpeg',
      'synopsis' => "Frank Abagnale Jr croyait vivre dans une famille stable. Lorsqu'il apprend que ses parents
        ont décidé de divorcer, il ne supporte pas la situation et, sous le choc, fugue. Bien vite confronté aux 
        réalités de la vie en solitaire, il tente de s'insérer, mais découvre qu'il est plus facile d'endosser 
        de faux chèques que de travailler. Il prend l'identité d'un pilote de ligne et mène la belle vie. 
        Un agent du FBI opiniâtre le suit à la trace en espérant un jour le coincer.",
      'genre' => 'Criminel',
      'realisateur' => 1 //Spielberg
    ],
    [
      'titre' => 'Le loup de Wall Street',
      'annee' => 2013,
      'image' => 'Assets/loup.jpeg',
      'synopsis' => "Sa licence de courtier en poche, et les narines déjà pleines de cocaïne, Jordan Belfort
        est prêt à conquérir Wall Street. Ce jour d'octobre, un krach, le plus important depuis 1929, vient 
        piétiner ses rêves de grandeur. C'est finalement à Long Island qu'il échoue et qu'il monte sa propre 
        affaire de courtage. Son créneau : le hors-cote. Sa méthode : l'arnaque. Son équipe : des vendeurs ou 
        des petits trafiquants.",
      'genre' => 'Comédie/Drame',
      'realisateur' => 2 //Scorsese
    ],
    [
      'titre' => 'Pulp Fiction',
      'annee' => 1994,
      'image' => 'Assets/pulp.jpeg',
      'synopsis' => "L'odyssée sanglante et burlesque de petits malfrats dans la jungle de Hollywood à 
        travers trois histoires qui s'entremêlent. Dans un restaurant, un couple de jeunes braqueurs, 
        Pumpkin et Yolanda, discutent des risques que comporte leur activité. Deux truands, Jules Winnfield 
        et son ami Vincent Vega, qui revient d'Amsterdam, ont pour mission de récupérer une mallette au 
        contenu mystérieux et de la rapporter à Marsellus Wallace.",
      'genre' => 'humour',
      'realisateur' => 0 //Tarantino
    ],
    [
      'titre' => 'Intouchable',
      'annee' => 2011,
      'image' => 'Assets/intouchable.jpeg',
      'synopsis' => "Tout les oppose et il était peu probable qu'ils se rencontrent un jour, et pourtant. 
        Philippe, un riche aristocrate devenu tétraplégique après un accident de parapente va engager Driss, 
        un jeune homme d'origine sénégalaise tout droit sorti de prison, comme auxiliaire de vie à domicile. 
        Pourquoi lui ? Tout simplement parce qu'il ne regarde pas Philippe avec le même regard de pitié que 
        les autres candidats.",
      'genre' => 'Comédie dramatique',
      'realisateur' => 3 //Nakache
    ]
  ];
}

?>