<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>HACIENDA ANTIGUA - Safe Map Cozumel</title>
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

    $("a[rel=hacienda_antigua]").fancybox({
      'transitionIn'    : 'none',
      'transitionOut'   : 'none',
      'titlePosition'   : 'over',
      'titleFormat'   : function(title, currentArray, currentIndex, currentOpts) {
        return '<span id="fancybox-title-over">Gallery ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
      }
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
      <h2>HACIENDA ANTIGUA</h2>
     
    </div>
    <h5>TEQUILA TOUR.</h5>

    <div id="advertiser">
      <div class="col1">
        <img src="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/haciendaAntigua.jpg">
      </div>
      <div class="col2">
        Ever wondered how Mexicans turn a spiky plant into their national drink? The Hacienda Antigua tequila tour can provide you with all the answers.
        <br />
        The price includes a delicious tequila drink and an informative guided tour of the tequila making process that lasts about 20-25 minutes with tequila tasting at the end.
      </div>
    </div>

    <div id="advertiser">
      <div class="col1">
        <a href="http://www.safemapcozumel.com/images/anunciantes/anuncio.jpg" id="banner">
         <img src="http://www.safemapcozumel.com/images/anunciantes/anuncio.jpg">
       </a>
     </div>
     <div class="col2">
      You learn about the many types of agave and how it is cropped, pulped, fermented and distilled.
      At the end of the tour you get to try some more award winning tequila.<br />
      <br /><br />
      This is not your throat-burning 'knock-it-back-shot', but a fine liquor comparable to a good Scotch whisky or French cognac.
    </div>
  </div>

  <div id="advertiser">
    <div class="col4">
      <table class="info-advertiser">

        <tr>
          <td class="campo">Address:</td><td class="dato">Carretera transversal km 9.8</td>
        </tr>
        <tr>
          <td class="campo">Facebook:</td><td class="dato"><a href="https://www.facebook.com/pages/Tequila-Tour-Cozumel-Hacienda-Antigua/111055925576923" target="_blank">Hacienda Antigua</a></td>
        </tr>
      </table>
    </div>
    <div class="col5">
      <a href="https://maps.google.com/maps/ms?msa=0&msid=215312241564867698152.0004c39feb7bd5b75e138&ie=UTF8&t=h&layer=c&cbll=20.451657,-86.876971&panoid=R5CL6y7ZnGUak8SaozYdkA&cbp=13,30.42,,0,-0.5&ll=20.450601,-86.876836&spn=0.003157,0.00603&z=17&source=embed&output=svembed" id="mapaVer">
        <img src="http://www.safemapcozumel.com/images/mapa.jpg">
      </a> 
    </div>
  </div>
  <hr class="divide" />
  <img src="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/fachada.jpg" class="middle">
  <hr class="divide" />
  <p>
    <img src="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/img1.jpg" class="left">
    The Cava Antigua label has won many international awards and is often hard to find, even in Mexico.
    <br /><br />
    Outside the building you can see hundreds of agaves growing.
    <br /><br />
    Feel free to stroll around and enjoy the grounds of this Mexican Hacienda-style building.
    <br /><br />
    The tequila center also has a shop selling tequila and souvenirs and a full-service restaurant and bar  
  </p>
  <h3>We offer:</h3>
  <ul class="lista">
    <li>One delicious tequila drink (over 18s only).</li>
    <li>Informative guided tour.</li>
    <li>Tequila tastLocation</li>
  </ul>
  <strong>
    On the highway to the East Side of Cozumel, just after the turn off for San Gervasio ruins.
    Approximately 10-15 min. in taxi or <a href="">rental car</a> from downtown and the piers.
  </strong>
  <h3>Our Gallery</h3>
  <a rel="hacienda_antigua" href="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/8big.jpeg" title="Hacienda Antigua">
    <img alt="" src="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/8.jpg" />
  </a>
  <a rel="hacienda_antigua" href="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/1big.jpeg" title="Hacienda Antigua">
    <img alt="" src="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/1.jpg" />
  </a>
  <a rel="hacienda_antigua" href="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/2big.jpeg" title="Hacienda Antigua">
    <img alt="" src="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/2.jpg" />
  </a>
  <a rel="hacienda_antigua" href="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/3big.jpeg" title="Hacienda Antigua">
    <img alt="" src="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/3.jpg" />
  </a>
  <a rel="hacienda_antigua" href="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/4big.jpeg" title="Hacienda Antigua">
    <img alt="" src="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/4.jpg" />
  </a>
  <a rel="hacienda_antigua" href="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/5big.jpeg" title="Hacienda Antigua">
    <img alt="" src="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/5.jpg" />
  </a>
  <a rel="hacienda_antigua" href="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/6big.jpeg" title="Hacienda Antigua">
    <img alt="" src="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/6.jpg" />
  </a>
  <a rel="hacienda_antigua" href="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/7big.jpeg" title="Hacienda Antigua">
    <img alt="" src="http://www.safemapcozumel.com/images/anunciantes/hacienda_antigua/7.jpg" />
  </a>



  <!-- ////left content end//// -->
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

