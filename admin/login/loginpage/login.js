// JavaScript Document
$(document).ready(function() {
    "use strict";
    $('#user_submit').click(function(e) {
        var self = $(this);
        e.preventDefault(); // prevent default submit behavior
        $(this).prop('disabled', true);
        var data = $('#user_signin_form').serialize(); // get form data

        // sending ajax reqeust to login.php file, it will proccess login reqeust and give response.
        $.ajax({
            url: 'loginpage/login.php',
            type: "POST",
            data: data,
        }).done(function(e) {
            var resp = JSON.parse(e);
            if (resp.status) // if login successful redirect user to secure.php page.
            {	
//				playSound('startup');
              	localStorage.setItem('_$dipss_sess_keeper__', JSON.stringify(resp.session));
				location.href = resp.redirect; // // redirect user to secure.php location/page.
//				console.log(resp.session);
            } else {
                var errorMessage = '';
                $.each(resp.msg, function(index, message) {
                    errorMessage += '<span class="animated shake">' + message + '</span><br>';
                });
                // place the errors inside the div#error-msg.
                $("#error-msg").html(errorMessage);
                $("#error-msg").show(); // show it on the browser, default state, hide
                // remove disable attribute to the login button, 
                //to prevent multiple form submisstions 
                //we have added this attributon on login from submit
                self.prop('disabled', true);
            }
        }).fail(function() {
            alert("error");
			self.prop('disabled', false);
        }).always(function() {
            self.prop('disabled', false);
        });
    });
});