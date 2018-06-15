<?php


  class Episode {

    public $episode;

    public function setEpisode($episode) {
      $this->episode = $episode;
    }

    public function mostrarEpisodios($qtd_episodios) {

      echo "lista de episodios" . "<br>";

      /*echo "Mostrando no for. " . "<br>";
      for ($i = 0; $i<$qtd_episodios; $i++) {
        echo "Index ". $i . ": " . $this->episode[$i] . "<br>";
      }*/
      echo "------------------------". "<br>";
      //echo "Mostrando com while. " . "<br>";

      $contEp = 0;
      while ($contEp < $qtd_episodios) {

        echo "Index ". $contEp . ": " . $this->episode[$contEp] . "<br>";

        $contEp++;
      }

    }


  }


?>
