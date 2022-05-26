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

<div class="contenu_dataviz">
<div class="contenu_img">
    <img src="../assets/img/sante/transport.jpg" alt="">
    <div class="ecosysteme">
        <h1>L'ecosystème du futur <br> pratiquant d'handisport</h1><br>

        <h2>Le développement de la pratique sportive des PSH passe par l’identification des éléments
            qui entourent le pratiquant, et qui peuvent, à un instant de son parcours, apparaître
            comme des freins à la pratique. Chaque composante de cet écosystème est déterminante
            dans l’accès réel à une pratique sportive : l’environnement social,  l’accessibilité des infrastructures, l’équipement adapté, le transport et etc
            <br><br>
            Pour visualiser la difficulté sur l'ecosystème en transport avec le nombre de trafic en région parisienne,<br>
            Nous avons mit en place une data visualisation en général sur le trafic parisiens avec la data de la RATP
            <br> <a href="https://data.ratp.fr/explore/?sort=modified" target="_blank" >Voir l'open data RATP</a>
</div>
</div>


<div class="intro_data">

<div class="IDF_RATP">
            <h1>En Île-de-France</h1>
            <h2>Pour les personnes porteurs d’un handicap habitant en Île-de-France et qui bénéficient d’une aide
chemin de fer
(AAH, PCH, pension d’invalidité…) peuvent, sous conditions de ressources, emprunter gratuitement transports publics du réseau RATP dans l’ensemble de la région parisienne.</h2>
        </h2>
        <a href="https://www.mes-allocs.fr/guides/aide-au-transport/aide-au-transport-personne-handicapee/#:~:text=Pour%20les%20personnes%20porteurs%20d%E2%80%99un%20handicap%20habitant%20en,r%C3%A9seau%20RATP%20dans%20l%E2%80%99ensemble%20de%20la%20r%C3%A9gion%20parisienne." target="_blank" >Aide de la RATP </a>



            </div>
        </div>

        <div class="design">
<img src="../assets/img/SVG/design.svg" alt="">
<img src="../assets/img/SVG/design.svg" alt="">
<img src="../assets/img/SVG/design.svg" alt="">
<img src="../assets/img/SVG/design.svg" alt="">

</div>

    <div class="top">
        <h2>Une visualisation sur les 20 plus grand trafic du réseau RATP</h2>
        <p>Ce jeu de données détaille le trafic des entrants directs sur le réseau ferré RATP en 2021.<br>
            Les « entrants directs » sont exclusivement les voyageurs provenant de la voie publique ou
            du réseau SNCF entrant sur le réseau de transport RATP<br>
            en validant un titre de transport valide. Avec ces dataviz on peut déjà visualiser le nombre de traffic </p>
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
        <h2>
            QU'ELLE IMPACT LE TRAFFIC A SUR L'ECOSYSTEME SUR LES PSH ?
    </h2>

        <p>
            L'impact sur les PSH dans les heures de pointe sont un facteur crusuale, avec un fauteuil on ne pourra donc pas circuler dans les transports ou rentré dans les trains.<br><br>
        La mobilité est un facteur incontournable de bien-être et d'insertion dans la société.<br>
Pour améliorer la vie de tous les voyageurs et faciliter l'accès de chacun aux transports en commun, RATP Dev a créé FlexCité dès 2003.<br><br></p>
<h2>FlexCité</h2>
<p>
FlexCité est spécialisée dans le transport à la demande et le transport de personnes en situation de handicap, pour leur permettre de profiter d’une mobilité en toute flexibilité.
<br>Et de transports de qualité, dans les meilleures conditions.
        </p>
        <a href="https://www.ratpdev.com/fr/expertises">En savoir +</a>
    </div>

    <div class="top2">
        <h1>Les aides aux déplacements,
            <br>
            tansport et handicap</h1>

            <h2>La carte mobilité inclusion</h2>
    <p>Les détenteurs de la Carte mobilité inclusion (CMI) bénéficient d'une priorité d'accès aux places assises des transports en commun et dans les files d’attente. La carte peut être accompagnée de deux mentions  : « priorité » ou « invalidité ». Cette dernière mention permet également de bénéficier de dispositions fiscales et tarifaires. Le site Mon parcours handicap présente les conditions d'accès à ces deux types de carte et les droits auxquels elles ouvrent.</p>

    <h2>L'aide aux déplacements en compensation du handicap</h2>

    <p>L'aide aux déplacements en compensation du handicap vise à aider les personnes handicapées à répondre aux besoins de mobilité liés à leur travail : équipements de véhicules individuels ou de tiers, compensation des frais de taxi ou de transport adapté…</p>

    <h2>L'aide exceptionnelle aux déplacements</h2>
    <p>Destinée aux personnes handicapée pour qui le recours aux transports en commun présente un risque, l'aide exceptionnelle aux déplacements permet de financer une autre solution de déplacement. </p>

    <a href="https://handicap.gouv.fr/deplacements-transport-et-handicap">En savoir +</a>
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


    </div>


   




     
        <script src="../assets/js/loadData.js"></script>
        <script src="../assets/js/graph.js"></script>
        <script src="../assets/js/grabData.js"></script>
       <script src="../assets/js/sketch.js"></script>

        <!-- <footer>
            <p>Handi_scipline et RATP en partenariat</p>
        </footer> -->
</body>
</html>