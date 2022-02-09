
function contactUs() {
  err = false;
  var name = $(".form_name").val();
  var email = $(".form_email").val();
  var contact = $(".form_number").val();
  var organization = $(".form_organization").val();
  var service = $(".form_service").val();
  var message = $(".form_message").val();
  $(".inptBox").removeClass("error");
  var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;

  if (!name) {
    // $(".input_name").addClass("error");
    $('.form_name').addClass("error");
    err = true;
  }
  if (!organization) {
    $('.form_organization').addClass("error");
    err = true;
  }
  if (!service) {
    $('.form_service').addClass("error");
    err = true;
  }
  if (!email) {
    $('.form_email').addClass("error");
    err = true;
  } else if (!validateEmail(email)) {
    $('.form_email').addClass("error");
    err = true;
  }

  if (!contact) {
    $('.form_number').addClass("error");
    err = true;
  } else if (!validateContact(contact)) {
    $('form_number').addClass("error");
    err = true;
  }

  if (!message) {
    $('.form_message').addClass("error");
    err = true;
  }

  if (err == false) {
    $.ajax({
      type: 'POST',
      data: $('#quotationForm').serialize(),
      url: 'get-quotation.php',
      success: function (data) {
        if (data == 'success') {
          alert('data submitted');
          // $('.successMessage').show(500);
          // $('#contactus_form').hide();
        } else {
          alert('data not-submitted');
          // $('#submition_msg').text('Something Went Wrong');
          // $('.successMessage').show(500);
        }
      }
    });
  }
}

function validateEmail(email) {
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validateContact(contact) {
  var phoneno = /^\d{10}$/;
  return contact.match(phoneno);
}