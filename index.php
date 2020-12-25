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
    <!--<link rel="manifest" href="./manifest.json">-->
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
    <!--Import Google Icon Font-->
    <link type="text/css" rel="preload" as="style" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" as="style" href="assets/css/materialize.min.css" media="screen,projection"/>

    <link type="text/css" rel="stylesheet" href="assets/css/main_style.css">

</head>
<body>
<header class="header" style="min-height: 95px;">
    <div class="header__bg" id="particles-js">
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
                                <img src="assets/img/me_400x400.jpg"
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
                                            <strong class="title">BirthDate</strong>
                                            <span class="cont">20. April 1986.</span>
                                        </li>
                                        <li class="clearfix">
                                            <strong class="title">Address</strong>
                                            <span class="cont">Dragise Cvetkovica 21<br>18000 Nis, Serbia</span>
                                        </li>
                                        <li class="clearfix">
                                            <strong class="title">site</strong>
                                            <span class="cont"><a
                                                    href="https://ranikola.dev">www.raNikola.dev</a></span>
                                        </li>
                                        <li class="clearfix">
                                            <strong class="title">E-mail</strong>
                                            <span class="cont"><a
                                                    href="mailto:hello@ranikola.dev">hello@ranikola.dev</a></span>
                                        </li>
                                        <li class="clearfix">
                                            <strong class="title">Phone</strong>
                                            <span class="cont"><a href="tel:+38162369258">+381 62 369 258</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about__social light-green col s12">
                        <ul class="about__social-list row">
                            <div class="col s1 m1 offset-m4 center-align">
                                <a href="https://github.com/ranikola"
                                   target="_blank"
                                   rel="noreferrer"
                                ><i class="im im-github white-text"></i></a>
                            </div>
                            <div class="col s1 m1 center-align">
                                <a href="https://www.linkedin.com/in/ranikola"
                                   target="_blank"
                                   rel="noreferrer"
                                ><i class="im im-linkedin white-text"></i></a>
                            </div>
                            <div class="col s1 m1 center-align">
                                <a href="https://twitter.com/ranikola"
                                   target="_blank"
                                   rel="noreferrer"
                                ><i class="im im-twitter white-text"></i></a>
                            </div>
                            <div class="col s1 m1 center-align">
                                <a href="https://www.instagram.com/ranikola"
                                   target="_blank"
                                   rel="noreferrer"
                                ><i class="im im-instagram white-text"></i></a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

</header>
<div class="content grey lighten-3">
    <div class="container">
        <section id="intro" class="section section__intro">
            <div class="row">
                <div class="col s12 m12 center-align">
                    <p class="light">
                        <a class="btn waves-effect waves-light light-green"
                           target="_blank"
                           href="assets/files/CV_Nikola_Randjelovic.pdf"
                        >Download Resume <i class="tiny im im-download"></i></a>
                    </p>
                    <p class="light">Hello! I’m Nikola Randjelovic. Senior Web Developer from Serbia and I am here to
                        make my life more interesting because I love challenges and mainly develop websites.
                        My primary skills are PHP, HTML5/CSS3 and JavaScript
                        At the moment I'm working as Web Developer but in the past I worked with NGO, tourist agency,
                        start up companies and small business etc.
                        My passion is to create web sites from innovative, functional and creative designs.
                    </p>

                    <ul>After all you can expect from me:
                        <li>A lot of creative ideas</li>
                        <li>Thinking "outside of the box"</li>
                        <li>Perfection and precision</li>
                    </ul>
                </div>
            </div>
        </section>

    </div>
</div>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/particles.min.js"></script>
<script type="text/javascript" src="assets/js/public.js"></script>
</body>
</html>