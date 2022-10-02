<?php

include 'autoload.php';

include 'hearder.php';

echo    '<main class="max-h-screen overflow-y-scroll snap snap-y snap-mandatory">';

$categorieStatement = $db->prepare('SELECT * FROM questionnaire');
$categorieStatement->execute();
$categories = $categorieStatement->fetchAll();

foreach ($categories as $kCategorie => $vCategorie) {
    echo        '<section
                      class="flex items-center w-full h-screen bg-black bg-center bg-cover text-purple snap-start"
                      style="background-image: url(assets/images/'.$vCategorie["idQuestionnaire"].'.jpg); backdrop-filter: opacity(50%);"
                    >
                      <div class="w-3/12">&nbsp;</div>
                      <div class="w-4/12">
                        <div class="relative text-white">
                          <span class="absolute flex w-full h-0.5 -ml-4 bg-white -left-full top-1/2"></span>&rarr; Thème
                        </div>
                        <a href="#">
                          <h2 class="text-white font-black text-6xl">"'.$vCategorie["libelleQuestionnaire"].'"</h2>
                          <p class="text-white">Des questions trop marrant sont en jeu !!!</p>
                        </a>
                        <a href="#" class="mt-2 text-white text-xs underline"></a>
                       <button
                           
                            class="p-2 mt-2 text-back-400 bg-yellow-300 rounded-lg shadow-md hover:bg-yellow-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-gray-100 focus:ring-offset-4"
                    >
                        Je m\'inscris &rarr;
                    </button>
                      </div>
                    </section>';
}

echo   ' </main>';

include 'footer.php';