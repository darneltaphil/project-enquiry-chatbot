<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preset Enquiry Bot</title>
    <link rel="stylesheet" href="style.css">
<!--    <script src="https://kit.fontawesome.com/a076d05399.js"></script>-->
    <script src="kit.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
                    <p>Hello there, how can I help you?</p>
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


    <script>
		
        $(document).ready(function(){ 
			
	document.getElementById("wrapper").style.display = "block";
	$(".cancel").on("click", function(){
		window.close()
		//document.getElementById("wrapper").style.display = "none";
	})
	//check if there is an existing user
	localStorage.removeItem('db')
	if(!localStorage.getItem('_$cb_usr_keeper__')){
		localStorage.setItem('_$cb_usr_keeper__', $.now());
	}
	let user = localStorage.getItem('_$cb_usr_keeper__');

	//saving the session for the current user
	$.ajax({
		url:'admin/cases/enquiries.php?t='+Date.now(),
		method:'POST',
		data:{user:user },
		success:function(){
		}
	}).done(function(data){});

	//fetch Q&A
	$.ajax({
		url:'admin/cases/load_db.php?t='+Date.now(),
		method:'POST',
		success:function(){
			//console.log('it is going on')
		}
	}).done(function(data){
		let qa = (data);
		localStorage.setItem('db', qa)
		let res , 
		db =JSON.parse(localStorage.getItem('db'));
			$("#send-btn").on("click", function(){
			let value = $("#data").val();
			var msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ value +'</p></div></div>';
			$(".form").append(msg);
			$("#data").val('');
					$.ajax({
					url:'admin/cases/process.php?',
					method:'POST',
					data:{user:user, },
					success:function(){}
					}).done(function(data){	});

			$.each(db, function(i, val) {
				if(!value.toLowerCase().includes(i)){
					res=1;
				} 
			});


			$.each(db, function(i, val) {

			if(value.toLowerCase().includes(i)){
			 var replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+val+'</p></div></div>';
				$(".form").append(replay);
				// when chat goes down the scroll bar automatically comes to the bottom
				$(".form").scrollTop($(".form")[0].scrollHeight);
			res=0;
		}

			});


			if(res){
					var reply_array=[
								"I am not sure I understand you", 
								 "Do you want to speak to a representative?", 
								 "I am sorry, I don't understand your question", 
								 "What do you want to do?", 
								 "I want to answer, but i don't know what to say",
								];
				var index=Math.floor(Math.random() * 5)

				var replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+reply_array[index]+'</p></div></div>';
				$(".form").append(replay);
				// when chat goes down the scroll bar automatically comes to the bottom
				$(".form").scrollTop($(".form")[0].scrollHeight);				
				res =0
			}

			});


	});

	
			
			
			
//
//	let db={
//		"Hi":'Hi, I am your virtual assistant',
//		"Hello":'Hi, I am your virtual assistant',
//		"good morning":"Yes, I am your virtual assistant. How may I help you?",
//		"admission":"You buy a form of Gh 30 from the Administration, fill it out and add two passport size pictures, a copy of your BECE or SHS result or certificate and submit it to the school's administrator;",
//		"fee":'DAY: (Sci, H. Econs, V, Arts) = GHc1,365 <br> (G. Arts, Business) = GHc1,315 <br><br> BOARDING: (Sci, H. Econs, V, Arts) = GHc2,920 <br> (G. Arts, Business) = GHc2,870 <br>',
//		"location":'Firestone Madina, opposite mountain of fire church',
//		"located":'Firestone Madina, opposite mountain of fire church',
//		"visit":'First and second Saturdays of the month at 4:00 PM',
//		"contact":'0246467089 / 0205800355',
//		"number":'0246467089 / 0205800355',
//		"mobile":'0246467089 / 0205800355',
//		"call":'0246467089 / 0205800355',
//	
//}
        });
    </script>
    
</body>
</html>