//scroll to top
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
});
$('.scrollup').click(function () {
    $("html, body").animate({scrollTop: 0}, 1000);
    return false;
});

$('#quickButton').click(function (e) {
    if (!$('#quick-contact').hasClass('quickActive')) {
        $('#quick-contact').addClass('quickActive');
        $('#quickRight').addClass('displayBlock');
    } else {
        $('#quick-contact').removeClass('quickActive');
        $('#quickRight').removeClass('displayBlock');
    }
});

jQuery(function () {
//    $('#quickSubmit').click(function () {
//        document.getElementById("demoRequestEmail1").innerHTML = '<input type="email" placeholder="Type Your Email" id="email1" name="email1" required />';
//        $("#email1").focus();
//       // alert();
//    });

    $('#quickSubmit').click(function (e) {
        e.preventDefault();

        var hasError = false;

        if ($("#quickEmail").length > 0) {
            var email = $('#quickEmail').val();
            var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var data = {'email': email};
            if (reg.test(String(email).toLowerCase())) {

                $.ajax({
                    type: "POST",
                    url: "/wp-content/themes/shafidi/email.php",
                    data: data,
                    success: function () {
                        console.log('sent');
                    },
                    error: () => {
                        console.log('error');
                    }
                });

                document.getElementById("emailerror1").style = "display: none;"
//                $('#popup-abstractor').html('<h2 class="title">Thank you for your request. Our team will get in touch with you soon!</h2 >');
//                $('#popupContent').modal('show');
            } else {

                hasError = true;
            }
        } else
            hasError = true;

        if (hasError) {
            document.getElementById("quickemailerror1").style = "display: block;"
            document.getElementById("quickemailerror1").classList.add("emailerror");
            $('#quickemailerror1').html('Please type valid email');
        }

    });
});

jQuery(function () {
    $('#demoRequestEmail1').click(function () {
        document.getElementById("demoRequestEmail1").innerHTML = '<input type="email" placeholder="Type Your Email" id="email1" name="email1" required />';
        $("#email1").focus();
       // alert();
    });

    $('#submit1').click(function (e) {
        e.preventDefault();

        var hasError = false;

        if ($("#email1").length > 0) {
            var email = $('#email1').val();
            var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var data = {'email': email};
            if (reg.test(String(email).toLowerCase())) {

                $.ajax({
                    type: "POST",
                    url: "/wp-content/themes/shafidi/email.php",
                    data: data,
                    success: function () {
                        console.log('sent');
                    },
                    error: () => {
                        console.log('error');
                    }
                });

                document.getElementById("emailerror1").style = "display: none;"
//                $('#popup-abstractor').html('<h2 class="title">Thank you for your request. Our team will get in touch with you soon!</h2 >');
//                $('#popupContent').modal('show');
            } else {

                hasError = true;
            }
        } else
            hasError = true;

        if (hasError) {
            document.getElementById("emailerror1").style = "display: block;"
            document.getElementById("emailerror1").classList.add("emailerror");
            $('#emailerror1').html('Please type valid email');
        }

    });
});