<?php header('location: ./login/');

	
//require ('_session.php');require ('auth.php');
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel='shortcut icon' href='./img/favicon.ico' type='image/x-icon'/ >
    <link rel="manifest" href="/manifest.json">
    <link href="css/theme.css" rel="stylesheet">
    <style>
 
        .no-js #loader {
            display: none;
        }
        
        .js #loader {
            display: block;
            position: absolute;
            left: 100px;
            top: 0;
        }
        
        #se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(img/splash.png) center no-repeat #fff;
            /*	background: url(img/loader-128x/Preloader_2.gif) center no-repeat #fff;*/
        }
    </style>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/animation.css" />
    <script src="js/jquery-confirm.min.js"></script>
    <script src="login/login.js" language="javascript" type="application/javascript"></script>
    <link href="css/fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/jquery-confirm.min.css" rel="stylesheet">

    <script>
        //paste this code under head tag or in a seperate js file.
        $(document).ready(function() {
            load();

            function load() {
                setTimeout(function() {
                    $("#se-pre-con").addClass("animated fadeOut ")
                }, 2000);
                setTimeout(function() {
                    $("#se-pre-con").remove()
                }, 2500);
            }
            //		$(".se-pre-con").fadeOut("slow");;

        });
        // Wait for window load
    </script>
    <title>Dipss RMS</title>
</head>

<body class="bg-gradient-primary " id="splash">
    <div id="se-pre-con"></div>
    <div class="container border-2">
        <span id="shutdown" class="animated fadeInUp slow delay-4s fas fa-power-off fa-2x text-white fixed-bottom p-4" title="Shut down "></span>
        <!-- Outer Row -->
        <div class="row  pt-5 mt-5 justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-12 ">

                <div class="animated fadeIn delay-3s card o-hidden border-0 shadow-lg ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome </h1>
                                    </div>
                                    <form class="user" id="login_form">
                                        <div id="error-msg" class="alert alert-danger" style="display:none" role="alert"></div>
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user" id="username" name="un" aria-describedby="UsernameHelp" placeholder="Username..." autocomplete="off" style="border: 2px solid #4e73df;">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="pwd" placeholder="Password" autocomplete="off" style="border: 2px solid #4e73df;">
                                        </div>
                                        <button type="submit" id="login" class="btn btn-primary btn-user btn-block p-0">
                                            <div class="h4">Login</div>
                                        </button>
                                    </form>
                                    <div class="text-center">
                                        <!--                    <a class="small" href="forgot-password.html">Forgot Password?</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

</html>