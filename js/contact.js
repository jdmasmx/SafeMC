$(function() {
	// Validate the contact form
  $('#contactform').validate({
  	// Specify what the errors should look like
  	// when they are dynamically added to the form
  	//errorElement: "span",
    //wrapper: "span",


  	// Add requirements to each of the fields
  	rules: {
  		
      name: {
        required: true,
        //minlength: 5
      },
      
      slogan: {
        required: true,
        //minlength: 5
      },

       subject: {
        required: true,
        //minlength: 5
      },

      logo: {
        required: true,
        //minlength: 5
      },

     texto: {
        required: true,
        minlength: 5,
        maxlength: 520
      },

       address: {
        required: true,
        //minlength: 5
      },

   

       phoned: {
        required: true,
        //minlength: 5
      },
       number: {
        required: true,
        //minlength: 5
      },

      email: {
        required: true,
        email: true
      },

    

        businessname: {
        required: true,
        //minlength: 5
      },
      
      

      
      
      comment: {
        required: true,

      },

      
    },


    messages: {

     email: {
      required: "Write a Email.",
      email: "Write a Email."
    },
    
  },

  	// Use Ajax to send everything to processForm.php
  	submitHandler: function(form) {
  		$("#send_button").attr("value", "Sending...");
  		$(form).ajaxSubmit({
  			success: function(responseText, statusText, xhr, $form) {
  				//$(form).slideUp("fast");
          $("#send_button").attr("value", "Send");
          $("#name").attr("value", "");
          $("#number").attr("value", "");
          $("#comment").attr("value", "");
          $("#email").attr("value", "");
          $("#response").html(responseText).hide().slideDown("fast");
        }
      });
  		return false;
  	}
  });
});