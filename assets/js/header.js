/* RESPONSIVE NAV BAR */

var nav = document.getElementById('nav');
var body = document.body;
var hamburgerButton = document.getElementById('hamburger-button');
var links = document.querySelectorAll("nav li a");

for (var i = 0; i < links.length; i++) {
  links[i].addEventListener("click", function (event) {
    event.preventDefault();

    toggleNav('left');
  });
}

// Click Functionality
hamburgerButton.addEventListener('click', function () {
  toggleNav('click');
});

// Hammer.js Swipe Functionality
var mc = new Hammer.Manager(body);

var Swipe = new Hammer.Swipe();

mc.add(Swipe);

mc.on('swiperight', function () {
  toggleNav('right');
});

mc.on('swipeleft', function () {
  toggleNav('left');
});

// Toggle Nav
function toggleNav(action) {
  if (nav.classList.contains('open') && action == 'left') {
    nav.classList.remove('open');
  } else if (!nav.classList.contains('open') && action == 'right') {
    nav.classList.add('open');
  } else if (action == 'click') {
    nav.classList.toggle('open');
  }
}
