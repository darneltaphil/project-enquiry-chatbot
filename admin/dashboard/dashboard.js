$(document).ready(function(){
	"use strict" ;

$("#petty-cash").on('submit', function(event){ 
	
     event.preventDefault();
		$.ajax({
		url:'dashboard/pettycash.php',
		method:'post',
		data:$("#petty-cash").serialize(),
		beforeSend:function(){
			$("#request_button").html('Requesting...').removeClass('btn-primary').addClass('btn-success');
		}
	}).done(function(){
		$.notify({
				title: '<span >Request Submitted</span>',
				message: '',
				placement: {from: "top",align: 'center'	}
					},
				 {
				type: 'success'
				});
		setTimeout( function(){
			
			$.notify({
				title: '<span >Transmitting Request...</span>',
				message: ' ',
				placement: {from: "top",align: 'center'}
					},
				 {
				type: 'warning'
				});
		}, 3000) ;
		setTimeout( function(){
			
			$.notify({
				title: '<span >Waiting for approval...</span>',
				message: ' ',
				placement: {from: "top",align: 'center'}
					},
				 {
				type: 'info'
				});
		}, 6000) ;
			
		playSound('definite');
        $('#petty-cash')[0].reset();            
		$("#request_button").html('Request').removeClass('btn-success').addClass('btn-primary');
	});
});
});