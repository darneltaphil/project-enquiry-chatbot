$(document).ready(function(){
	"use strict" ;
	
	load_caselist_all();
	function load_caselist_all(e){
		if(e=='today'){
			var formData = {
			'date' 		: 'today',
							};
		}
		if(e=='month'){
			var formData = {
			'date' 		: 'month',
							};
		}
		if(e=='range'){
			var formData = {
			'date' 		:'range',
			'from' 		: $("#from").val(),
			'to' 		: $("#to").val()
							};
		}
		$.ajax({
		url:'cases/caselist_all.php',
        method:'POST',
		data:formData,
		beforeSend:function(){
		$('#caselist').html('<center><div class="lds-grid"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
		},
		success:function(){}
		
		}).done(function(data){
		$('#caselist').html(data);
		
	});
	}

	function load_caselist_closed(e){
		if(e=='today'){
			var formData = {
			'date' 		: 'today',
							};
		}
		if(e=='month'){
			var formData = {
			'date' 		: 'month',
							};
		}
		if(e=='range'){
			var formData = {
			'date' 		:'range',
			'from' 		: $("#from").val(),
			'to' 		: $("#to").val()
							};
		}
		$.ajax({
		url:'cases/caselist_closed.php',
        method:'POST',
		data:formData,
		beforeSend:function(){
					$('#caselist').html('<center><div class="lds-grid"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');

		},
		success:function(){}
		
		}).done(function(data){
		$('#caselist').html(data);
	});
	}


// MENU BUTTONS COLOURS
$("#individual_case").click(function(){
$('#caselist_bg').removeClass();
$('#caselist_bg').addClass('card-header py-3 bg-dark text-white');
$(".caselist_title").text('All Equiries ');
load_caselist_all();
});
$("#closed_case").click(function(){
$('#caselist_bg').removeClass();
$('#caselist_bg').addClass('card-header py-3  bg-success text-white');
$(".caselist_title").text(' New questions');
load_caselist_closed();
});
$('#from').datepicker({
     format: "yyyy-mm-dd",
    clearBtn: true,
    calendarWeeks: true,
    todayHighlight: true,
});
$('#to').datepicker({
    format: "yyyy-mm-dd",
    clearBtn: true,
    calendarWeeks: true,
    todayHighlight: true,
});

$(document).on('click', ".delete_case",function(){
	var id =$(this).attr('id');
						$.confirm({
								theme: 'dark', // 'material', 'bootstrap'
								title: 'Delete Enquiry Entry',
								icon: 'fas fa-trash-alt fa-2x',
								content: '<center><span class="btn btn-outline-success">Do you want to delete this enquiry</span></center>',
								columnClass: 'col-md-5 col-md-offset-5',
								typeAnimated: true,
								buttons: {
									Yes: {
										text: 'PROCEED',
										btnClass: 'btn-success',
										action: function(){			
											$.ajax({
													url:'cases/casedelete.php',
													data:{id:id},
													method:'POST',
												dataType:'json',
													beforeSend:function(){},
													success:function(){}
													}).done(function(data){
												if(data.status){
												playSound("definite");
												load_caselist_all();

												}else{

												}
												}).fail(function(){});
										}
										},
									No: {
										text: 'CANCEL',
										btnClass: 'btn-danger',
										action: function(){
//											$("#case_open_modal").modal('show');
											playSound('hollow');
										}
										}

										}
								});	
														   
});
	

	
	
});