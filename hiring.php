<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Safe Map Cozumel - Where to stay and things to do in Cozumel</title>
    <!--META KEYWORDS-->
    <meta name="description" content="Safe Map Cozumel is the best map for what to do, where to stay and how to get to Cozumel. We offer the best services on the island for you to enjoy your stay. Safe Map Cozumel provides information on services such as restaurants, beach clubs, hospitals, hotels, cafes, jewelry, crafts, among other quality services and excellent price in cozumel." />
    <meta name="keywords" content="safe, map, cozumel, how to get, where to stay, things to do, restaurants, clinics, tours, dive, snorkel, breakfast, lunch, dinner, sea, food, coffee, drugstore, jewelry, sport, bar, grill, spa, adventure, playa del carmen, cancun, cozumel map, mapa de cozumel" />
    <meta name="resource-type" content="document" />
    <meta name="revisit-after" content="45 days" />
    <meta name="classification" content="Commercial" />
    <meta name="robots" content="ALL, index, follow" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="General" />
    <meta name="author" content="Gecko Creativo" />
    <meta name="copyright" content="Safe Map Cozumel" />

    <link href="styles/style.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Dosis:200,300' rel='stylesheet' type='text/css'/>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>

    <script type="text/javascript" src="js/fade-in-jquery.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="js/feature_carousel.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        $("ul#restaurantes").hide();
        
        jcarouselVertical()
        socialIcon()
        back2top()
        lavaLamp()
        contactValidate()
        jqueryCycle()
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
            <div class="menu-container">
               <div class="nav">
                 <ul id="main_menu">
                    <li><a href="http://maui.com.mx/safem/" id="home"> Home</a></li>
                    <li><a href="issues.php">Issues</a></li>
                    <li><a href="advertisers.php">Advertisers</a>
                        <ul>
                            <li><a href="restaurants/">Restaurants</a></li>
                            <li><a href="health/">Health</a></li>
                            <li><a href="agency/">Agency</a></li>
                            <li><a href="activities/">Activities</a></li>
                            <li><a href="art/">Art</a></li>

                        </ul>
                    </li>
                    <li><a href="about_safemap.php">About Us</a></li>
                    <li><a href="faqs.php">Faq's</a></li>
                    <li><a href="tourist_information.php" >Tourist Information</a>
                       <ul>
                        <li><a href="about_cozumel.php">About Cozumel</a></li>
                        <li><a href="where-to-stay.php">Where to Stay</a></li>
                        <li><a href="things-to-do.php">Things to Do</a></li>
                        <li><a href="how-to-get.php">How to Get</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
                <li class="current"><a href="hiring.php">Hiring</a></li>
            </ul>
        </div><!-- end nav -->
</div><!-- end menu-container -->
</div><!-- end wrap -->
</div>
<!--////////header end////////-->

<!-- //////banner//////// -->
<div class="banner_small">
    <div class="wrap">
            <!--<div class="page_title">
                    <h1>CONTACT US </h1>
                </div> -->       
            </div>
        </div>
        <!--////////banner end //////// -->
        
        <!-- //////wrapper (main content) //////// -->
        <div id="wrapper">

            <!--////Main container////-->
            <div id="main-container">
               <!-- ////left containet//// -->
               <div class="left-content">
                 <div class="title_styling">
                    <h1> Hiring </h1>
                </div>
                <hr class="divide"/> <br />
                <form class="cmxform" id="contactform" method="POST" action="hiring-envio.php">
                   <fieldset>
                       <p>
                        <label for="name"> Name</label>
                        <input id="name"  name="name" type="text" size="50"  class="contact-input" />
                    </p>
                    <p>
                        <label for="slogan"> Slogan</label>
                        <input id="slogan"  name="slogan" type="text" size="50"  class="contact-input" />
                    </p>
                    <p>
                        <label for="category">Category</label>
                        <select name="subject" id="subject">
                            <option value="" selected="selected">Select a category</option>
                            <option value="Beach Hotels">Beach Hotels</option>
                            <option value="Downtown Hotels">Downtown Hotels</option>
                            <option value="Bed &amp; Breakfast">Bed &amp; Breakfast</option>
                            <option value="Houses for Rent">Houses for Rent</option>
                            <option value="Properties for Sale">Properties for Sale</option>
                            <option value="Beach Clubs">Beach Clubs</option>
                            <option value="Restaurants">Restaurants</option>
                            <option value="Coffee Shops">Coffee Shops</option>
                            <option value="Bars &amp; Clubs">Bars &amp; Clubs</option>
                            <option value="Car &amp; Scooter rentals">Car &amp; Scooter rentals</option>
                            <option value="Medical &amp; Health Services">Medical &amp; Health Services</option>
                            <option value="Handcrafts &amp; Boutique">Handcrafts &amp; Boutique</option>
                            <option value="Jewelry &amp; Silver Stores">Jewelry &amp; Silver Stores</option>
                            <option value="Non-Profit Organization">Non-Profit Organization</option>
                            <option value="Financial Club">Financial Club</option>
                            <option value="Insurance">Insurance</option>
                            <option value="Others">Others</option>
                        </select>
                    </p>    
                    <p>
                        <label for="logo"> Logo</label>
                        <input id="logo"  name="logo" type="file" size="50"  class="contact-input"/>
                    </p>
                    <p>
                        <label for="banner"> Banner</label>
                        <input id="banner"  name="banner" type="file" size="50"  class="contact-input"/>
                    </p>
                    <p>
                        <label for="texto"> Text (Max 500 characters)</label>
                        <textarea name="texto" id="texto" cols="5" rows="50" class="contact-input"></textarea>
                    </p>         

                    <p>
                        <label for="address"> Address</label>
                        <input id="address" name="addressh"  type="text" size="50" class="contact-input"/>
                    </p>
                    <p>
                        <label for="facebook">Facebook</label>
                        <input id="facebook" name="facebook"  type="text" size="50" class="contact-input"/>
                    </p>
                    <p>
                        <label for="twitter">Twitter</label>
                        <input id="twitter" name="twitter"  type="text" size="50" class="contact-input"/>
                    </p>
                    <p>
                        <label for="phoned"> Phone</label>
                        <input id="phoned" name="phoned"  type="text" size="50" class="contact-input"/>
                    </p>

                    <p>
                        <label for="email"> Email</label>
                        <input id="email" name="email"  type="text" size="50" class="contact-input"/>
                    </p>
                    <p>
                        <label for="website"> Website</label>
                        <input id="website" name="website"  type="text" size="50" class="contact-input"/>
                    </p>
                    <p>
                        <input class="primary_btn" type="submit" value="Send" id="send_button"/>

                        <input class="primary_btn" type="reset" value="Reset"/> 
                    </p>
                    <p>
                    </p>
                    <br class="clear" />
                    <p>
                        <div id="response"></div>
                    </p>
                </fieldset>
            </form> 
            <!-- Formulario ADS-->
            <hr class="divide" />

            <div class="title_styling">
                <h1> Free Ads. </h1>
            </div>
            <hr class="divide"/> <br />
            <form class="cmxform" id="contactform" method="POST" action="free-ads.php">
               <fieldset>
                <p>
                    <label for="category">Category</label>
                    <select name="subject" id="subject">
                        <option value="" selected="selected">Select a category</option>
                        <option value="Beach Hotels">Beach Hotels</option>
                        <option value="Downtown Hotels">Downtown Hotels</option>
                        <option value="Bed &amp; Breakfast">Bed &amp; Breakfast</option>
                        <option value="Houses for Rent">Houses for Rent</option>
                        <option value="Properties for Sale">Properties for Sale</option>
                        <option value="Beach Clubs">Beach Clubs</option>
                        <option value="Restaurants">Restaurants</option>
                        <option value="Coffee Shops">Coffee Shops</option>
                        <option value="Bars &amp; Clubs">Bars &amp; Clubs</option>
                        <option value="Car &amp; Scooter rentals">Car &amp; Scooter rentals</option>
                        <option value="Medical &amp; Health Services">Medical &amp; Health Services</option>
                        <option value="Handcrafts &amp; Boutique">Handcrafts &amp; Boutique</option>
                        <option value="Jewelry &amp; Silver Stores">Jewelry &amp; Silver Stores</option>
                        <option value="Non-Profit Organization">Non-Profit Organization</option>
                        <option value="Financial Club">Financial Club</option>
                        <option value="Insurance">Insurance</option>
                        <option value="Others">Others</option>
                    </select>

                </p>    
                <p>
                    <label for="name"> Business Name</label>
                    <input id="businessname"  name="businessname" type="text" size="50"  class="contact-input"/>
                </p>
                <p>
                    <label for="phoned"> Phone</label>
                    <input id="phoned" name="phoned"  type="text" size="50" class="contact-input"/>
                </p>
                <p>
                    <label for="address"> Address</label>
                    <input id="address" name="address"  type="text" size="50" class="contact-input"/>
                </p>

                <p>
                    <label for="email"> Email</label>
                    <input id="email" name="email"  type="text" size="50" class="contact-input"/>
                </p>
                <p>
                    <input class="primary_btn" type="submit" value="Send" id="send_button"/>

                    <input class="primary_btn" type="reset" value="Reset"/> 
                </p>
                <p>
                </p>
                <br class="clear" />
                <p>
                    <div id="response"></div>
                </p>
            </fieldset>
        </form>
        <br /><br />
        <div class="title_styling">
            <h1> Free ads Form.</h1>
            <div class="title_underline"></div>
        </div>
        <img src="http://www.safemapcozumel.com/images/tourist/bannerform.jpg">
    </div>
    <!--End left-content-->

    <!--rignt container-->
    <?php
    include 'right-container.php';
    ?>
    <!--rignt container end-->

</div>
<!--//// End Main container////-->
</div> 
<!-- //////End wrapper////////- -->

<!-- //////footer////// -->
<?php
include 'footer.php';
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
