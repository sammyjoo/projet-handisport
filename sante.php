<?php
include_once('./includes/init.php');
include_once('./admin/init.php');



$titre = 'Handisports & bien-être';
include_once('./includes/header.php');
?>
    <link rel="stylesheet" href="assets/css/sante.css">


<div class="contenu1">
<h1>Handisports et santé</h1>
<div class="design">
<img src="assets/img/SVG/design.svg" alt="">
<img src="assets/img/SVG/design.svg" alt="">
<img src="assets/img/SVG/design.svg" alt="">
<img src="assets/img/SVG/design.svg" alt="">

</div>
</div>
<div class="contenu_img">
    <img src="assets/img/sante/AdobeStock_310268788.jpg" alt="">
</div>
<div class="contenu2">
<h2>Les bénéfices possibles de la pratique sportive pour une personne en situation de handicap</h2>

<div class="contenu_listes">
<div class="liste">
<h3>Santé</h3>
<ul>
    <li>
        <p>Améliorer sa condition physique</p>
    </li>
    <li>
        <p>Lutter contre les effets néfastes de la sédentarité, de l’âge, sur la santé</p>
    </li>
    <li>
        <p>Améliorer son hygiene de vie</p>
    </li>
    <li>
        <p>Eprouver une sensation de bien-être</p>
    </li>
    <li>
        <p>Sortir de chez soi et se prendre en charge</p>
    </li>
    <li>
        <p>Diminuer son niveau de stress et d’anxiété</p>
    </li>
</ul>

<h3>Plaisir</h3>
<ul>
    <li>
        <p>Eprouver du plaisir</p>
    </li>
    <li>
        <p>Se sentir heureux</p>
    </li>
    <li>
        <p>Découvrir de nouvelles sensations</p>
    </li>
    <li>
        <p>Ressentir son corps</p>
    </li>
    <li>
        <p>Expérimenter de nouveaux horizons</p>
    </li>

</ul>

<h3>Compétition</h3>
<ul>
    <li>
        <p>Apprendre à gérer son stress</p>
    </li>
    <li>
        <p>Découvrir le plaisir de la victoire</p>
    </li>
    <li>
        <p>Apprendre à gérer l’échec</p>
    </li>
    <li>
        <p>Apprendre à canaliser positivement son aggressivité</p>
    </li>
</ul>
</div>

<div class="liste">
<h3>Entraînement</h3>
<ul>
    <li>
        <p>Apprendre de nouveaux savoirs et savoir-faire</p>
    </li>
    <li>
        <p>Progresser</p>
    </li>
    <li>
        <p>Mesurer et développer ses capacités</p>
    </li>
    <li>
        <p>Prendre confiance en soi, se sentir capable</p>
    </li>
</ul>

<h3>Socialisation</h3>
<ul>
    <li>
        <p>Apprendre à collaborer</p>
    </li>
    <li>
        <p>Augmenter son niveau d’autonomie</p>
    </li>
    <li>
        <p>Rencontrer des gens différents</p>
    </li>
    <li>
        <p>Apprendre à communiquer</p>
    </li>
    <li>
        <p>Nouer des relations durables</p>
    </li>
    <li>
        <p>Affirmer sa spécificité : identité, communication, culture</p>
    </li>
    <li>
        <p>Se ressourcer au milieu de ses “pairs”</p>
    </li>
</ul>

<h3>Affirmation</h3>
<ul>
    <li>
        <p>Faire de son mieux</p>
    </li>
    <li>
        <p>Progresser</p>
    </li>
    <li>
        <p>Se fixer des objectifs</p>
    </li>
    <li>
        <p>Devenir un gagnant</p>
    </li>
</ul>
</div>
</div>
</div>
<div class="contenu3">
    <h1>Écosystème du pratiquant et freins identifiés</h1>
    <p>On compte 12 millions de Français (18 % de la population) en situation de handicap dont
2,7 millions qui disposent d’une reconnaissance administrative de leur handicap.<br><br>
Cependant, même si peu d’études spécifiques existent, il est acquis que peu de PSH
pratiquent de manière régulière une activité physique et sportive dont les effets positifs
sont pourtant régulièrement démontrés :<br> lutte contre les effets de la sédentarité et contre
les risques accrus d’obésité qui en découlent, amélioration de la mobilité, diminution de
la prise de médicaments,<br> sentiment de vivre son corps de manière positive et d’en avoir
une meilleure perception, etc.<br><br></p>
</div>

<div class="contenu_img">
    <img src="assets/img/sante/AdobeStock_279221873.jpg" alt="">
</div>

<div class="contenu4">
<h2>Le développement de la pratique sportive des PSH passe par l’identification des éléments
qui entourent le pratiquant,<br> et qui peuvent, à un instant de son parcours, apparaître
comme des freins à la pratique.</h2>

<p>
Chaque composante de cet écosystème est déterminante
dans l’accès réel à une pratique sportive :
</p>

<ul>
    <li>
        <p>La formation et l’encadrement</p>
    </li>
    <li>
        <p>Le transport</p>
    </li>
    <li>
        <p>L’environnement social </p>
    </li>
    <li>
        <p>L’accessibilité des infrastructures</p>
    </li>
    <li>
        <p>L’équipement adapté</p>
    </li>
    <li>
        <p>L’offre de pratique</p>
    </li>
</ul>

<h2>Data visualisation de l'écosystème du pratiquant</h2>
<div class="data">
<p>La data visualisation sur le </p><a href="<?= URL ?>dataviz/index.php" target="_blank">trafic RATP </a>
</div>

<div class="data">
<p>La data visualisation sur l'étude </p><a href="#">"sport et handicaps" </a>
</div>

</div>

<?php
    include_once('includes/footer.php');
?>