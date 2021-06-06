// JavaScript Document
// jshint esversion: 6
$(document).ready(function(){
	"use strict" ;

load_userlist('hide');
	function load_userlist(cus){
		$.ajax({
			url:"appsettings/userlist.php",
			method:"post",
			data:{cus:cus},
			success:function(){
			}
		}).done(function(data){
		$("#userlist").html(data);
		});
	}
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
	$("#form-title").html('Edit Keyword');
	$("#keyword").val();
	$("#answer").val();

	$("#question_form").modal('show');
														   
});
	
$(document).on('click', ".add_new_question",function(){
	$("#form-title").html('Add New Keyword');
	$("#keyword").val();
	$("#answer").val();
	$("#question_form").modal('show');
														   
});
	
	
	
});

