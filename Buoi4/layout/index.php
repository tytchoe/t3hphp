<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- FONTS
		============================================ -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- FANCYBOX CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">

    <!-- BXSLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.bxslider.css">

    <!-- MEANMENU CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">

    <!-- JQUERY-UI-SLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery-ui-slider.css">

    <!-- NIVO SLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="css/nivo-slider.css">

    <!-- OWL CAROUSEL CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- OWL CAROUSEL THEME CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.theme.css">

    <!-- BOOTSTRAP CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FONT AWESOME CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- NORMALIZE CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">

    <!-- MAIN CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">

    <!-- STYLE CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">

    <!-- RESPONSIVE CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- IE CSS
		============================================ -->
    <link rel="stylesheet" href="css/ie.css">

    <!-- MODERNIZR JS
		============================================ -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- HEADER-TOP START -->
<?php include_once 'header_top.php'?>
<!-- HEADER-TOP END -->
<!-- HEADER-MIDDLE START -->
<?php include_once 'header_middle.php' ?>
<!-- HEADER-MIDDLE END -->
<!-- MAIN-MENU-AREA START -->
<?php include_once 'menu.php' ?>
<!-- MAIN-MENU-AREA END -->
<!-- MAIN-CONTENT-SECTION START -->
<?php
    if (!empty($_GET['page'])){
        if ($_GET['page']== 'list') {
            include_once 'list.php';
        }else if($_GET['page']== 'grid'){
            include_once 'gird.php';
        }
    }else {
        include_once 'home.php';
    }
//    print_r($_GET['page']);
//    die();
?>
<!-- LATEST-NEWS-AREA END -->
<!-- BRAND-CLIENT-AREA START -->
<?php include_once 'support.php' ?>
<!-- COMPANY-FACALITY END -->
<!-- FOOTER-TOP-AREA START -->
<?php include_once 'footer.php' ?>
<!-- FOOTER-TOP-AREA END -->
<!-- COPYRIGHT-AREA START -->
<footer class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="copy-right">
                    <address>Copyright © 2015 <a href="http://bootexperts.com/">BootExperts</a> All Rights Reserved</address>
                </div>
                <div class="scroll-to-top">
                    <a href="#" class="bstore-scrollertop"><i class="fa fa-angle-double-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- COPYRIGHT-AREA END -->
<!-- JS
		===============================================-->
<!-- jquery js -->
<script src="js/vendor/jquery-1.11.3.min.js"></script>

<!-- fancybox js -->
<script src="js/jquery.fancybox.js"></script>

<!-- bxslider js -->
<script src="js/jquery.bxslider.min.js"></script>

<!-- meanmenu js -->
<script src="js/jquery.meanmenu.js"></script>

<!-- owl carousel js -->
<script src="js/owl.carousel.min.js"></script>

<!-- nivo slider js -->
<script src="js/jquery.nivo.slider.js"></script>

<!-- jqueryui js -->
<script src="js/jqueryui.js"></script>

<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>

<!-- wow js -->
<script src="js/wow.js"></script>
<script>
    new WOW().init();
</script>

<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 8,
            scrollwheel: false,
            center: new google.maps.LatLng(35.149868, -90.046678)
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- main js -->
<script src="js/main.js"></script>
</body>


</html>