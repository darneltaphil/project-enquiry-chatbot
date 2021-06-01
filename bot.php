<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preset Enquiry Bot</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div id="" class="wrapper">
	<div id="wrapper" class="wrapper">
        <div class="title">Preset Enquiry Bot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Welcome to Preset Automated Equiry</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type your message here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
        
    </div>
        <button type="button" class="btn btn-danger cancel">Close</button>
<!--        <button type="button" class="btn btn-primary open">open</button>-->
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="kit.js"></script>
<script>
$(document).ready(function(){ 
	//The function of the close button, onClick, close the chat window		
	document.getElementById("wrapper").style.display = "block"; 
	$(".cancel").on("click", function(){
		window.close()
		//document.getElementById("wrapper").style.display = "none";
	})
	//Delete any loaded Questions and answers
	localStorage.removeItem('db')
	//check if there is an existing user
	if(!localStorage.getItem('_$cb_usr_keeper__')){
		//if there is none, create one
		localStorage.setItem('_$cb_usr_keeper__', $.now());
	}
	let user = localStorage.getItem('_$cb_usr_keeper__');

	//saving the session for the current user
	$.ajax({
		url:'admin/cases/enquiries.php',
		method:'POST',
		data:{user:user },
		success:function(){
		}
	}).done(function(){
		var replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>I am your virtual assistant, how may I help you?</p></div></div>';
			$(".form").append(replay);
			// when chat goes down the scroll bar automatically comes to the bottom
			$(".form").scrollTop($(".form")[0].scrollHeight);

	});

	//fetch Q&A
	$.ajax({
		url:'admin/cases/load_db.php',
		method:'POST',
		success:function(){}
	}).done(function(data){
		//saved the loaded Q&A locally
		localStorage.setItem('db', data)
		//load the data into db variable
		let db =JSON.parse(localStorage.getItem('db'));
		console.log(db);
		//Set flag 
		let res  

	$("#send-btn").on("click", function(){
		let value = $("#data").val();
		var msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ value +'</p></div></div>';
		$(".form").append(msg);
		$("#data").val('');
				$.ajax({
				url:'admin/cases/process.php',
				method:'POST',
				data:{user:user },
				success:function(){
				}
				}).done(function(data){	});

		$.each(db, function(i, val) {
			if(!value.toLowerCase().includes(i)){
				//raise the no answer flag
				res=1;
			} 
		});


		$.each(db, function(i, val) {

		if(value.toLowerCase().includes(i)){
		 var replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+val+'</p></div></div>';
			$(".form").append(replay);
			// when chat goes down the scroll bar automatically comes to the bottom
			$(".form").scrollTop($(".form")[0].scrollHeight);
			//reset the no answer flag
			res=0;
	}

		});


		if(res){
				var reply_array=[
							 "Do you want to speak to a representative now? <span class='btn btn-success call_rep'>Yes</span>&nbsp;<span class='btn btn-danger no_call_rep'>No</span>", 
							 "I am sorry, I don't understand your question", 
							];
			var index=Math.floor(Math.random() * 2)

			var replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+reply_array[index]+'</p></div></div>';
			$(".form").append(replay);
			// when chat goes down the scroll bar automatically comes to the bottom
			$(".form").scrollTop($(".form")[0].scrollHeight);				
			//reset the no answer flag
			res =0
			
			//saving unanswered questions
			$.ajax({
				url:'admin/cases/saving.php',
				method:'POST',
				data:{q:value },
				success:function(){
				}
				}).done(function(data){	});

			
			
		}

			});
	});
		
});
		
</script>
    
</body>
</html>