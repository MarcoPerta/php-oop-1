<?php 

class Movie {
public $nomeFilm;
public $voto;
public $annoUscita;

function __construct( $x, $y, $z){
    $this -> nomeFilm = $x;
    $this -> voto = $y;
    $this -> annoUscita = $z;
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