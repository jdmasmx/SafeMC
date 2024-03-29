<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Safe Map Cozumel - Where to stay and things to do in Cozumel</title>
    <link href="../../styles/style.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Dosis:200,300' rel='stylesheet' type='text/css'/>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <script type="text/javascript" src="../../js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.form.js"></script>
    <script type="text/javascript" src="../../js/contact.js"></script>



</head>



<body>

   


       
            <div class="title_styling">
                <h1>Alberto's Form Contact</h1>
                <div class="title_underline"></div>
            </div>


        <hr class="divide"/> <br />

        <form class="cmxform" id="contactform" method="POST" action="envio.php">
         <fieldset>
             <p>
                <label for="name"> Name</label>
                <input id="name"  name="name" type="text" size="30"  class="contact-input"/>
            </p>

            <p>
                <label for="email"> Email</label>
                <input id="email" name="email"  type="text" size="30" class="contact-input"/>
            </p>

            <p>
                <label for="comment">Your Comments</label>
                <textarea id="comment"  name="comment" class="contact-input" rows="" cols=""></textarea>
            </p>

            <p>
                <input class="primary_btn" type="submit" value="Send" id="send_button"/>

                <input class="primary_btn" type="reset" value="Reset"/>	
            </p>
            <br class="clear" />
            <p>
                <div id="response"></div>
            </p>
        </fieldset>
    </form>



 

</body>
</html>
