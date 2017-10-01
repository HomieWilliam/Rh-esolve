<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- GLOBAL MANDATORY STYLES -->
    <link href="css/Style.css" rel="stylesheet" media="(min-width: 990px)">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="(min-width: 990px)"/>
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="lightbox/dist/css/lightbox.css">
    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
    <!-- THEME STYLES -->
    <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico"/>
    @yield('css')
</head>


<body>
@include('includes.header')

<!-- page content -->
@yield('content')
<!-- /page content -->


<!-- footer content -->
@include('includes.footer')
<!-- /footer content -->

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/pyaari-main.1.0.js"></script>
<script src="js/pyaari-menu.1.0.js"></script>
<script>
    $(document).ready(function () {
        PfdMenu._ctor();
    });
</script>
<script>
    $(document).ready(function(){
        ReadMore.init();
    })
</script>

<!-- Back To Top -->
<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<script src="vendor/jquery.min.js" type="text/javascript"></script>
<script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS -->
<script src="vendor/jquery.easing.js" type="text/javascript"></script>
<script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
<script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
<script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
<script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
<script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script src="js/layout.min.js" type="text/javascript"></script>
<script src="js/components/wow.min.js" type="text/javascript"></script>
<script src="js/components/swiper.min.js" type="text/javascript"></script>
<script src="js/components/masonry.min.js" type="text/javascript"></script>
<script src="js/components/google-map.min.js" type="text/javascript"></script>
<script src="lightbox/dist/js/lightbox.js"> </script>

<script>
    lightbox.option({
        'resizeDuration': 300,
        'wrapAround': true
    })
</script>

</body>

</html>