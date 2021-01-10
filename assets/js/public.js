/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', 'assets/particles.json');

document.addEventListener('DOMContentLoaded', function () {
  const toolTipped = document.querySelectorAll('.tooltipped');
  const instances = M.Tooltip.init(toolTipped);

  const nav = document.querySelectorAll('.sidenav');
  const navInstances = M.Sidenav.init(nav);


});

document.addEventListener('scroll', function (e) {
  const topBtn = document.querySelector('.top-btn');
  const mainMenu = document.querySelector('.navbar__main');

  if ((window.scrollY - 150) > 0) {
    topBtn.style.opacity = '1';
    topBtn.style.visibility = 'visible';

    mainMenu.classList.add('navbar-fixed');
    mainMenu.classList.remove('navbar-static');
  } else {
    topBtn.style.opacity = '0';
    topBtn.style.visibility = 'hidden';
    mainMenu.classList.add('navbar-static');
    mainMenu.classList.remove('navbar-fixed');
  }
});
