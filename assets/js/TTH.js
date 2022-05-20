// créer une action a deux pages différente en fonction du click

let accompagnement = false;
let url = "";
let sliderButton = document.getElementById('slider_button');
sliderButton.addEventListener('click', function() {
  accompagnement ? accompagnement = false : accompagnement = true;
});

let submitButton = document.getElementById('check_action');
submitButton.addEventListener('click', function() {
  accompagnement ? url = "../handisports.php" : url = "Profil.php";
  window.location.href = url;
});