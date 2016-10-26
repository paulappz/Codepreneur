
<?php 
	require_once("include/functions.php");
	require_once("include/db_con.php");
	session_start();
    
    //die(var_dump($_POST));
     /** Login script */
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // processing remember me option and setting cookie with long expiry date
        if (isset($_POST['remember'])) {	
            session_set_cookie_params('604800'); //one week (value in seconds)
            session_regenerate_id(true);
        } 

        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        # check connection
        if ($mysqli->connect_errno) {
            echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
            exit();
        }
        
        $sql = "SELECT * from users WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
        $result = $mysqli->query($sql);
        
        if ($result->num_rows != 1) {
            //echo "<p><b>Error:</b> Invalid username/password combination</p>";
        } else {
            // Authenticated, set session variables
            $user = $result->fetch_array();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            // update status to online
            $timestamp = time();
            $sql = "UPDATE users SET status={$timestamp} WHERE id={$_SESSION['user_id']}";
            $result = $mysqli->query($sql);
            
        // header('Location: index.php');
            //	exit();
            redirect_to("home.php?id={$_SESSION['user_id']}");
            die();
            // do stuffs
        }
    }

    if(isset($_GET['msg'])) {
        echo "<p style='color:red;'>".$_GET['msg']."</p>";
    }
     /** end login script */
    
	if (logged_in() == true) {
		redirect_to("home.php");
	}
    
    if (isset($_POST['register'])) {
## connect mysql server
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
## query database
	# prepare data for insertion
    $full_name	= $_POST['full_name'];    
	$username	= $_POST['username'];    
	$password	= $_POST['password'];     
	$email		= $_POST['email'];    


	# check if username and email exist else insert
	// u = username, e = emai, ue = both username and email already exists
	$exists = "";
	$result = $mysqli->query("SELECT username from users WHERE username = '{$username}' LIMIT 1");
	if ($result->num_rows == 1) {
		$exists .= "u";
	}	
	$result = $mysqli->query("SELECT email from users WHERE email = '{$email}' LIMIT 1");
	if ($result->num_rows == 1) {
		$exists .= "e";
	}

	if ($exists == "u") echo "<p><b>Error:</b> Username already exists!</p>";
	else if ($exists == "e") echo "<p><b>Error:</b> Email already exists!</p>";
	else if ($exists == "ue") echo "<p><b>Error:</b> Username and Email already exists!</p>";
	else {
		# insert data into mysql database
		$sql = "INSERT  INTO `users` (`id`, `full_name`, `username`, `password`, `email`) 
				VALUES (NULL, '{$full_name}', '{$username}', '{$password}', '{$email}')";

		if ($mysqli->query($sql)) {
			redirect_to("index.php?msg=Registred successfully");
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}
	}
}
    
    
    
     include("include/header.html");
?>


<!-- START BODY -->
<body class="home page no_js responsive stretched">

<!-- START BG SHADOW -->
<div class="bg-shadow">

<!-- START WRAPPER -->
<div id="wrapper" class="container group">
<!-- START TOP BAR -->

<!-- START TOP BAR -->
<div id="topbar">
    <div class="container">
        <div class="row">
            <div id="last-tweets-3" class="widget-first span6 widget last-tweets">
                <h3>Last Tweets</h3>
                <div class="list-tweets-3"></div>

                <script type="text/javascript">
                    jQuery(function($){
                        $('#last-tweets-3 .list-tweets-3').tweetable({
                            listClass: 'tweets-widget-3',
                            username: 'YIW',
                            time: false,
                            limit: 3,
                            replies: false
                        });
                    });
                </script>

            </div>

            <div id="text-8" class=" widget-last span6 widget widget_text">
                <div class="textwidget">
                    <a href="# " class="socials-small facebook-small" title="Facebook"  >facebook</a>

                    <a href="#" class="socials-small rss-small" title="Rss"  >rss</a>

                    <a href="#" class="socials-small twitter-small" title="Twitter"  >twitter</a>

                    <a href="#" class="socials-small google-small" title="Google"  >google</a>

                    <a href="#" class="socials-small linkedin-small" title="Linkedin"  >linkedin</a>

                    <a href="#" class="socials-small pinterest-small" title="Pinterest"  >pinterest</a></div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(function($){
        var twitterSlider = function(){
            $('#topbar .last-tweets ul').addClass('slides');
            $('#topbar .last-tweets').flexslider({
                animation: "fade",
                slideshowSpeed: 5 * 1000,
                animationDuration: 700,
                directionNav: false,
                controlNav: false,
                keyboardNav: false
            });
        };
        $('#topbar .last-tweets > div').bind('tweetable_loaded', function(){
            twitterSlider();
        });
    });
</script>

<!-- END TOP BAR -->

<!-- START HEADER -->
<div id="header" class="group">
    <div class="group container">
        <div class="row">
            <div class="span12">

                <div class="row">
                    <!-- START LOGO -->
                    <div id="logo" class="span4 group">
                        <a id="logo-img" href="index.php" title="wakaondo">
                            <img src="images/wakaondo.png" title="wakaondo" alt="wakaondo" />
                        </a>

                       <!-- 						<p id="tagline">only for creative minds.</p>   -->
                    </div>
                    <!-- END LOGO -->
                    <div id="menu" class="span8 group">
                        <!-- START MAIN NAVIGATION -->
                        <div class="menu">
                            <ul id="nav" class="sf-menu">
                                <li class="nav-icon-house current_page_item">
                                    <a href="index.php">
                                        Home
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    
                                </li>
                                <li class="nav-icon-about">
                                    <a href="#">
                                        About
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-icon-email">
                                    <a href="#">
                                    Contact
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    
                                </li>
                                <li  class="nav-icon-log-in">
                                    <a id="modal_trigger" href="#modal">
                                        Login
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                  <div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
						<span class="icon"><i class="fa fa-facebook"></i></span>
						<span class="icon_title">Connect with Facebook</span>
						
					</a>

					<a href="#" class="social_box google">
						<span class="icon"><i class="fa fa-google-plus"></i></span>
						<span class="icon_title">Connect with Google</span>
					</a>
				</div>

				<div class="centeredText">
					<span>Or use your Email address</span>
				</div>

				<div class="action_btns">
				<!--	<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>  -->
                    
                    <div class="one_half"><input type="button" class="btn"  id="login_form" name="" value="Login" /></div>
                        <div class="one_half last"><input type="submit" class="btn" id="register_form"  name="" value="Sign up" /></div>
                    
				<!--	<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>  -->
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
				<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
					
					<input type="text"  name="username" placeholder="Username"/>
					<br />

					
					<input type="password" name="password" placeholder="Password" />
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" />
						
					</div>

					<div class="action_btns">
				       <!--		<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div> -->
						
                        <div class="one_half"><input type="button" class="btn btn_orange back_btn" name="" value="Back" /></div>
                        
                         <div class="one_half last"><input type="submit" class="btn btn_red" name="login" value="Login" /> </div>
                  <!--      <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>  -->
					</div>
				</form>

				<a href="#" class="forgot_password">Forgot password?</a>
			</div>


			<!-- Register Form -->
			<div class="user_register">
				<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
					
					<input type="text"  name="full_name" placeholder="Fullname" />
					<br />
					
					
					<input type="text" name="username" placeholder="Username" />
					<br />

					
					<input type="email"  name="email" placeholder="Email"/>
					<br />

					
					<input type="password" name="password" placeholder="Password" />
					<br />

					

					<div class="action_btns">
				 <!--	<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>   -->
						<div class="one_half"><input type="button" class="btn btn_orange back_btn" name="" value="Back" /></div>
                        <div class="one_half last"><input type="submit" class="btn btn_red" name="register" value="Register" /></div>
                   <!--     <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div> -->
					</div>
				</form>
			</div>
		</section>
	</div>

                                    <!-- LOGIN   -->
                                    
    
    <!-- LOGIN ENDS  -->
                                    
  
                                   
                                </li>
                                <li class="nav-icon-sign-up">
                                    <a href="#">
                                        Sign-Up
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    
                                </li>
                                
                            </ul>
                        </div>
             
                        <!-- END MAIN NAVIGATION -->
          
                         </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script>
    
        <!--  TOOGLE BAR -->
        

<ul class="topnav" id="myTopnav">
 
   <img src="images/wakaondo.png" width="200" height="60" alt="celestino" />
                     
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">About</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a id="modal_trigger2" href="#modal">Login</a>
  
  <div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
						<span class="icon"><i class="fa fa-facebook"></i></span>
						<span class="icon_title">Connect with Facebook</span>
						
					</a>

					<a href="#" class="social_box google">
						<span class="icon"><i class="fa fa-google-plus"></i></span>
						<span class="icon_title">Connect with Google</span>
					</a>
				</div>

				<div class="centeredText">
					<span>Or use your Email address</span>
				</div>

				<div class="action_btns">
				<!--	<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>  -->
                    
                    <div class="one_half"><input type="button" class="btn"  id="login_form" name="" value="Login" /></div>
                        <div class="one_half last"><input type="submit" class="btn" id="register_form"  name="" value="Sign up" /></div>
                    
				<!--	<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>  -->
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
				<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
					
					<input type="text"  name="username" placeholder="Username"/>
					<br />

					
					<input type="password" name="password" placeholder="Password" />
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" />
						
					</div>

					<div class="action_btns">
				       <!--		<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div> -->
						
                        <div class="one_half"><input type="button" class="btn btn_orange back_btn" name="" value="Back" /></div>
                        
                         <div class="one_half last"><input type="submit" class="btn btn_red" name="login" value="Login" /> </div>
                  <!--      <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>  -->
					</div>
				</form>

				<a href="#" class="forgot_password">Forgot password?</a>
			</div>


			<!-- Register Form -->
			<div class="user_register">
				<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
					
					<input type="text"  name="full_name" placeholder="Fullname" />
					<br />
					
					
					<input type="text" name="username" placeholder="Username" />
					<br />

					
					<input type="email"  name="email" placeholder="Email"/>
					<br />

					
					<input type="password" name="password" placeholder="Password" />
					<br />

					

					<div class="action_btns">
				 <!--	<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>   -->
						<div class="one_half"><input type="button" class="btn btn_orange back_btn" name="" value="Back" /></div>
                        <div class="one_half last"><input type="submit" class="btn btn_red" name="register" value="Register" /></div>
                   <!--     <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div> -->
					</div>
				</form>
			</div>
		</section>
	</div>
  
  
  
  </li>
  
  <li><a href="#about">Sign-Up</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()"><strong>☰</strong></a>
  </li>
</ul>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
   
<script type="text/javascript">
	$("#modal_trigger2").leanModal({top : 20, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script>
    
    <div id="border-header"></div>
</div>
<!-- END HEADER -->



<!-- START SLIDER -->
<?php  include("include/slider.html"); ?>
    <!-- END REVOLUTION SLIDER -->
    </div>
</div>
<!-- END SLIDER -->


<?php  include("include/footer.html"); ?>


