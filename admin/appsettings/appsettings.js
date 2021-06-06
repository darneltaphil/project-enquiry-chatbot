// JavaScript Document
// jshint esversion: 6
$(document).ready(function(){
	"use strict" ;

load_questions();	
	function load_questions(){
		$.ajax({
		url:'appsettings/questions.php',
        method:'POST',
		beforeSend:function(){
		$('#question-list').html('<center><div class="lds-grid"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');

		},
		success:function(){}
		
		}).done(function(data){
		$('#question-list').html(data);
	});
	}

	

$("#general").click(function(){
$('#setting_bg').removeClass('bg-info text-white');
$('#setting_bg').addClass('bg-primary text-white');
$(".setting_title").text('General');
});
$("#users").click(function(){
$('#setting_bg').removeClass('bg-primary text-white');
$('#setting_bg').addClass('bg-info text-white');
$(".setting_title").text('Users');
//load_caselist_completed();
});
	
$(document).on('click', ".edit_question",function(){
	var id =$(this).attr('id');
	$("#form_action").val(id)
	$.ajax({
		url:"appsettings/question_fetch.php",
		method: "POST",
		data:{id:id}

	}).done(function(data){
		data=JSON.parse(data)
		$("#keyword").val(data.botquestions_name);
		$("#answer").val(data.botquestions_answer);
})
	$("#form-title").html('Edit Keyword');
	$("#question_form_modal").modal('show');
														   
});
	
$(document).on('click', ".add_new_question",function(){
	$("#form_action").val('add')
	$("#form-title").html('Add New Keyword');
	$("#keyword").val('');
	$("#answer").val('');
	$("#question_form_modal").modal('show');
});



$("#question_form").on("submit", function(e){
	e.preventDefault();
	$.ajax({
		url:'appsettings/question_add.php',
		method:'post',
		data:$("#question_form").serialize(),
		beforeSend:function(){
			$("#submit_question").html('Adding...').removeClass('btn-primary').addClass('btn-success');
		}
	}).done(function(){
		$.notify({
				message: '<h5>New keyword added</h5>',
				placement: {
				from: "top",
				align: 'center'
							}
					},
				 {
				type: 'success'
				});
		playSound('definite');
        $('#question_form')[0].reset();            
		$("#submit_question").html('Add').removeClass('btn-success').addClass('btn-primary');
		$('#question_form_modal').modal('hide');
		load_questions()
	}).fail(function(){
		$.notify({
			message: '<h5>Something went wrong</h5>',
			placement: {
			from: "top",
			align: 'center'
						}
				},
			 {
			type: 'danger'
			});
	});
})

$(document).on('click', ".delete_question",function(){
	var id=$(this).attr('id');
	 $.confirm({
		theme: 'dark', // 'material', 'bootstrap'
		title: 'Delete Keyword Entry',
		icon: 'fas fa-trash-alt fa-2x',
		content: '<center><span class="btn btn-outline-success">Do you want to delete this entry</span></center>',
		columnClass: 'col-md-5 col-md-offset-5',
		typeAnimated: true,
		buttons: {
			Yes: {
				text: 'PROCEED',
				btnClass: 'btn-success',
				action: function(){			
					$.ajax({
						url:"appsettings/question_delete.php",
						data:{id:id},
						dataType: 'JSON',
						method: 'POST'
					}).done(function(data){
						$.notify({
							message: '<h5>Entry Deleted</h5>',
							placement: {
							from: "top",
							align: 'center'
										}
								},
							 {
							type: 'success'
							});
							load_questions();
					})
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
			})

});

});

