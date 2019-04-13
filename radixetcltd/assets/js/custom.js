var dataUrl = "http://www.watertreat.in/";
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)){
        return false;
    }
    return true;
}



function reminderChar(char){
    //alert("hey");
    var $remaining = jQuery('#remaining'),
        $messages = $remaining.next();
    var chars = char.length,
        messages = Math.ceil(chars / 500),
        remaining = messages * 500 - (chars % (messages * 500) || messages * 500);

    $remaining.text(remaining + ' characters remaining');
}

function validate_enquiry(popup) {
    //alert("hello");
    var emailFilter = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,4}))$/;
    var user = jQuery("#"+popup+"enq_email").val();
    var error = false;

    if (jQuery("#"+popup+"enq_for").val() == '') {
        error = true;
        jQuery("#"+popup+"enq_for").attr('placeholder','Enter Your Inquiry');
        jQuery("#"+popup+"enq_for").addClass('customerror');
        jQuery("#"+popup+"enq_for").addClass('red-placeholder');

    } else {
        jQuery("#"+popup+"enq_for").removeClass('customerror');
        jQuery("#"+popup+"enq_for").removeClass('red-placeholder');
    }

    if (jQuery("#"+popup+"enq_name").val() == '') {
        error = true;
        jQuery("#"+popup+"enq_name").attr('placeholder','Enter Your Name');
        jQuery("#"+popup+"enq_name").addClass('customerror');
        jQuery("#"+popup+"enq_name").addClass('red-placeholder');

    } else {
        jQuery("#"+popup+"enq_name").removeClass('customerror');
        jQuery("#"+popup+"enq_name").removeClass('red-placeholder');
    }

    if (user == ''){
        error = true;
        jQuery("#"+popup+"enq_email").attr('placeholder','Enter Your Email');
        jQuery("#"+popup+"enq_email").addClass('customerror');
        jQuery("#"+popup+"enq_email").addClass('red-placeholder');

    }else if(user!='' && !(emailFilter.test(user))) {
        error = true;
        jQuery("#"+popup+"enq_email").attr('placeholder','Enter Valid Email');
        jQuery("#"+popup+"enq_email").addClass('customerror');
        jQuery("#"+popup+"enq_email").addClass('red-placeholder');

    }else{
        jQuery("#"+popup+"enq_email").removeClass('customerror');
        jQuery("#"+popup+"enq_email").removeClass('red-placeholder');
    }

    if (jQuery("#"+popup+"enq_contact").val() == '') {
        error = true;
        jQuery("#"+popup+"enq_contact").attr('placeholder','Enter Contact No');
        jQuery("#"+popup+"enq_contact").addClass('customerror');
        jQuery("#"+popup+"enq_contact").addClass('red-placeholder');

    } else{
        jQuery("#"+popup+"enq_contact").removeClass('customerror');
        jQuery("#"+popup+"enq_contact").removeClass('red-placeholder');
    }

    if (jQuery("#"+popup+"enq_comments").val() == '') {
        error = true;
        jQuery("#"+popup+"enq_comments").addClass('customerror');
    } else {
        jQuery("#"+popup+"enq_comments").removeClass('customerror');
    }

    if(error==false){
        jQuery("#"+popup+"submit").prop('disabled',true);
        $("#"+popup+"imageload").html('<img src='+dataUrl+'images/loading.gif>');
        var form_Data = jQuery("#"+popup+"contactForm").serialize();
        jQuery.ajax({
            url:dataUrl+'contact.php',
            type:'POST',
            data: form_Data+"&act=registration",
            success: function(data){
                if(data=="success"){
                    $("#"+popup+"contactForm").slideUp();
                    jQuery("#"+popup+"response_msg").css("color","green");
                    jQuery("#"+popup+"response_msg").html("Thank you for sending inquiry, we have received your message and will get back to you shortly.");
                    var google_conversion_id = 844738422;
                    var google_conversion_language = "en";
                    var google_conversion_format = "3";
                    var google_conversion_color = "ffffff";
                    var google_conversion_label = "Zdj3CNKAkHMQ9t7mkgM";
                    var google_remarketing_only = false;

                    $.getScript('//www.googleadservices.com/pagead/conversion.js');

                    var image = new Image(1, 1);
                    image.src = "//www.googleadservices.com/pagead/conversion/844738422/?label=Zdj3CNKAkHMQ9t7mkgM&amp;guid=ON&amp;script=0";

                }else{
                    jQuery("#"+popup+"response_msg").css("color","red");
                    jQuery("#"+popup+"response_msg").html("Mail sending fail.");
                    jQuery("#"+popup+"submit").prop('disabled',false);
                }
            }
        });
        return false;
    }else{
        return false;
    }
}