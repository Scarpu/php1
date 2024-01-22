<?php
class Alunno{
    protected $nome;
    protected $cognome;
    protected $eta;

    public function __construct($nome, $cognome, $eta){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;

    }

    public function getnome(){
        return $this->nome;

    }
    public function getcognome(){
        return $this->cognome;

    }
    public function geteta(){
        return $this->eta;

    }
    public function setnome($nome){
        $this->nome = $nome;
    }
    public function setcognome($cognome){
        $this->cognome = $cognome;
    }
    public function seteta($eta){
        $this->eta = $eta;
    }
    public function __toString()
    {
        return $this->nome . " " . $this->cognome . " " . $this->eta;
    }
    

    }
?>