<?php header('Content-type: text/html; charset=utf-8; Accept-Encoding: br;q=1.0, gzip;q=0.8, *;q=0.1;'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8"/>
    <title>cv.ranikola.dev</title>
    <link rel="canonical" href="https://ranikola.github.io/">
    <meta name="description"
          content="I am Software Developer from Serbia and I am here to make my life more interesting because I love challenges and mainly develop websites."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords" content="HTML, CSS, PHP, LARAVEL, JAVASCRIPT, Developer">
    <meta name="author" content="Nikola Randjelovic">
    <link rel="manifest" href="./manifest.json">
    <meta name="theme-color" content="#317EFB"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="apple-touch-icon" href="/favicon.ico">
    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Person",
        "name": "Nikola Randjelovic",
        "jobTitle": "Senior Web Developer",
        "email": "mailto:hello@ranikola.dev",
        "url": "https://ranikola.dev",
        "description": "I am Software Developer from Serbia and I am here to make my life more interesting because I love challenges and mainly develop websites."
    }</script>
    <!--Import Icon Font-->
    <link type="text/css" rel="stylesheet" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/main_style.css">

</head>
<body class="grey lighten-3">
<header class="header" style="min-height: 95px;">
    <div class="header__bg white" id="particles-js">
        <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;"></canvas>
    </div>
    <div class="header__bar">
        <div class="head-bar-inner">
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                </div>
                <div class="col-sm-9 col-xs-6">
                    <nav>
                        <div class="nav-wrapper">
                            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i
                                    class="material-icons">menu</i></a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="#about">About<span></span></a></li>
                                <li><a href="#skills">Skills<span></span></a></li>
                                <li><a href="#portfolio">Portfolio<span></span></a></li>
                                <li><a href="#experience">Experience<span></span></a></li>
                                <li><a href="#contact">Contact <span></span><span></span></a></li>
                            </ul>
                        </div>
                    </nav>
                    <ul class="sidenav" id="mobile-demo">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                        <li><a href="collapsible.html">Javascript</a></li>
                        <li><a href="mobile.html">Mobile</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container header__container">
        <section id="about" class="section about">
            <div class="col s12 m7">
                <div class="about__box">
                    <div class="about__profile">
                        <div class="row">
                            <div class="col s12 m5 about__profile-image">
                                <img src="assets/images/me_400x400.jpg"
                                     alt="Nikola Randjelovic" width="400" height="400">
                            </div>
                            <div class="col s12 m7 card-stacked">
                                <div class="card-content">
                                    <div class="about__profile-info">
                                        <div class="about__profile-preword"><span class="light-green">Hello</span></div>
                                        <h1 class="about__profile-title"><span>I'm</span> Nikola Randjelovic</h1>
                                        <h2 class="about__profile-position">Senior Web Developer</h2>
                                    </div>
                                    <ul class="about__profile-list">
                                        <li class="clearfix">
                                            <strong class="col s12 m3 title">BirthDate</strong>
                                            <span class="col s12 m6 cont">20. April 1986.</span>
                                        </li>
                                        <li class="clearfix">
                                            <strong class="col s12 m3 title">Address</strong>
                                            <span class="col s12 m9 cont">Dragise Cvetkovica 21<br>18000 Nis, Serbia</span>
                                        </li>
                                        <li class="clearfix">
                                            <strong class="col s12 m3 title">site</strong>
                                            <span class="col s12 m9 cont">
                                                <a href="https://ranikola.dev">www.raNikola.dev</a>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <strong class="col s12 m3 title">E-mail</strong>
                                            <span class="col s12 m9 cont">
                                                <a href="mailto:hello@ranikola.dev">hello@ranikola.dev</a>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <strong class="col s12 m3 title">Phone</strong>
                                            <span class="col s12 m9 cont">
                                                <a href="tel:+38162369258">+381 62 369 258</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about__social light-green col s12">
                        <div class="about__social-list row">
                            <ul>
                                <li class="col s3 m1 offset-m4 center-align">
                                    <a href="https://github.com/ranikola"
                                       target="_blank"
                                       rel="noreferrer"
                                    ><i class="im im-github white-text"></i><span class="hide">github</span></a>
                                </li>
                                <li class="col s3 m1 center-align">
                                    <a href="https://www.linkedin.com/in/ranikola"
                                       target="_blank"
                                       rel="noreferrer"
                                    ><i class="im im-linkedin white-text"></i><span class="hide">linkedin</span></a>
                                </li>
                                <li class="col s3 m1 center-align">
                                    <a href="https://twitter.com/ranikola"
                                       target="_blank"
                                       rel="noreferrer"
                                    ><i class="im im-twitter white-text"></i><span class="hide">twitter</span></a>
                                </li>
                                <li class="col s3 m1 center-align">
                                    <a href="https://www.instagram.com/ranikola"
                                       target="_blank"
                                       rel="noreferrer"
                                    ><i class="im im-instagram white-text"></i><span class="hide">instagram</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</header>
<div class="content">
    <div class="container">
        <section id="intro" class="section intro">
            <div class="row">
                <div class="col s12 m12 light center-align intro__download_cv">
                    <a class="btn waves-light waves-effect intro__download_btn"
                       target="_blank"
                       href="assets/files/CV_Nikola_Randjelovic.pdf"
                    >Download Resume</a>
                </div>
                <div class="col s12 m12 center-align intro__article">
                    <p class="">Hello! I'm Nikola Randjelovic, Senior Web Developer. I am here to make my life more
                        interested because I love challenges and mainly develop websites.
                        My primary skills are PHP, HTML5/CSS3 and JavaScript. Currently, I am working as a Web Developer
                        but, I have worked with NGOs, tourist agencies, start-up companies, and small businesses, etc.
                        My passion is to create a web application from innovative, functional, and creative designs.
                    </p>
                    <!--<p class="light">After all you can expect from me:</p>
                    <ul>
                        <li>A lot of creative ideas</li>
                        <li>Thinking "outside of the box"</li>
                        <li>Perfection and precision</li>
                    </ul>-->
                </div>
            </div>
        </section>
        <section id="skills" class="section skills">
            <div class="row">
                <div class="col s12 flow-text center-align">
                    <h2>Professional Skills</h2>
                    <p></p>
                </div>
                <div class="col s12 m12">
                    <div class="card center-align white skills__card">
                        <div class="card-content">
                            <div class="skills__brand-logo php">
                                <a href="https://www.php.net/"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="PHP"
                                ><img src="assets/images/technologies/php-logo.svg" alt="php"></a>
                            </div>
                            <div class="skills__brand-logo html5">
                                <a href="https://www.w3.org/"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="HTML 5"
                                ><img src="assets/images/technologies/html5.svg" alt="html5"></a>
                            </div>
                            <div class="skills__brand-logo css3">
                                <a href="https://www.w3.org/"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="CSS3"
                                ><img src="assets/images/technologies/css3.svg" alt="css3"></a>
                            </div>
                            <div class="skills__brand-logo javascript">
                                <a href="https://www.javascript.com/"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="JavaScript"
                                ><img src="assets/images/technologies/logo-javascript.svg" alt="JS"></a>
                            </div>
                            <div class="skills__brand-logo ECMAScript">
                                <a href="http://www.ecma-international.org/"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="ECMAScript 2015"
                                ><img src="assets/images/technologies/es6.svg" alt="ECMAScript 2015"></a>
                            </div>
                            <div class=" skills__brand-logo jquery">
                                <a href="https://jquery.com/"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="jQuery"
                                ><img src="assets/images/technologies/jquery.svg" alt="jquery"></a>
                            </div>
                            <div class=" skills__brand-logo laravel">
                                <a href="https://www.laravel.com/"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="Laravel"
                                ><img src="assets/images/technologies/laravel_logomark.min.svg" alt="laravel">
                                </a>
                            </div>
                            <div class=" skills__brand-logo wordpress">
                                <a href="https://www.wordpress.org/"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="WordPress"
                                ><img src="assets/images/technologies/WordPress-logotype-standard.png"
                                      alt="WordPress"></a>
                            </div>
                            <div class="skills__brand-logo npm">
                                <a href="https://www.npmjs.com/"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="npm"
                                ><img src="assets/images/technologies/Npm-logo.svg" alt="npm"></a>
                            </div>
                            <div class="skills__brand-logo sass">
                                <a href="https://sass-lang.com/"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="Sass"
                                ><img src="assets/images/technologies/sass.svg" alt="sass"></a>
                            </div>
                            <div class="skills__brand-logo github">
                                <a href="https://github.com"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="GitHub"
                                ><img src="assets/images/technologies/GitHub-Mark-120px-plus.png" alt="GitHub"></a>
                            </div>
                            <div class="skills__brand-logo vagrant">
                                <a href="https://www.vagrantup.com/"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="Vagrant"
                                ><img src="assets/images/technologies/vagrant.svg" alt="vagrant"></a>
                            </div>
                            <div class="skills__brand-logo grunt">
                                <a href="https://gruntjs.com/"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="GRUNT"
                                ><img src="assets/images/technologies/grunt-logo.svg" alt="grunt"></a>
                            </div>
                            <div class="skills__brand-logo codeship">
                                <a href="https://app.codeship.com/"
                                   rel="noopener"
                                   target="_blank"
                                   class="tooltipped"
                                   data-position="top"
                                   data-tooltip="CodeShip"
                                ><img src="assets/images/technologies/codeship.svg" alt="CodeShip"></a>
                            </div>
                        </div>
                        <div class="card-action">
                            <p>These technologies I use daily. There is much more that I use from time to time. I have a list of websites that I use for researching, investigation, learning, and information about new tech.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript" src="assets/js/particles.min.js"></script>
<script type="text/javascript" src="assets/js/public.js"></script>
</body>
</html>