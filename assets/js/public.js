/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', 'assets/particles.json');

document.addEventListener('DOMContentLoaded', function () {
  const options = '';
  const toolTipped = document.querySelectorAll('.tooltipped');
  const tippedInstances = M.Tooltip.init(toolTipped, options);

  const nav = document.querySelectorAll('.sidenav');
  const navInstances = M.Sidenav.init(nav, options);
});

document.addEventListener('scroll', function (e) {
  const topBtn = document.querySelector('.top-btn');
  const mainMenu = document.querySelector('.header__navbar');
  const stickyMenu = document.querySelector('.navbar-sticky');

  if ((window.scrollY - 150) > 0) {
    topBtn.style.opacity = '1';
    topBtn.style.visibility = 'visible';

  } else {
    topBtn.style.opacity = '0';
    topBtn.style.visibility = 'hidden';
  }

  if ((window.scrollY - 150) > 0 && window.innerWidth > 600) {
    mainMenu.classList.add('navbar-fixed');
    stickyMenu.style.position = 'fixed';
  } else {
    mainMenu.classList.remove('navbar-fixed');
    stickyMenu.style.position = 'sticky';
  }
});
