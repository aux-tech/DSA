$(function() {
    $("#phone-input").mask("(99) 9 9999-9999");
    var submitMessage = false;
    $("#contactForm").submit(function(evt) {
        evt.preventDefault();
        console.log("here1");
        if (submitMessage)
            return;

        submitMessage = true;
        $("#sendMessageButton").prop("disabled", true);
        var contact_feedback = $(".contact-feedback");
        contact_feedback.empty();
        contact_feedback.append('<div class="loading" style="margin: auto; transform: translate(0);"><span></span></div>');
        var error = new Array();
        $("#contactForm input, #contactForm textarea").not("input[name=token]").each(function() {
            if (!ValidateInputs($(this))) error.push(1);
        });
        console.log("here1" + error);
        if (!error.length) {

            var form_data = new FormData(document.getElementById("contactForm"));
            setTimeout(function() {
                $.post({
                    url: "ajax/send_message.php",
                    dataType: 'json',
                    data: form_data,
                    contentType: false,
                    processData: false,
                    cache: false,
                    success: function(response) {
                        contact_feedback.empty();
                        if (response.status == "success") {
                            contact_feedback.append('<div class="alert alert-success">' + response.message + '</div>');
                            $("#contactForm input, #contactForm textarea").not("input[name=token]").each(function() {
                                $(this).val("");
                                removeError($(this));
                            });
                        }
                        if (response.status == "invalid" || response.status == "error" || response.status == "expired") {
                            contact_feedback.append('<div class="alert alert-danger">' + response.message + '</div>');
                        }

                    },
                    complete: function() {
                        console.log("here");
                        setTimeout(function() {
                            submitMessage = false;
                            $("#sendMessageButton").prop("disabled", false);
                        }, 500);
                    }
                });
            }, 500);
        } else {
            contact_feedback.empty();
            submitMessage = false;
            $(".feedback").empty();
            $("#sendMessageButton").prop("disabled", false);
        }
    });
});