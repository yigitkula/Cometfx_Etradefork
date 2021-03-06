<!doctype html>
<html lang="en">
<head>
    <title>MARKETSALL</title>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="viewport" content="width=1800">
    <link rel="shortcut icon" href="/assets/img/icons/favicon.ico" type="image/x-icon" sizes="32x32" />
    <!-- Styles Start -->
    <link id="css-bootstrap" rel="stylesheet" href="/assets/dist/css/bootstrap.css">
    <link id="css-plugin-app" rel="stylesheet" href="/assets/dist/css/plugin-app.css?v=<?php echo time(); ?>">
    <link id="css-custom-app" rel="stylesheet" href="/assets/dist/css/custom-app.css?v=<?php echo time(); ?>">
    <!-- Styles End -->
    <!-- JavaScript Start -->
    <script id="script-jquery" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script id="script-popper" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script id="script-bootstrap" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- JavaScript End -->
</head>
<body class="dfn-megamenu">

<!-- Header Start -->
<header class="header">

    <!-- Mobile Header -->
    <div class="dfn-mobilemenu-mask"></div>
    <div class="dfn-mobilemenu-header">
        <a class="header-navigation-logo" href="/" title="MARKETSALL" rel="bookmark"><img src="/assets/img/svg/header_logo_light.svg" alt="MARKETSALL" /></a>
        <a id="dfn-navtggle" class="dfn-mobilemenu-btn">
            <div class="btnicon"><span></span></div>
            <div class="btntext"><small>MENÜ</small></div>
        </a>
    </div>
    <!-- Mobile Header -->

    <!-- Web Header -->
    <div class="container-fluid header-web">
        <div class="header-web-row row">

            <!-- Logo Start -->
            <div class="header-logo header-web-left col-auto">
                <a class="header-logo-link" href="/" title="MARKETSALL" rel="bookmark">
                    <img src="/assets/img/svg/header_logo_light.svg" alt="MARKETSALL" />
                </a>
            </div>
            <!-- Logo Start -->

            <!-- Navigation Start -->
            <div class="header-navigation">
                <div class="header-navigation-navbar dfn-nav dfn-headnav">
                    <?php include('nav.php'); ?>
                </div>
            </div>
            <!-- Navigation End -->

            <!-- Languages and Social Start -->
            <div class="header-langsocial header-web-right col-auto">
                <ul class="headlanglist">
                    <li><a class="active" href="#" title="ENGLISH" rel="bookmark">EN</a></li>
                    <li><a href="#" title="RUSSIAN" rel="bookmark">RU</a></li>
                </ul>
            </div>
            <!-- Languages and Social Start -->

        </div>
    </div>
    <!-- Web Header -->

</header>
<!-- Header End -->