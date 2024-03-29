<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Restaurant Camilo's- Safe Map Cozumel</title>
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
      <h2>CAMILO'S - SEA FOOD</h2>
      
    </div>
    <h5>THE DIFFERENCE IN SEAFOOD</h5>

    <div id="advertiser">
      <div class="col1">
        <img src="http://www.safemapcozumel.com/images/anunciantes/camilos/camiloslogo.jpg">
      </div>
      <div class="col2">
        Dedicated since 2003 to the creation of a menu of specialties from the sea and the most representative Mexican dishes offer from a rich shrimp taco, aguachile, ceviches, cocktails, to a delicious lobster or grilled seafood plus a wide variety refreshing drinks, beers and wines. 
        <br /> <br />
        Delivery service and reservations at 987 872 61 61
      </div>
    </div>

    <div id="advertiser">
      <div class="col1">
        <a href="http://www.safemapcozumel.com/images/anunciantes/camilos/anuncioBig.jpg" id="banner">
         <img src="http://www.safemapcozumel.com/images/anunciantes/camilos/anuncio.jpg">
       </a>
     </div>
     <div class="col2">

     </div>
   </div>

   <div id="advertiser">
    <div class="col4">
      <table class="info-advertiser">
        <tr>
          <td class="campo">Address 1:</td> <td class="dato">5 Avenue between 2 and 4 Street. <br />Centro. Cozumel, Quintana Roo, Mexico</td>
        </tr>
        <tr>
          <td class="campo">Phone:</td><td class="dato">987 872 61 61</td>
        </tr>
        <tr>
          <td colspan="2" class="info-email">
            <a href="http://maui.com.mx/safem/restaurants/camilos/" id="contacto">
              "Send a Email"
              <!--mariscoscamilos@hotmail.com --></a>
            </td>
          </tr>
        </table>
      </div>
      <div class="col5">
        <a href="http://maps.google.com/maps/ms?msa=0&msid=215312241564867698152.0004b2f6b3d0b5f4841d9&ie=UTF8&t=m&vpsrc=0&layer=c&cbll=20.511399,-86.948007&panoid=E54d51vUsUU3igEWIkYjtA&cbp=13,0.54,,0,0.97&ll=20.510221,-86.947249&spn=0.003155,0.00603&z=17&source=embed&output=svembed" id="mapaVer">
          <img src="http://www.safemapcozumel.com/images/mapa.jpg">
        </a>
      </div>
    </div>
    <br />
    <h3>Our Gallery</h3>
    <ul class="bxslider">
      <li><img src="http://www.safemapcozumel.com/images/anunciantes/camilos/1big.jpeg" /></li>
      <li><img src="http://www.safemapcozumel.com/images/anunciantes/camilos/2big.jpeg" /></li>
      <li><img src="http://www.safemapcozumel.com/images/anunciantes/camilos/3big.jpeg" /></li>
      <li><img src="http://www.safemapcozumel.com/images/anunciantes/camilos/4big.jpeg" /></li>
      <li><img src="http://www.safemapcozumel.com/images/anunciantes/camilos/5big.jpeg" /></li>
    </ul>

    <div id="bx-pager">
      <a data-slide-index="0" href=""><img src="http://www.safemapcozumel.com/images/anunciantes/camilos/1.jpg" width="100"/></a>
      <a data-slide-index="1" href=""><img src="http://www.safemapcozumel.com/images/anunciantes/camilos/2.jpg" width="100"/></a>
      <a data-slide-index="2" href=""><img src="http://www.safemapcozumel.com/images/anunciantes/camilos/3.jpg" width="100"/></a>
      <a data-slide-index="2" href=""><img src="http://www.safemapcozumel.com/images/anunciantes/camilos/4.jpg" width="100"/></a>
      <a data-slide-index="2" href=""><img src="http://www.safemapcozumel.com/images/anunciantes/camilos/5.jpg" width="100"/></a>
    </div>

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

