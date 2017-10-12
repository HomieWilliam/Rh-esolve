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
    <link rel="stylesheet" href="Font-Awesome/font-awesome.min.css">
    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
    <!-- THEME STYLES -->
    <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/simpletextrotator.css" rel="stylesheet" type="text/css"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico"/>
    <script src="js/jquery.simple-text-rotator.js"></script>
    <script src="js/jquery.simple-text-rotator.min.js"></script>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html, body').animate({scrollTop:$(this.hash).offset().top}, 1000);
            });
        });
    </script>


    @yield('css')

    <style>
        body{  position: relative;}
        .By{background-color: #181818;}
        .Contacto{background-color: #111111;}
        .Contacto div{ background-color: transparent;}
         #info{color:darkgrey;}
         #subt{color:darkgrey; font-family:"Segoe UI regular";}
         .centroDoBy span, #info{font-family:"Segoe UI regular";}
        #Recrutador{  width: 18%;height: 80%;margin-left: 10%;margin-top: 3%;  }
        .linkRecrutador{margin-left: 7%;}
        .CentroContacto a{ margin-left: 10%;  }
        .menu a, .linkCandidato, .linkRecrutador{  font-size: 12px;  font-family:"Segoe UI regular";  }
        #navbar{background : linear-gradient(to right, #11998e  , #38ef7d);}
        #Slide1{  height: 500px; z-index: 0; }
        #Recrutamento{  position: relative;  width: 100%;  height: 450px;  background : linear-gradient(to right, #11998e  , #38ef7d); margin-top:65%;  }
        #centro{  position: absolute;  width: 90%;  height: 92%;  top: 4%;  left: 5%;  }
        #centro li{  display: inline;  float: left;  background-color: white;  border-radius: 10px;  margin-left: 6.5%;  width: 25%;  height: 100%;  }
        .modalidade{ width: 100%; height: 32%; margin-top: 7%;}
        .ModalidadeTexto{ width: 100%; height: 40%; margin-top: 8%;}
        .circulo{width: 50%;  height: 100%; background-color: black; border-radius: 50%; margin-left: auto;  margin-right: auto;}
        .titulo{text-align: center; color: black; font-size: 17px; font-family:"Segoe UI regular";}
        .texto{font-size: 11px; color: black; margin-top: 10%; font-family:"Segoe UI regular";}
        .Mais{ position:relative; width: 100%; height: 15%; }
        #LerMais{position:absolute; border-radius: 8px; padding-left: 35px; font-family:"Segoe UI regular"; padding-right: 35px; padding-bottom: 7px; padding-top: 7px; background-color: #38ef7d; color: white; margin-left: 28%; top: 15%; text-align: center;}
        #LerMais:hover{ text-underline: none; background-color: #38ef7d; color: black; transition: all .3s linear;  }
        .Corpo{margin-top: -51%; position: fixed;}
        #vagas{position:absolute;width: 100%; height: 1700px; z-index: 3; top: 100%;  background-color: white;}
        .iconImg{margin-top: -8%;}
        .scroll{margin-left: 5%;}
        #check{display: none;}
        .barra{ background-color: white; height: 500px; left: -200px; width: 200px; position: absolute; transition: all .3s linear;}
        nav{width: 100%; position: absolute;}
        nav a{text-decoration: none;}
        .link{ font-family:"Segoe UI regular"; color: black; padding-left: 34%; font-size: 12px;}
        .link:hover{background-color: black; color: white; transition: all .3s linear;}
        #check:checked ~ .barra{ transform: translateX(200px);}
        #linha1{position:absolute; border-right-color: black; border-right-style: solid; border-right-width: 0.5px; width:10px;height: 25%; left: 40%; top: -2.5%;}
        #linha2{position:absolute; border-right-color: darkgrey; border-right-style: solid; border-right-width: 1px; width:10px;height: 20%; left: 40%; top: 48%;}
        .local{font-size: 14px;  font-family:"Segoe UI regular"; color:darkgreen; text-align: center;}
        .nav1{margin-top: 57%;}
        .nav2{margin-top: 180%;}
        .link1{ font-family:"Segoe UI regular"; color: black; padding-left: 15%; font-size: 12px;}
        .link1:hover{background-color: black; color: white; transition: all .3s linear;}
        #Social{display: inline; float: left; width: 15%;}
    </style>
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
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<script>
    lightbox.option({
        'resizeDuration': 300,
        'wrapAround': true
    })
</script>

</body>

</html>