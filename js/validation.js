$(function() {
  /* ========================================================================= */
  /*	Contact Form
  /* ========================================================================= */

  $('#contact-form').validate({
    rules: {
      name: {
        required: true,
        minlength: 2
      },
      email: {
        required: true,
        email: true
      },
      subject: {
        required: true
      },
      message: {
        required: true
      }
    },
    messages: {
      name: {
        required: "Enter your name please",
        minlength: "Your name must consist of at least 2 characters"
      },
      email: {
        required: "Email required"
      },
      subject: {
        required: "Subject required"
      },
      message: {
        required: "Message needed!"

      }
    },
    submitHandler: function(form) {
      $(form).ajaxSubmit({
        type: "POST",
        data: $(form).serialize(),
        url: "process.php",
        success: function() {
          $('#contact-form :input').attr('disabled', 'disabled');
          $('#contact-form').fadeTo("slow", 0.15, function() {
            $(this).find(':input').attr('disabled', 'disabled');
            $(this).find('label').css('cursor', 'default');
            $('#success').fadeIn();
          });
        },
        error: function() {
          $('#contact-form').fadeTo("fast", 0.15, function() {
            $('#error').fadeIn('error');
          });
        }
      });
    }
  });
});