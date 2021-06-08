$(document).ready(function(){
	"use strict";
	document.querySelector("input").addEventListener("keypress", function (evt) {
    if (evt.which < 48 || evt.which > 57)
    {
        evt.preventDefault();
    }
	});
	
	//CONTROL AUTO LOG OUT
		var idleState = false;
        var idleTimer = null;
        $('*').bind('mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick', function () {
            clearTimeout(idleTimer);
           function logout() {
				window.location='login/logout.php';        
		   }
            idleState = false;
            idleTimer = setTimeout(function () { 
            logout();   // idleState = true; 
			}, 3600000);
        });
        $("body").trigger("mousemove");
	

//SOFTWARE VERSION VIEW
	$(document).on('click','.about_app',function(){
		playSound('hollow');
			 $.confirm({
		 	type: 'orange',
			columnClass: 'col-md-6 col-md-offset-3',
			typeAnimated: true,
			backgroundDismiss: false,
    		backgroundDismissAnimation: 'shake',
			title: "Enquiry Chat bot",
			icon:"fas fa-info fa-2x",
			theme:'supervan',
			content: '<span class="fas fa-angle-double-down fa-3x"></span><br> <b>Version:</b> 1.0.0 (Official Build x64_x86) <br> <b>Last Update:</b> May, 2021. <br>Secured Unix Hosted<br>Project Work UPSA 2021.',
			//autoClose: 'cancelAction|8000',
			buttons: {
				GotIt: {
				text:'Got It!',
				action:function () {
            	//$.alert('action is canceled');
				}
				}}
	 });
	});
	
$("#logout").click(function(){
		 $.confirm({
		 	type: 'orange',
			columnClass: 'col-md-6 col-md-offset-3',
			typeAnimated: true,
			backgroundDismiss: false,
    		backgroundDismissAnimation: 'shake',
			title: "Logout?",
			icon:"fas fa-sign-out-alt fa-2x",
			theme:'supervan',
			content: '',
			autoClose: 'cancelAction|8000',
			buttons: {
				deleteUser: {
				btnClass: 'btn-danger',
				text: 'Yes',
				action: function () {
               // $.alert('Deleted the user!');
					location.href='login/logout.php';
            	}
        	},
       			cancelAction: {
				text:'Cancel Action',
				action:function () {
            	//$.alert('action is canceled');
				}
				}}
	 });
		});

    });