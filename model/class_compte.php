<?php

class Compte{

  private $nom;
  private $prenom;
  private $mail;
  private $tel;
  private $mdp;
  private $role;

  public function __construct($nom, $date, $heur, $film, $tel, $mdp, $role){
      $this->setNom($nom);
      $this->setPrenom($prenom);
      $this->setMail($mail);
      $this->setTel($tel);
      $this->setMdp($mdp);
      $this->setRole($role);
    }

    public function getNom(){ return $this->nom; }
    public function getPrenom(){ return $this->prenom; }
    public function getMail(){ return $this->mail; }
    public function getTel(){ return $this->tel; }
    public function getMdp(){ return $this->mdp; }
    public function getRole(){ return $this->role; }

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setMail($mail){
        $this->mail = $mail;
    }
    public function setTel($tel){
        $this->tel = $tel;
    }
    public function setMdp($mdp){
        $this->mdp = $mdp;
    }
}
 ?>
