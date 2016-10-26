
<?php 
	require_once("include/functions.php");
	require_once("include/db_con.php");
	session_start();
	if (logged_in() == false) {
	redirect_to("index.php");
 
   } else {  include("include/header.html");
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
                        <a id="logo-img" href="index.html" title="celestino">
                            <img src="images/wakaondo.png" title="celestino" alt="celestino" />
                        </a>

                       <!-- 						<p id="tagline">only for creative minds.</p>   -->
                    </div>
                    <!-- END LOGO -->
                    <div id="menu" class="span8 group">
                        <!-- START MAIN NAVIGATION -->
                        <div class="menu">
                            <ul id="nav" class="sf-menu">
                                <li class="nav-icon-house current_page_item">
                                    <a href="index.html">
                                        Home
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-icon-open-small">
                                            <a href="#">
                                                Home Version II
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-icon-about">
                                    <a href="#">
                                        About
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">
                                                About Us
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-icon-email">
                                    <a href="#">
                                    Contact
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-icon-team-small ">
                                            <a href="#">
                                                About
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                               
                                <li class="nav-icon-sign-up">
                                    <a href="#">
                                        Profile
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    
                                </li>
                                
                                 <li class="nav-icon-sign-up">
                                    <a href="<?php	echo "logout.php";?>">
                                        Logout
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

    
        <!--  TOOGLE BAR -->
        

<ul class="topnav" id="myTopnav">
 
   <img src="images/wakaondo.png" width="200" height="60" alt="celestino" />
                     
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">About</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">Profile</a></li>
  <li><a href="#about">Logout</a></li>
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
   

    
    <div id="border-header"></div>
</div>
<!-- END HEADER -->



<!-- START APP  -->

    <!-- END APP -->
    </div>
</div>
<!-- END SLIDER -->
<?php
	if (isset($_GET['id']) && $_GET['id'] != "") {
		$id = $_GET['id'];
	} else {
		$id = $_SESSION['user_id'];
	}
	
	## connect mysql server
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		# check connection
		if ($mysqli->connect_errno) {
			echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
			exit();
		}
	## query database
		# fetch data from mysql database
		$sql = "SELECT * FROM users WHERE id = {$id} LIMIT 1";

		if ($result = $mysqli->query($sql)) {
			$user = $result->fetch_array();
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}
		
		if ($result->num_rows == 1) {
			# calculating online status
			if (time() - $user['status'] <= (30)) { // 300 seconds = 5 minutes timeout
				$status = "Online";
			} else {
				$status = "Offline";
			}
			
			# echo the user profile data
			echo "<p>User ID: {$user['id']}</p>";
			echo "<p>Username: {$user['username']}</p>";
			echo "<p>Status: {$status}</p>";			
		} else { // 0 = invalid user id
			echo "<p><b>Error:</b> Invalid user ID.</p>";
		}
}

?>

<?php  include("include/footer.html"); ?>


