<?php
/**
 *
 */



class Char
{
    public $id;
    public $name;
    public $status;
    public $species;
    public $type;
    public $gender;
    public $created;

    public function setId($id) {

      $this->id = $id;
    }

    public function getId() {

      return $this->id;
    }

    public function setName($name) {

      $this->name = $name;
    }

    public function getName() {

      return $this->name;
    }

    public function setStatus($status){

      $this->status = $status;
    }

    public function getStatus(){

      return $this->status;
    }

    public function setSpecies($species){

      $this->species = $species ;
    }

    public function getSpecies(){

      return $this->species;
    }

    public function setGender($gender){

      $this->gender = $gender;
    }

    public function getGender(){

      return $this->gender;

    }

    public function getCreated()
    {
      return $this->created;
    }

    public function setCreated($created)
    {
      $this->created = $created;
    }


    public function mostrarAtributos() {
      echo "<pre>";
      echo "Dados do personagem:" . "<br>";
      echo "ID: " . $this->getId() . "<br>";
      echo "Nome: " . $this->getName() . "<br>";
      echo "Status de " . $this->getName() . " > " . $this->getStatus() ."<br>";
      echo "Seu tipo de especie é " . $this->getSpecies()."<br>";
      echo "Seu Genero é " . $this->getGender(). "<br>";
      echo "Entrada criada em : " . $this->getCreated(). "<br>";
      echo "</pre>";
    }
}


?>
