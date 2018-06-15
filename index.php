  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <?php

            require_once('curlClass.php');
            require_once('class.php');
            require_once('episodes.php');

            $curl = new curlClass();

            $captura_resposta = $curl->connectApi();

            $personagem = new Char();

            $personagem->setId($captura_resposta['id']);

            $personagem->setName($captura_resposta['name']);

            $personagem->setStatus($captura_resposta['status']);

            $personagem->setSpecies($captura_resposta['species']);

            $personagem->setGender($captura_resposta['gender']);

            $personagem->setCreated($captura_resposta['created']);

            $personagem->mostrarAtributos();


            $episode = new Episode();

            $arEpisodios = $captura_resposta['episode'];

            $episode->setEpisode($arEpisodios);

            $iNumeroDeEps = count($arEpisodios);

            $episode->mostrarEpisodios($iNumeroDeEps);



      ?>
    </body>
  </html>
