<?php

session_start();

if(!isset($_SESSION["nome"]) || !isset($_SESSION["id"]))
{
// Usuário não logado! Redireciona para a página de login
header("Location: login.html");
exit;
}

?>


<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords"
        content="​Movimentando e conectando pessoas, Trazendo oportunidades, Como tornar sua empresa mais inclusi​​​va?, Explore nossos serviços">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">

    <title>Home</title>

    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Home.css" media="screen">

    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.26.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">







    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/logo.png"
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
</head>

<body class="u-body">
    <header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-f12a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-group u-group-1">
                <div class="u-container-layout">
                    <a href="login.php"
                        class="u-border-none u-btn u-button-style u-custom-font u-font-raleway u-none u-text-body-alt-color u-btn-1">
                        <??>login
                    </a>
                    <span
                        class="u-icon u-icon-circle u-text-white u-icon-1"><svg class="u-svg-link"
                            preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5be6"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-5be6"
                            style="enable-background:new 0 0 512 512;">
                            <g>
                                <g>
                                    <path
                                        d="M437.02,330.98c-27.883-27.882-61.071-48.523-97.281-61.018C378.521,243.251,404,198.548,404,148    C404,66.393,337.607,0,256,0S108,66.393,108,148c0,50.548,25.479,95.251,64.262,121.962    c-36.21,12.495-69.398,33.136-97.281,61.018C26.629,379.333,0,443.62,0,512h40c0-119.103,96.897-216,216-216s216,96.897,216,216    h40C512,443.62,485.371,379.333,437.02,330.98z M256,256c-59.551,0-108-48.448-108-108S196.449,40,256,40    c59.551,0,108,48.448,108,108S315.551,256,256,256z">
                                    </path>
                                </g>
                            </g>
                        </svg></span>
                </div>
            </div>
            <a href="form-cadastro.php"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-4 u-custom-font u-font-raleway u-hover-custom-color-5 u-radius-30 u-text-custom-color-3 u-btn-2">cadastre-se</a>
            <a href="index.html" class="u-image u-logo u-image-1" data-image-width="190" data-image-height="185">
                <img src="images/logo.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-menu-1" data-responsive-from="MD">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-custom-color-4 u-text-hover-palette-2-base"
                        href="#" style="font-size: calc(1em + 8px);">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </symbol>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-custom-color-2"
                                href="index.html" style="padding: 10px 14px;">Home</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-custom-color-2"
                                href="Sobre-nos.html" style="padding: 10px 14px;">Sobre nós</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-custom-color-2"
                                href="Projetos.html" style="padding: 10px 14px;">Projetos</a>
                        </li>

                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-custom-color-2"
                                style="padding: 10px 14px;" href="Tecnologia-e-inclusao.html">Tecnologia &amp;
                                inclusão</a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.html"
                                        style="padding: 10px 14px;">Home</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sobre-nos.html"
                                        style="padding: 10px 14px;">Sobre nós</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Projetos.html"
                                        style="padding: 10px 14px;">Projetos</a>
                                </li>

                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        style="padding: 10px 14px;">Tecnologia &amp;
                                        inclusão</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-50"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-align-left u-clearfix u-custom-color-1 u-section-1" id="carousel_56ba">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-align-left u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-29-lg u-size-29-xl u-size-33-md u-size-33-sm u-size-33-xs u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h1 class="u-custom-font u-text u-text-body-alt-color u-text-1"> Movimentando e
                                    conectando pessoas</h1>
                                <a href="Tecnologia-e-inclusao.html"
                                    class="u-border-none u-btn u-btn-round u-button-style u-custom-color-4 u-custom-font u-font-raleway u-hover-custom-color-5 u-radius-30 u-text-custom-color-3 u-btn-1">Saiba
                                    mais!</a>
                                <p class="u-text u-text-custom-color-6 u-text-2"> Somos uma equipe de desenvolvimento
                                    mobile e web que procura atender a todos, garantindo inclusão e acessibilidade no
                                    uso de nossos sistemas</p>
                            </div>
                        </div>
                        <div
                            class="u-align-left u-container-style u-layout-cell u-right-cell u-size-27-md u-size-27-sm u-size-27-xs u-size-31-lg u-size-31-xl u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <img class="u-image u-image-1" src="images/frame_home.png" data-image-width="342"
                                    data-image-height="417">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-white u-section-2" id="carousel_9c89">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div
                class="u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-valign-top u-container-layout-1">
                                <h1 class="u-text u-text-body-color u-text-1">Trazendo oportunidades</h1>
                                <div class="u-border-6 u-border-custom-color-4 u-line u-line-horizontal u-line-1"></div>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                            <div class="u-container-layout u-valign-top u-container-layout-2">
                                <p class="u-text u-text-custom-color-3 u-text-2">
                                    <font color="#808080">A 2Circle&nbsp; trabalha para trazer o conforto e acesso aos
                                        deficientes fisícos ou neurodivergentes e outros grupos sociais através de
                                        nossos sistemas, além de oferecer oportunidades de emprego e renda&nbsp; através
                                        de nossas aplicações como a Muv, projeto desenvolvido por nossa equipe</font>
                                </p>
                                <a href="Sobre-nos.html"
                                    class="u-active-custom-color-4 u-align-left u-border-none u-btn u-btn-round u-button-style u-custom-color-4 u-custom-font u-font-raleway u-hover-custom-color-5 u-radius-50 u-text-custom-color-3 u-btn-1">Conheça
                                    nossa equipe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center-xs u-clearfix u-custom-color-1 u-section-3" src="" id="carousel_d88d">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div
                class="u-align-center-md u-align-center-sm u-align-center-xs u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <h1 class="u-align-left u-text u-text-white u-text-1">Como tornar sua empresa mais inclusi​​​va?
                    </h1>
                    <p
                        class="u-align-left u-large-text u-text u-text-custom-color-14 u-text-default-lg u-text-default-md u-text-variant u-text-2">
                        Nos contrate para desenvolver soluções tecnológicas que aumentem o alcanço social de sua
                        empresa, toranando-a um mais acessível para clientes e contribuintes que possuem algum tipo de
                        deficiência. Além disso, possuímos algumas dicas de como tornar o seu
                        ambiente de convivência mais inclusivo em princípios mais básicos, como a comunicação. Veja
                        nossa aba de Tecnologia &amp; inclusão</p>
                    <a href="Tecnologia-e-inclusao.html"
                        class="u-active-palette-4-base u-border-none u-btn u-btn-round u-button-style u-custom-color-4 u-custom-font u-font-raleway u-hover-custom-color-5 u-radius-50 u-text-custom-color-3 u-btn-1">Aprenda
                        conosco</a>
                </div>
            </div>
            <img class="u-image u-image-1" src="images/cego_lendo.jpeg" data-image-width="1880"
                data-image-height="1253">
        </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-4" id="carousel_385c">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-align-center u-text u-text-1">Explore nossos serviços</h1>
            <p class="u-text u-text-2">Descubra mais sobre nossos serviços e fique por dentro das notícias sobre
                acessibilidade, dicas e mercado</p>
            <div class="u-align-center u-container-style u-group u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <div
                        class="u-absolute-hcenter u-container-style u-custom-color-1 u-expanded u-group u-shape-rectangle u-group-2">
                        <div class="u-container-layout u-container-layout-2">
                            <div class="u-container-style u-group u-group-3">
                                <div class="u-container-layout u-container-layout-3">
                                    <h6 class="u-align-center u-text u-text-default u-text-grey-10 u-text-3">We are</h6>
                                    <img class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-1"
                                        src="images/2circle_logotipo.png" alt="" data-image-width="401"
                                        data-image-height="99">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div
                        class="u-align-center u-container-style u-custom-color-11 u-custom-item u-list-item u-repeater-item u-list-item-1">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4"><span
                                class="u-icon u-text-white u-icon-1"><svg class="u-svg-link"
                                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a352"></use>
                                </svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-a352">
                                    <g>
                                        <path
                                            d="m497 26h-482c-8.284 0-15 6.716-15 15v340c0 8.284 6.716 15 15 15h181v60h-15c-8.284 0-15 6.716-15 15s6.716 15 15 15h150c8.284 0 15-6.716 15-15s-6.716-15-15-15h-15v-60h181c8.284 0 15-6.716 15-15v-340c0-8.284-6.716-15-15-15zm-15 30v240h-452v-240zm-196 400h-60v-60h60zm-256-90v-40h452v40z">
                                        </path>
                                        <path
                                            d="m223.381 258.012c1.818.724 3.694 1.066 5.539 1.066 5.964 0 11.604-3.581 13.942-9.46l54.15-136.147c3.062-7.697-.697-16.42-8.395-19.481-7.698-3.063-16.42.697-19.481 8.395l-54.15 136.148c-3.061 7.696.698 16.417 8.395 19.479z">
                                        </path>
                                        <path
                                            d="m335.557 250.526c2.367 1.372 4.953 2.023 7.504 2.023 5.177 0 10.213-2.683 12.994-7.484l36.363-62.777c2.741-4.732 2.69-10.58-.133-15.263l-36.363-60.315c-4.277-7.095-13.495-9.378-20.591-5.102-7.095 4.277-9.379 13.496-5.102 20.591l31.786 52.724-31.919 55.106c-4.153 7.167-1.708 16.345 5.461 20.497z">
                                        </path>
                                        <path
                                            d="m155.945 245.065c2.782 4.802 7.817 7.484 12.994 7.484 2.551 0 5.138-.651 7.504-2.023 7.168-4.152 9.613-13.33 5.461-20.498l-31.919-55.106 31.786-52.724c4.277-7.095 1.993-16.313-5.102-20.591-7.096-4.278-16.314-1.993-20.591 5.102l-36.363 60.315c-2.823 4.683-2.874 10.531-.133 15.263z">
                                        </path>
                                    </g>
                                </svg>


                            </span>
                            <h4 class="u-align-center u-text u-text-4">Desenvolimento</h4>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-custom-color-12 u-custom-item u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-5"><span
                                class="u-icon u-text-white u-icon-2">
                                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 128 128"
                                    style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f12d"></use>
                                </svg>
                                <svg class="u-svg-content" viewBox="0 0 128 128" id="svg-f12d">
                                    <path
                                        d="m117.4 76c1.5 0 2.7 1.2 2.7 2.7v38.7c0 1.5-1.2 2.7-2.7 2.7h-38.7c-1.5 0-2.7-1.2-2.7-2.7v-38.7c0-1.5 1.2-2.7 2.7-2.7h38.7m0-7.9h-38.7c-5.8 0-10.6 4.8-10.6 10.6v38.7c0 5.8 4.8 10.6 10.6 10.6h38.7c5.8 0 10.6-4.8 10.6-10.6v-38.7c0-5.8-4.8-10.6-10.6-10.6z">
                                    </path>
                                    <path
                                        d="m49.3 7.9c1.5 0 2.7 1.2 2.7 2.7v38.7c0 1.5-1.2 2.7-2.7 2.7h-38.7c-1.5 0-2.7-1.2-2.7-2.7v-38.7c0-1.5 1.2-2.7 2.7-2.7h38.7m0-7.9h-38.7c-5.8 0-10.6 4.8-10.6 10.6v38.7c0 5.8 4.8 10.6 10.6 10.6h38.7c5.8 0 10.6-4.8 10.6-10.6v-38.7c0-5.8-4.8-10.6-10.6-10.6z">
                                    </path>
                                    <path
                                        d="m90 7.9c0.7 0 1.4 0.3 1.9 0.8l27.4 27.4c1 1 1 2.7 0 3.8l-27.4 27.3c-0.5 0.5-1.2 0.8-1.9 0.8s-1.4-0.3-1.9-0.8l-27.3-27.3c-1-1-1-2.7 0-3.8l27.3-27.4c0.6-0.5 1.3-0.8 1.9-0.8m0-7.9c-2.8 0-5.5 1.1-7.5 3.1l-27.3 27.4c-2 2-3.1 4.7-3.1 7.5s1.1 5.5 3.1 7.5l27.4 27.4c2 2 4.7 3.1 7.5 3.1s5.5-1.1 7.5-3.1l27.4-27.4c2-2 3.1-4.7 3.1-7.5s-1.1-5.5-3.1-7.5l-27.5-27.4c-2-2-4.6-3.1-7.5-3.1z">
                                    </path>
                                    <path
                                        d="m49.3 76c1.5 0 2.7 1.2 2.7 2.7v38.7c0 1.5-1.2 2.7-2.7 2.7h-38.7c-1.5 0-2.7-1.2-2.7-2.7v-38.7c0-1.5 1.2-2.7 2.7-2.7h38.7m0-7.9h-38.7c-5.8 0-10.6 4.8-10.6 10.6v38.7c0 5.8 4.8 10.6 10.6 10.6h38.7c5.8 0 10.6-4.8 10.6-10.6v-38.7c0-5.8-4.8-10.6-10.6-10.6z">
                                    </path>
                                </svg>
                            </span>
                            <h4 class="u-align-center u-text u-text-5">Ux Design</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-container-style u-custom-color-10 u-group u-shape-rectangle u-group-4">
                <div class="u-container-layout u-container-layout-6"><span class="u-icon u-text-white u-icon-3"><svg
                            class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-07fe"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 60 60" id="svg-07fe">
                            <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                            <title></title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="001---Accessibility" fill="currentColor" fill-rule="nonzero">
                                    <path
                                        d="M30,0 C13.4314575,-1.01453063e-15 2.02906125e-15,13.4314575 0,30 C-2.02906125e-15,46.5685425 13.4314575,60 30,60 C46.5685425,60 60,46.5685425 60,30 C59.981263,13.4392249 46.5607751,0.0187370435 30,0 Z M30,58 C14.536027,58 2,45.463973 2,30 C2,14.536027 14.536027,2 30,2 C45.463973,2 58,14.536027 58,30 C57.9823655,45.4566626 45.4566626,57.9823655 30,58 Z"
                                        id="Shape"></path>
                                    <path
                                        d="M30,4 C15.6405965,4 4,15.6405965 4,30 C4,44.3594035 15.6405965,56 30,56 C44.3594035,56 56,44.3594035 56,30 C55.983468,15.6474499 44.3525501,4.01653204 30,4 Z M30,54 C16.745166,54 6,43.254834 6,30 C6,16.745166 16.745166,6 30,6 C43.254834,6 54,16.745166 54,30 C53.9845705,43.2484376 43.2484376,53.9845705 30,54 Z"
                                        id="Shape"></path>
                                    <path
                                        d="M30,21 C33.3137085,21 36,18.3137085 36,15 C36,11.6862915 33.3137085,9 30,9 C26.6862915,9 24,11.6862915 24,15 C24.0033074,18.3123376 26.6876624,20.9966926 30,21 Z M30,11 C32.209139,11 34,12.790861 34,15 C34,17.209139 32.209139,19 30,19 C27.790861,19 26,17.209139 26,15 C26,12.790861 27.790861,11 30,11 Z"
                                        id="Shape"></path>
                                    <path
                                        d="M43.927,22.008 L43.911,22.008 L33.411,22.951 C33.053,22.9836667 32.6946667,23 32.336,23 L27.664,23 C27.306,23 26.9483333,22.984 26.591,22.952 L16.073,22.008 C14.4211163,21.8782131 12.9767869,23.1121163 12.847,24.764 C12.7172131,26.4158837 13.9511163,27.8602131 15.603,27.99 L24.09,28.76 C24.6049502,28.8065341 24.999513,29.2379517 25,29.755 L25,32.055 C25.0003524,32.5549913 24.9067272,33.0505945 24.724,33.516 L19.912,45.771 C19.2412502,47.2864694 19.9260306,49.0587502 21.4415,49.7295 C22.9569694,50.4002498 24.7292502,49.7154694 25.4,48.2 L29.986,36.987 L34.615,48.23 C35.3052861,49.7074001 37.0492941,50.3628403 38.5417645,49.7057727 C40.034235,49.0487051 40.7285204,47.319794 40.105,45.813 L35.276,33.513 C35.0937471,33.0481548 35.0001344,32.5532967 35,32.054 L35,29.754 C35.000487,29.2369517 35.3950498,28.8055341 35.91,28.759 L44.383,27.99 C46.0351598,27.864079 47.2724208,26.4226598 47.1464999,24.7705 C47.020579,23.1183402 45.5791598,21.8810791 43.927,22.007 L43.927,22.008 Z M44.216,26 L35.729,26.77 C34.181153,26.903227 32.994277,28.2014405 33,29.755 L33,32.055 C32.9996019,32.8055551 33.1403827,33.5494884 33.415,34.248 L38.261,46.587 C38.4965494,47.0865416 38.2825416,47.6824506 37.783,47.918 C37.2834584,48.1535494 36.6875494,47.9395416 36.452,47.44 L31.833,36.227 C31.5266513,35.4847868 30.8029508,35.0005712 30,35.0005712 C29.1970492,35.0005712 28.4733487,35.4847868 28.167,36.227 L23.561,47.41 C23.4177952,47.7503309 23.0987074,47.9840573 22.7310323,48.017937 C22.3633573,48.0518168 22.0069313,47.8803363 21.8039457,47.5719054 C21.6009602,47.2634745 21.5844493,46.8682879 21.761,46.544 L26.59,34.244 C26.8627455,33.5461569 27.001829,32.8032475 27,32.054 L27,29.754 C27.0067669,28.1996736 25.8196157,26.9002889 24.271,26.767 L15.77,26 C15.2177153,25.9610639 14.8015639,25.4817847 14.8405,24.9295 C14.8794361,24.3772153 15.3587153,23.9610639 15.911,24 L26.411,24.943 C26.827,24.9803333 27.244,24.999 27.662,24.999 L32.334,24.999 C32.752,24.999 33.169,24.9803333 33.585,24.943 L44.08,24 C44.344286,23.9790735 44.6059809,24.0645905 44.8069115,24.237541 C45.007842,24.4104915 45.1313571,24.6565431 45.15,24.921 C45.1717311,25.1885073 45.0850194,25.4535218 44.9093653,25.6564455 C44.7337112,25.8593693 44.4838602,25.9831676 44.216,26 Z"
                                        id="Shape"></path>
                                </g>
                            </g>
                        </svg>


                    </span>
                    <h4 class="u-align-center u-text u-text-6">Acessibilidade</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-5" id="sec-3ae6">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-size-31 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle-xl u-container-layout-1">
                                <img class="u-image u-image-default u-image-1" src="images/mulher_celular.jpeg" alt=""
                                    data-image-width="867" data-image-height="1300">
                            </div>
                        </div>
                        <div class="u-align-left u-container-style u-layout-cell u-size-29 u-layout-cell-2">
                            <div
                                class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                                <div class="u-container-style u-group u-group-1">
                                    <div
                                        class="u-container-layout u-valign-top-lg u-valign-top-xl u-container-layout-3">
                                        <h4
                                            class="u-text u-text-custom-color-3 u-text-default-lg u-text-default-xl u-text-1">
                                            Cadastre-se
                                        </h4>
                                        <p class="u-text u-text-default u-text-2">E fique por dentro das novidades da
                                            equipe</p>
                                        <div class="u-form u-form-1">
                                            <form action="#" method="POST"
                                                class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                                                source="custom" name="form" style="padding: 10px;">
                                                <div class="u-form-group u-form-name">
                                                    <label for="name-6161"
                                                        class="u-form-control-hidden u-label"></label>
                                                    <input type="text" placeholder="Insira seu Nome" id="name-6161"
                                                        name="name"
                                                        class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white"
                                                        required="">
                                                </div>
                                                <div class="u-form-email u-form-group">
                                                    <label for="email-6161"
                                                        class="u-form-control-hidden u-label"></label>
                                                    <input type="email" placeholder="Insira um endereço de email válido"
                                                        id="email-6161" name="email"
                                                        class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white"
                                                        required="">
                                                </div>
                                                <div class="u-form-group u-form-group-3">
                                                    <label for="text-cf79"
                                                        class="u-form-control-hidden u-label"></label>
                                                    <input type="text" placeholder="Insira uma senha" id="text-cf79"
                                                        name="text"
                                                        class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white">
                                                </div>
                                                <div class="u-align-left u-form-group u-form-submit">
                                                    <a href="#"
                                                        class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Cadastre-se</a>
                                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                                </div>
                                                <div class="u-form-send-message u-form-send-success"> Obrigado! A sua
                                                    mensagem foi enviada.
                                                </div>
                                                <div class="u-form-send-error u-form-send-message"> Não foi possível
                                                    enviar a sua mensagem. Por favor, corrija os erros e tente
                                                    novamente. </div>
                                                <input type="hidden" value="" name="recaptchaResponse">
                                            </form>
                                        </div>
                                        <a href="https://nicepage.com/c/sports-html-templates"
                                            class="u-active-custom-color-1 u-align-right u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-2">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-image u-section-6" id="sec-d545" data-image-width="1440" data-image-height="216">
        <div class="u-clearfix u-sheet u-valign-bottom u-sheet-1"></div>
    </section>


    <footer class="u-clearfix u-custom-color-1 u-footer" id="sec-fb60">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="401"
                data-image-height="99">
                <img src="images/2circle_logotipo.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse">
                    <a class="u-button-style u-nav-link" href="#">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </symbol>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.html"
                                style="padding: 36px 20px;">Home</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 36px 20px;">Sobre
                                nós</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                style="padding: 36px 20px;">Projetos</a>
                        </li>

                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                style="padding: 36px 20px;">Tecnologia &amp;
                                acessibilidade</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 36px 20px;">Muv</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sobre-nos.html"
                                style="padding: 36px 20px;">Sobre nós</a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.html"
                                        style="padding: 36px 20px;">Home</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 36px 20px;"
                                        href="Sobre-nos.html">Sobre nós</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 36px 20px;"
                                        href="Projetos.html">Projetos</a>
                                </li>

                                <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 36px 20px;"
                                        href="Tecnologia-e-inclusao.html">Tecnologia &amp;
                                        acessibilidade</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        style="padding: 36px 20px;">Muv</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <img class="u-image u-image-default u-preserve-proportions u-image-2"
                                src="images/twitter.png" alt="" data-image-width="30" data-image-height="23">
                        </div>
                    </div>
                    <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <img class="u-image u-image-default u-preserve-proportions u-image-3" src="images/fb.png"
                                alt="" data-image-width="30" data-image-height="30">
                        </div>
                    </div>
                    <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                            <img class="u-image u-image-default u-preserve-proportions u-image-4" src="images/insta.png"
                                alt="" data-image-width="25" data-image-height="25">
                        </div>
                    </div>
                </div>
            </div>
            <p class="u-align-right u-text u-text-default u-text-1"> Termos de Uso e Privacidade Brasil <br>© 2021 99
                Tecnologia Ltda
            </p>
            <p class="u-align-left u-text u-text-default u-text-2">Registro, SP - 11900-000, Brazil<br>+55
                (13)98165-1425&nbsp;
            </p>
        </div>
    </footer>

</body>

</html>