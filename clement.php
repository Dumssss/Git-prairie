<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="icon" type="image/jpg" href="assets/img/Z91_3464.jpg" />

    <!--==================== SWIPER ====================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Cl&eacute;ment</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">Accueil</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i> Cl&eacute;ment
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i> A Propos
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i> Skills
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#my-qualification" class="nav__link">
                            <i class="uil uil-cloud-sun nav__icon"></i> Vie Perso
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#opensource" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> OpenSource
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>

            <div class="nav__btns">
                <!-- theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="https://www.linkedin.com/in/clementdumas/" target="_blank" class="home__social-icon">
                                <i class="uil uil-linkedin-alt"></i>
                            </a>

                            <a href="https://discordapp.com/users/681675629061865486" target="_blank" class="home__social-icon">
                                <i class="uil uil-discord"></i>
                            </a>

                            <a href="https://github.com/Dumssss" target="_blank" class="home__social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>
                        </div>
                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />

                                    <image class="home__blob-img" href="assets/img/moi.jpg" />
                                </g>
                            </svg>
                        </div>
                        <div class="home__data">
                            <h1 class="home__title">Bonjour, je suis Cl&eacute;ment</h1>
                            <h3 class="home__subtitle">Etudiant en Cybers&eacute;curit&eacute;</h3>
                            <p class="home__description">Comp&eacute;tences en developpement web et en programmation,
                                cr&eacute;atif et passionn&eacute;.</p>
                            <a href="#contact" class="button button--flex">
                                Contactez-moi <i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-button button--flex">
                            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                            <span class="home__scroll-name">Continuer</span>
                            <i class="uil uil-arrow-down home__scroll-arrow"></i>
                        </a>
                    </div>
                </div>
            </section>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <h2 class="section__title">A propos</h2>
            <span class="section__subtitle">Introduction</span>

            <div class="about__container container grid">
                <img src="assets/img/fefe.jpg" alt="" class="about__img">

                <div class="about__data">
                    <p class="about__description">Actuellement &eacute;tudiant &agrave; l&apos;Efrei en Bachelor
                        Cybersecurity &amp; Ethical
                        Hacking, et passionn&eacute; d&apos;automobile, je me sp&eacute;cialise actuellement dans les
                        r&egrave;glementations nationales et internationales de
                        la s&eacute;curit&eacute; des r&eacute;seaux et syst&egrave;mes d&apos;information
                        afin de savoir prendre des d&eacute;cisions li&eacute;es à la s&eacute;curit&eacute;
                        informatique.</p>
                    <div class="about__info">
                        <div>
                            <span class="about__info-title">3</span>
                            <span class="about__info-name">ans <br> d&apos;exp&eacute;riences</span>
                        </div>

                        <div>
                            <span class="about__info-title">10&plus;</span>
                            <span class="about__info-name">projets <br> personnels r&eacute;alis&eacute;s </span>
                        </div>

                        <div>
                            <span class="about__info-title">100&percnt;</span>
                            <span class="about__info-name">de <br> motivation</span>
                        </div>
                    </div>
                    <div class="about__buttons">
                        <a download="" href="assets/pdf/CV-Efrei.pdf" class="button button--flex">
                            T&eacute;l&eacute;chargez mon CV<i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section__title">skills</h2>
            <span class="section__subtitle">Mon niveau de Comp&eacute;tences</span>
            <div class="skills__container container grid">
                <!--==================== SKILLS 1 ====================-->
                <div class="skills__content skills__open">
                    <div class="skills__header">
                        <i class="uil uil-html5 skills__icon"></i>
                        <div>
                            <h1 class="skills__title">D&eacute;veloppement Web</h1>
                            <span class="skills__subtitle">2 ans d&apos;exp&eacute;riences</span>
                        </div>
                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">HTML</h3>
                                <span class="skills__number">90&percnt;</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__html"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">CSS</h3>
                                <span class="skills__number">70&percnt;</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__css"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">JavaSript</h3>
                                <span class="skills__number">30&percnt;</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__js"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">PHP</h3>
                                <span class="skills__number">40&percnt;</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__php"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--==================== SKILLS 2 ====================-->
                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-brackets-curly skills__icon"></i>
                        <div>
                            <h1 class="skills__title">Programmation</h1>
                            <span class="skills__subtitle">2 ans d&apos;exp&eacute;riences</span>
                        </div>
                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">C</h3>
                                <span class="skills__number">90&percnt;</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__c"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">C&plus;&plus;</h3>
                                <span class="skills__number">20&percnt;</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__cplus"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Java</h3>
                                <span class="skills__number">30&percnt;</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__java"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Python</h3>
                                <span class="skills__number">60&percnt;</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__python"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--==================== SKILLS 3 ====================-->
                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-linux skills__icon"></i>
                        <div>
                            <h1 class="skills__title">Linux</h1>
                            <span class="skills__subtitle">2 ans d&apos;exp&eacute;riences</span>
                        </div>
                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Script Bash</h3>
                                <span class="skills__number">70&percnt;</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__bash"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Ubuntu</h3>
                                <span class="skills__number">90&percnt;</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__ubuntu"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Debian</h3>
                                <span class="skills__number">60&percnt;</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__debian"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Kali</h3>
                                <span class="skills__number">60&percnt;</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__kali"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--==================== SKILLS 4 ====================-->
                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-database skills__icon"></i>
                        <div>
                            <h1 class="skills__title">Base de données</h1>
                            <span class="skills__subtitle">2 ans d&apos;exp&eacute;riences</span>
                        </div>
                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Requêtes MySQL</h3>
                                <span class="skills__number">90&percnt;</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__sql"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>

                </div>
            </div>
        </section>

        <!--==================== QUALIFICATION ====================-->
        <section class="qualification section" id="my-qualification">
            <h2 class="section__title">Vie personnelle</h2>
            <span class="section__subtitle"></span>

            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target='#education'>
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Etudes
                    </div>
                    <div class="qualification__button button--flex" data-target='#hobbies'>
                        <i class="uil uil-trophy"></i>
                        Tir Sportif
                    </div>
                </div>
                <div class="qualification__sections">
                    <!--==================== QUALIFICATION CONTENT 1 ====================-->
                    <div class="qualification__content qualification__active" data-content id="education">
                        <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">EFREI Bordeaux</h3>
                                <span class="qualification__subtitle">Bachelor Cybersecurity &amp; Ethical
                                    Hacking</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2022 - 2025
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 2 ====================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>

                            <div>
                                <h3 class="qualification__title">IUT de Bordeaux</h3>
                                <span class="qualification__subtitle">Bachelor Universitaire de Technologie -
                                    Informatique</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2021 - 2022
                                </div>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 3 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Lyc&eacute;e Pape Cl&eacute;ment</h3>
                                <span class="qualification__subtitle">BAC STI2D - Option syst&egrave;mes
                                    d&apos;information et
                                    num&eacute;rique</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2019 - 2021
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                            </div>
                        </div>
                    </div>
                    <!--==================== QUALIFICATION CONTENT 2 ====================-->
                    <div class="qualification__content" data-content id="hobbies">
                        <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>

                            <div>
                                <h3 class="qualification__title">&Eacute;quipe de France</h3>
                                <span class="qualification__subtitle">Premi&egrave;re s&eacute;l&eacute;ction en
                                    &eacute;quipe de France en mai 2023
                                    pour participer au <a href="https://www.fftir.org/competitions/@reportage/iwk-pforzheim-2023-delegation-francaise/" target="_blank" style="text-decoration: underline; color: var(--text-color) !important;">IWK Pforzheim Junior 2023</a></span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2023
                                </div>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Top 10 National</h3>
                                <span class="qualification__subtitle">Présent dans le top 10 National Junior avec une victoire lors des 4&egrave;me &eacute;valuations nationales</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2023
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 2 ====================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>

                            <div>
                                <h3 class="qualification__title">Sportif Espoir</h3>
                                <span class="qualification__subtitle">Class&eacute; sur liste ministérielle PSQS</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2019 - 2020
                                </div>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 3 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Champion de France de Tir</h3>
                                <span class="qualification__subtitle">Carabine 10M Cadet Garçon</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2019
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== Liked Open Source project ====================-->
        <section class="contact section" id="contact opensource">
            <h2 class="section__title" id="opensource">Le projet que j'ai choisi</h2>
            <span class="section__subtitle"><a href="https://github.com/HoussemDellai/Ferrari">https://github.com/HoussemDellai/Ferrari</a></span>
                <p style="margin-right: 10%; margin-left: 10%">En tant que fervent passionné d'automobiles,
                    et plus particulièrement de la prestigieuse marque Ferrari,
                    le projet Ferrari a instantanément capté mon attention.
                    Cette application mobile dédiée aux actualités de Ferrari offre bien plus qu'une simple source d'informations.
                    En intégrant un mode hors ligne, elle promet une expérience utilisateur ininterrompue,
                    quelque chose d'essentiel pour quelqu'un constamment avide d'actualités sur ces bolides emblématiques.
                    De plus, la mention du partage de code suggère une approche de développement efficace et bien organisée,
                    tandis que l'utilisation du modèle de conception MVVM confirme l'engagement envers des pratiques de développement
                    modernes et modulaires. Choisir un projet open source qui reflète ma passion pour Ferrari tout en offrant des aspects
                    techniques stimulants était une évidence, et le projet Ferrari remplit parfaitement ces critères,
                    faisant de lui le choix idéal pour mon engagement dans le monde du développement open source.</p>
   
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Cl&eacute;ment</h1>
                    <span class="footer__subtitle">Etudiant en Cybers&eacute;curit&eacute;</span>
                </div>
                <ul class="footer__links">
                    <li>
                        <a href="#skills" class="footer__link">Skills</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">PortFolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contact</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="https://www.facebook.com/clement.dumas.52/" class="footer__social">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/dums10.9/" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/clementdumas/" class="footer__social">
                        <i class="uil uil-linkedin-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer__copy"> Cl&eacute;ment Dumas &copy; 2021-
                <?php echo date("Y"); ?> • Tous droits réservés
            </p>
        </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="assets/js/script.js"></script>
</body>

</html>