window.onscroll = function () { stickyNavbar() };

var navbar = document.querySelector('.my_navbar');
var profilePicture = document.querySelector('#profile-picture');
var profilePicturetext = document.querySelector('.p_info');
var navbarOffset = navbar.offsetTop;

function stickyNavbar() {
  if (window.pageYOffset >= navbarOffset) {
    navbar.classList.add('sticky');
    profilePicture.classList.add('hide');
    profilePicturetext.classList.add('show');
  }
  else {
    navbar.classList.remove('sticky');
    profilePicture.classList.remove('hide');
    profilePicturetext.classList.remove('show');
  }
}
