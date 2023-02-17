<?php

namespace App;
use Model\Film;
use Model\Serie;
use Model\Realisateur;

class Home extends Media {

    public function listHome() {
        $film = new Film;
        $serie = new Serie;
        $real = new Realisateur;
        $datas = [
            'film' => $film, 
            'serie' => $serie,
            'real' => $real
        ];
        return $datas;
    }
}

?>