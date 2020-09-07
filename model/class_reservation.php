<?php

class Reservation{

  private $nom;
  private $date;
  private $heur;
  private $film;

  public function __construct($nom, $date, $heur, $film){
      $this->setNom($nom);
      $this->setDate($date);
      $this->setHeur($heur);
      $this->setfilm($film);
    }

    public function getNom(){ return $this->nom; }
    public function getDate(){ return $this->date; }
    public function getHeur(){ return $this->heur; }
    public function getfilm(){ return $this->film; }

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function setHeur($heur){
        $this->heur = $heur;
    }
    public function setfilm($film){
        $this->film = $film;
    }
}
 ?>
