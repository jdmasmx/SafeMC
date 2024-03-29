<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Restautrant Alberto's - Safe Map Cozumel</title>
  <link href="../styles/style.css" rel="stylesheet" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'/>
  <link href='http://fonts.googleapis.com/css?family=Dosis:200,300' rel='stylesheet' type='text/css'/>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/jquery.lavalamp.min.js"></script>

  <script type="text/javascript" src="../js/jquery.lavalamp.min.js"></script>

  <script type="text/javascript" src="../js/fade-in-jquery.js"></script>
  <script type="text/javascript" src="../js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="../js/jquery.jcarousel.min.js"></script>
  <script type="text/javascript" src="../js/feature_carousel.js"></script>
  <script type="text/javascript" src="../js/common.js"></script>
  <script type="text/javascript" src="../css/jquery.mousewheel-3.0.4.pack.js"></script>
  <script type="text/javascript" src="../css/jquery.fancybox-1.3.4.pack.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox-1.3.4.css" media="screen" />
  <script src="../js/jquery.bxslider.min.js"></script>
  <link href="../js/jquery.bxslider.css" rel="stylesheet" />

  <script type="text/javascript">



  $(document).ready(function(){
    $("a#banner").fancybox();



    $("#contacto").fancybox({
      'width'       : '50%',
      'height'      : '100%',
      'autoScale'     : false,
      'transitionIn'    : 'elastic',
      'transitionOut'   : 'elastic',
      'type'        : 'iframe'
    });

    $("#mapaVer").fancybox({
      'width'       : '75%',
      'height'      : '75%',
      'autoScale'     : false,
      'transitionIn'    : 'elastic',
      'transitionOut'   : 'elastic',
      'type'        : 'iframe'
    });

  });

  $(document).ready(function(){
    $('.bxslider').bxSlider({
      pagerCustom: '#bx-pager',
      adaptiveHeight: true
    });

  });

  $(document).ready(function()
  {	
    //jcarouselHorizontal()


    socialIcon()
    back2top()
    lavaLamp()
  });
  </script>

</head>

<body>
 <!--////////header////////-->
<div class="header">
   <div class="wrap">
    <div class="company-logo">
      <div class="logo"><a href="../index.html">home</a></div>
    </div>


    <!-- -->
    <?php 
    include '../menu-advertisers.php';

    ?>

   <!-- end menu-container -->
</div><!-- end wrap -->
</div>
<!--////////header end////////-->
<!-- /////banner/////-->
<div class="banner_small">
  <div class="wrap">

  </div>
</div>
<!-- /////banner end/////-->

<!-- ////wrapper////// -->
<div id="wrapper">
  <!-- /////Main container///// -->
  <div id="main-container">
   <!-- ////left content/////-->
   <div class="left-content">

    <div class="title_styling">
      <h2>ALBERTOS BEACH BAR RESTAURANT</h2>
     
    </div>
    <h5>THE BEST TAIL I EVER HAD!</h5>

    <div id="advertiser">
      <div class="col1">
        <img src="http://www.safemapcozumel.com/images/anunciantes/albertos/albertos.jpg">
      </div>
      <div class="col2">
        Here is a picture of one of their lobster tails. Lobeter tails are their specialty and they are sold by weight. If you want to see what a fresh red snapper looks like just click on the picture to the right. They have a boat that stops by every morning to sell them fresh fish caught that day. Our Cozumel Beaches rarely have the fisherman pull right up to the dock and sell fish to the beaches like this. If you take a look at the picture you can see how fresh the snapper is because when they are fresh the eyes are still crystal clear!
      </div>
    </div>

    <div id="advertiser">
      <div class="col1">
        <a href="http://www.safemapcozumel.com/images/anunciantes/albertos/anuncioBig.jpg" id="banner">
          <img src="http://www.safemapcozumel.com/images/anunciantes/albertos/anuncio.jpg">
        </a>
      </div>
      <div class="col2">
        Alberto's place is a definite must vacation visit if you want non-commercial, natural, rustic, east side of the island tranquility, and to just get away and experience what Cozumel beaches used to be like many years ago. They even have beautiful white sand that gently slops into the water and not as rocky as many other beaches.      </div>
      </div>

      <div id="advertiser">
        <div class="col4">

          <table class="info-advertiser">
            <tr>
              <td class="campo">Address 1:</td> <td class="dato">Rafael E. Melgar inside Hotel Costa Brava.</td>
            </tr>
            <tr>
              <td class="campo">Address 2:</td><td class="dato"> 18 km south coast road.</td>
            </tr>
            <tr>
              <td class="campo">Phone:</td><td class="dato">  987 869 1228</td>
            </tr>
            <tr>
              <td colspan="2" class="info-email">
                <a href="http://maui.com.mx/safem/restaurants/albertos/" id="contacto">
                  "Send a Email"
                  <!--albertosbeachbar@hotmail.com --></a>
                </td>
              </tr>
            </table>
          </div>
          <div class="col5">
            <a href="http://maps.google.com.mx/maps/ms?msa=0&msid=215312241564867698152.0004b7dc7689dfa964f0a&ie=UTF8&t=m&ll=20.438595,-86.987&spn=0.225197,0.291824&z=11&output=embed" id="mapaVer">
              <img src="http://www.safemapcozumel.com/images/mapa.jpg">
            </a>
          </div>
        </div>
        <hr class="divide" />
        <h3>About Us</h3>
        <a href="http://www.safemapcozumel.com/images/anunciantes/albertos/restaurant.jpg" id="banner">
          <img src="http://www.safemapcozumel.com/images/anunciantes/albertos/restaurant.jpg" class="imagen-advertiser">
        </a>
        <p>
          Albertos Beach Bar is also Know "El paso del Cedral" due to the fact that it's found in the cozumel village of the same name. The gigantic cross found at the front was built to honor the festivities of "Santa Cruz" which are celebrated by the habitants of the town.
        </p>
        <hr class="divide" />
        <h3>Our Gallery</h3>
        <ul class="bxslider">
          <li><img src="http://www.safemapcozumel.com/images/anunciantes/albertos/1big.jpg" /></li>
          <li><img src="http://www.safemapcozumel.com/images/anunciantes/albertos/2big.jpg" /></li>
          <li><img src="http://www.safemapcozumel.com/images/anunciantes/albertos/3big.jpg" /></li>
        </ul>

        <div id="bx-pager">
          <a data-slide-index="0" href=""><img src="http://www.safemapcozumel.com/images/anunciantes/albertos/1.jpg" /></a>
          <a data-slide-index="1" href=""><img src="http://www.safemapcozumel.com/images/anunciantes/albertos/2.jpg" /></a>
          <a data-slide-index="2" href=""><img src="http://www.safemapcozumel.com/images/anunciantes/albertos/3.jpg" /></a>
        </div>
        <hr class="divide" />
        <h3>Our Location</h3>
        <br />
        <a href="http://www.safemapcozumel.com/images/anunciantes/albertos/mapa.jpg" id="banner">
          <img src="http://www.safemapcozumel.com/images/anunciantes/albertos/mapa.jpg" class="imagen-advertiser">
        </a>
        <hr class="divide" />
        <h3>Our Video</h3>
        <br />
        <object class="imagen" width="640" height="360"><param name="movie" value="http://www.youtube.com/v/1SHVSFWJDc8&hl=en_US&feature=player_embedded&version=3"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.youtube.com/v/1SHVSFWJDc8&hl=en_US&feature=player_embedded&version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="640" height="360"></embed></object>

      </div>
      <!-- ////left content end//// -->

      <!-- ////rignt container//// -->
      <?php
      include '../right-container.php';
      ?>
      <!-- ////rignt container end//// -->
    </div> 
    <!-- /////END Main container///// -->
  </div>
  <!-- ////wrapper///// -->

  <!-- //////footer////// -->
  <?php
  include '../footer.php';
  ?>
  <!-- //////footer end////// -->
  <div id="goto_top"></div>
  <script type="text/javascript">


  $(".category").click(function(){
    var btnid = $(this).attr("id");
    if ($("ul#"+btnid+"").is(":hidden")) {
      $("ul#"+btnid+"").slideDown("slow");
    } else {
      $("ul#"+btnid+"").hide();
    }
  });

  </script>
</body>
</html>

