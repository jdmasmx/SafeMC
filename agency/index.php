<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Safe Map Cozumel - Where to stay and things to do in Cozumel</title>
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

    $('.bxslider').bxSlider({
      auto: true,
      autoControls: false,
      infiniteLoop: false,
      hideControlOnEnd: true
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
      <div class="logo"><a href="index.html">home</a></div>
    </div>
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
      <h1>Safe Map Cozumel Advertisers</h1>
      <div class="title_underline"></div>
    </div>

    <h3>Agency</h3><br />
    <ul class="bxslider">
      <li><a href="gecko.php"><img src="http://www.safemapcozumel.com/images/anunciantes/geckocreativo/anunciobig.jpg"  alt="" /></a></li>
    </ul>

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

