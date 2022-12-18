<?php 

class Movie {
public $nomeFilm;
public $voto;
public $annoUscita;
public $poster;

function __construct( $x, $y, $z, $i){
    $this -> nomeFilm = $x;
    $this -> voto = $y;
    $this -> annoUscita = $z;
    $this -> poster = $i;
}

function howIs(){
    if( $this->voto > 8 ){
        return "Il film  $this->nomeFilm è molto bello";
    } elseif ( $this->voto >= 6 && $this->voto < 8 ) {
        return "Il film  $this->nomeFilm è decente";
    } else {
        return "Il film  $this->nomeFilm è brutto";
    }
    }
}

?>