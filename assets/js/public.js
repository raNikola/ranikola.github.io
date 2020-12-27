/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js',  'assets/particles.json');

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems);
});
