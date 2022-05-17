<?php
include_once('../includes/init.php');
include_once('../admin/init.php');



$titre = 'Témoignage_handisport';
include('../includes/header.php');
?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js"></script>
    <script src="https://unpkg.com/mappa-mundi@0.0.5/dist/mappa.js"></script>

    <link rel="stylesheet" href="../assets/css/data.css">



    <header>
        <h1>L'ecosystème du futur pratiquant d'handisport</h1><br>

        <h2>Le développement de la pratique sportive des PSH passe par l’identification des éléments
            qui entourent le pratiquant, et qui peuvent, à un instant de son parcours, apparaître
            comme des freins à la pratique. Chaque composante de cet écosystème est déterminante
            dans l’accès réel à une pratique sportive : l’environnement social,  l’accessibilité des infrastructures, l’équipement adapté, le transport et etc</h2>

        <h3>Ce jeu de données détaille le trafic des entrants directs sur le réseau ferré RATP en 2021.<br>
            Les « entrants directs » sont exclusivement les voyageurs provenant de la voie publique ou
            du réseau SNCF entrant sur le réseau de transport RATP<br>
            en validant un titre de transport valide.</h3>
            <br>
    </header>

    <div class="top">
        <h2>Une visualisation sur les 20 plus grand traffic du réseau RATP</h2>
    </div>
  
                <canvas id="TopTenTitleChart"></canvas>

    <div class="top">
        <h2 class="couleur">Une visualisation sur les 20 plus petit traffic du réseau RATP</h2>
    </div>

                <canvas id="TopTenTitleChart2"></canvas>

    <div class="top">
        <h2>Top 3 des plus grand traffic du réseau RATP</h2><br>
        <p> Gare du Nord est la station qui comporte le plus grand traffic du réseau RATP avec 51 millions de validation du titre de transport dans l'année 2019</p>
    </div>

                <canvas id="TopTenTitleChart3"></canvas>

    <div class="top">
        <h2 class="couleur"> Top 3 des plus petit traffic du réseau RATP </h2><br>
        <p>Eglise d'Auteuil est la station qui comporte le moins de traffic du réseau RATP avec 169 milles validation du titre de transport dans l'année 2019</p>
    </div>

                <canvas id="TopTenTitleChart4"></canvas>

    <div class="top">
        <h3>
            ON PEUT VOIR UNE GRANDE DIFFERENCE DE TRAFFIC ENTRE EGLISE D'AUTEUIL ET GARE DU NORD.
        </h3><BR>

        <h4>
            Pour la station Gare du Nord, le nombre élevé de traffic peut s'expliquer avec le nombre de correspondance dans la station avec 4 correspondances <br>
            (Metro : 4,5 - RER : B,D)<br>
        </h4>
        <h5>Plus les correspondance avec la SNCF</h5><br><br>
    </div>

    <div class="top2">
        <h1>
            Une visualisation des top 10 des traffics par station de metro 
        </h1>
    </div>
    <div class="top2">
        <h3>
            Avec Mappa on peut visualisé la différence de traffic.<br>
            Une visualisation avec les top 10 sur le nombre de traffic<br>
            entre les plus élevé et le moins élevé  
        </h3>
    </div>



   




     
        <script src="../JS/loadData.js"></script>
        <script src="../JS/graph.js"></script>
        <script src="grabData.js"></script>
       <script src="sketch.js"></script>

        <!-- <footer>
            <p>Dans le cadre de la formation Dataviz 26-1 du Campus La Fonderie de l'image - Bagnolet - 2021</p>
        </footer> -->
</body>
</html>