<?php include('functions.php'); ?>
<!--<!DOCTYPE html>-->
<html>
<head>
	<title>Login area | Usersocity</title>

	<meta charset="utf-8">
			<meta name="author" content="raaahad">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" type="text/css" href="style.css">

        <style>
.blink {
				animation: blinker 0.9s linear infinite;
				color: red;
				font-size: 50px;
				font-weight: bold;
				}
				@keyframes blinker {
				100% { opacity: 0; }
				}
				.blink-one {
				animation: blinker-one 1s linear infinite;
				}
				@keyframes blinker-one {
				0% { opacity: 0; }
				}
				.blink-two {
				animation: blinker-two 1.4s linear infinite;
				}
				@keyframes blinker-two {
				100% { opacity: 0; }
				}

.input{
				  opacity: .2;
				  position: absolute;
				  top: 65px;
				  left: 0;
				  right: 0;
				}

				.banned_sec{
					text-align: center;
					width: 100%;
					background: grey;
					height: 130px;
					overflow: hidden;
				}
				.banned_sec h1{
					font-weight: bold;
					padding-top: 35px;
				}

* {
	margin: 0px;
	padding: 0px;
}

body {
	font-size: 120%;
	background: -webkit-linear-gradient(top, rgb(6, 120, 250) 0%,rgb(6, 213, 250) 0%,rgba(41,137,216,1) 98%,rgba(41,137,216,1) 98%,rgba(41,137,216,1) 99%,rgba(41,137,216,1) 100%,rgba(125,185,232,1) 100%,rgba(41,137,216,1) 100%);
}

#local_time{
 margin-left: 135;
 margin-top: ;
	width: 145;
	height: 40;
	font-weight: bold;
	position: relative;
	border: 1px solid black;
	text-align: center;
    color: black;
    background-color: #f1f505;
}

.server_time{
		;
}

.server_time_top{
padding-top: 5px;
padding-bottom: 5px;
background-color: red;
color: black;
text-align: center;
font-weight: bold;
height: 15;
width: 128;
border: 1px solid black;
}

#local_time_top{
padding-top: 5px;
padding-bottom: 5px;
background-color: red;
color: black;
text-align: center;
font-weight: bold;
margin-left: 135;
margin-top: -70;
height: 15;
width: 145;
border: 1px solid black;
}

#loading{
	position: fixed;
	width: 100%;
	height: 100vh;
	background: #fff
	url('loader.gif')
	 no-repeat center center;
	z-index: 99999;
}

.box{
	position: relative ;

}

.top_ip{
	//margin-left: 270px;
	//margin-top: -70px;
	text-align: center;
	font-weight: bold;
	border: 1px solid black;
	width: 280px;
	height: 15px;
	padding-top: 5px;
	padding-bottom: 5px;
	background-color: rgb(34, 137, 201);

}

#ip{
		margin-left: ;
		padding-top: ;
		padding-bottom: 11px;
		border: 1px solid black;
		height: ;
		width: 280px;
		text-align: center;
        color: black;
        background-color: #f1f505;
}

.location_button{
	padding: 5px;
	border: 1px solid black;
	border-left: 10px solid black;
	background-color: rgb(252, 148, 2);
}

.location_button:hover{
	background-color: rgb(255, 82, 30);
}

/* Popup box BEGIN */
.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: red;
}
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 20px;
    margin: 0px;
		margin-top: 10px;
    display: inline-block;
    font-weight: bold;
}
.header {
	width: 90%;
	margin: 50px auto 0px;
	color: rgb(230, 19, 19);
	background: #dff0d8;
	text-align: center;
    border-left: 5px;
    border-right: 5px;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form, .content {
	width: 90%;
	margin: 0px auto;
	padding: 30px;
	border: 1px solid rgb(105, 167, 248);
	background: lrgb(238, 216, 219)
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}

.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
#user_type {
	height: 40px;
	width: 98%;
	padding: 5px 10px;
	background: white;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;
}
.logout_btn {
    padding: 5px;
    color: black;
    background:  #5F9EA0;
}
.meal_submit{
    padding: 5px;
	border: 1px solid black;
	border-left: 10px solid black;
	background-color: rgb(252, 148, 2);
}
.meal_submit:hover{
	background-color: rgb(255, 82, 30);
}
.user{
    border-left: 10px solid #e03a3a;
    width: 100px;
    text-align: right;
    color: rgb(36, 148, 36);
    padding-right: 5px;
}
.user:hover{
    background-color: black;
    color: red;
    font-size: bold;
    border-left: 10px solid red;
    border-top: 0px;
    border-bottom: 0px;
}
.user:active{
    background-color: black;
    color: red;
    font-size: bold;
    border-left: 10px solid red;
    border-top: 1px solid red;
    border-bottom: 1px solid red;
}
.user_wise_data{
    background-color: black;
}
.error {
	width: 92%;
	margin: 0px auto;
	padding: 10px;
	border: 1px solid #a94442;
	color: #a94442;
	background: #f2dede;
	border-radius: 5px;
	text-align: center;
}
.success {
	color: #3c763d;
	background: #dff0d8;
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}

.profile_info img {
	display: inline-block;
	width: 50px;
	height: 50px;
	margin: 5px;
	float: left;
}

.profile_info div {
	display: inline-block;
	margin: 5px;
}

.profile_info:after {
	content: "";
	display: block;
	clear: both;
}

</style>


</head>
<body onload="myFunction()">
  <div id="loading"></div>
<script>
	var preloader = document.getElementById("loading");
					function myFunction(){
						preloader.style.display = 'none';
					};
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript">
							$.get("https://ipinfo.io",function(response){
							$("#ip").html(' <b>'+response.ip+'</br>');
							$("#city").html('Your City: <b>'+response.city+'</br>');
							$("#region").html('Your Region: <b>'+response.region+'</br>');
							$("#country").html('Your Country: <b>'+response.country+'</br>');
							$("#location").html('Your Location: <b>'+response.loc+'</br>');
							$("#org").html('Net ORG: <b>'+response.org+'</br>');


					},'jsonp');
					</script>

					<script type="text/javascript">
			    var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
			    var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

			    function GetClock(){
			    var d=new Date();
			    var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate();
			    var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

			    if(nhour==0){ap=" AM";nhour=12;}
			    else if(nhour<12){ap=" AM";}
			    else if(nhour==12){ap=" PM";}
			    else if(nhour>12){ap=" PM";nhour-=12;}

			    if(nmin<=9) nmin="0"+nmin;
			    if(nsec<=9) nsec="0"+nsec;

			    var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+" "+nhour+":"+nmin+":"+nsec+ap+"";
			    document.getElementById('local_time').innerHTML=clocktext;
			    }

			    GetClock();
			    setInterval(GetClock,1000);
			    </script>

					<div class="box">

						<div class="server_time_top"> Server Time</div>

							<div class="server_time">

										<iframe src="http://free.timeanddate.com/clock/i6tfx9ir/n73/fn7/tct/pct/ftb/bo3/pd3/tt0/tw0/tm1/th2/tb4" frameborder="" width="130" height="42" allowTransparency="true" style="background: #f1f505;"></iframe>

							</div>

							<div id="local_time_top"> Local Time</div>
													<div id="local_time">
														<script type="text/javascript">
var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+" "+nhour+":"+nmin+":"+nsec+ap+"";
document.getElementById('local_time').innerHTML=clocktext;
}

GetClock();
setInterval(GetClock,1000);
</script>
													</div>

													<div class="top_ip"> Your IP Address</div>
														<div class="get_ip">

																<div id="ip">Loading....</div>

													</div>
											</div>

											<a class="trigger_popup_fricc"><button class="location_button">Your Location</button></a>

											<div class="hover_bkgr_fricc">
													<span class="helper"></span>
													<div>
															<div class="popupCloseButton">X</div>
															<div id="city">Loading....</div>
															<div id="region">Loading....</div>
															<div id="country">Loading....</div>
															<div id="location">Loading....</div>
															<div id="org">Loading....</div>
													</div>
											</div>
											<script type="text/javascript">


											$(window).load(function () {
										$(".trigger_popup_fricc").click(function(){
											 $('.hover_bkgr_fricc').show();
										});
										$('.hover_bkgr_fricc').click(function(){
												$('.hover_bkgr_fricc').hide();
										});
										$('.popupCloseButton').click(function(){
												$('.hover_bkgr_fricc').hide();
										});
								});
											</script>


    <div class="container">
      <div class="title">
            <h3>Make something better today.</h3>
            <hr>
      </div>

      <div class="input">
        <table>
          <thead>
            <tr>
              <th>No</th>
                <th>Date</th>
                  <th>Subject</th>
                <th>Status</th>
              <th>Note</th>
              <th>Sent</th>
            </tr>
          </thead>

        <tbody>
          <tr>
            <form class="submit" action="index.php" method="post">
              <td class="no">Auto No</td>
                <td>  <input type="date" name="date" value=""></td>
              <td>
          <label for="sub"></label>
<select class="dropdown" name="sub">
<!-- physics 1st -->
                      <?php
                          $max_chapter = 10;
                          $chapter = 1;
                          $sub = "phy";
                          $fsub = "Physics";
                          $paper = 1;
                          while ($chapter < $max_chapter+1) {
                            if ($chapter == 4 or $chapter == 5 or $chapter == 6 or
                            $chapter == 7 or $chapter == 8 or $chapter == 9 or $chapter == 10 or $chapter == 11
                            or $chapter == 12
                           ) {
                              $q = "th";
                            }elseif ($chapter == 1) {
                               $q = "st";
                            }elseif ($chapter == 2) {
                               $q = "nd";
                            }elseif ($chapter == 3) {
                               $q = "rd";
                            }
                            if ($paper == 1) {
                               $paper_q = "st";
                            }elseif ($paper == 2) {
                               $paper_q = "nd";
                            }
                             ?>
                          <?php echo '<option value="'.$sub.$paper.'_'.$chapter;?><?php echo '">'; ?>
                            <?php echo $fsub, " ", $paper, $paper_q, " ", $chapter, $q ; ?>
                          <?php echo '</option>' ;
                            $chapter++;
                          }?>
                      <!-- physics 2nd -->
                      <?php
                          $max_chapter = 10;
                          $chapter = 1;
                          $sub = "phy";
                          $fsub = "Physics";
                          $paper = 2;
                          while ($chapter < $max_chapter+1) {
                            if ($chapter == 4 or $chapter == 5 or $chapter == 6 or
                            $chapter == 7 or $chapter == 8 or $chapter == 9 or $chapter == 10 or $chapter == 11
                            or $chapter == 12
                           ) {
                              $q = "th";
                            }elseif ($chapter == 1) {
                               $q = "st";
                            }elseif ($chapter == 2) {
                               $q = "nd";
                            }elseif ($chapter == 3) {
                               $q = "rd";
                            }
                            if ($paper == 1) {
                               $paper_q = "st";
                            }elseif ($paper == 2) {
                               $paper_q = "nd";
                            }
                             ?>
                          <?php echo '<option value="'.$sub.$paper.'_'.$chapter;?><?php echo '">'; ?>
                            <?php echo $fsub, " ", $paper, $paper_q, " ", $chapter, $q ; ?>
                          <?php echo '</option>' ;
                            $chapter++;
                          }?>
                      <!-- math 1st -->
                      <?php
                          $max_chapter = 10;
                          $chapter = 1;
                          $sub = "math";
                          $fsub = "Math";
                          $paper = 1;
                          while ($chapter < $max_chapter+1) {
                            if ($chapter == 4 or $chapter == 5 or $chapter == 6 or
                            $chapter == 7 or $chapter == 8 or $chapter == 9 or $chapter == 10 or $chapter == 11
                            or $chapter == 12
                           ) {
                              $q = "th";
                            }elseif ($chapter == 1) {
                               $q = "st";
                            }elseif ($chapter == 2) {
                               $q = "nd";
                            }elseif ($chapter == 3) {
                               $q = "rd";
                            }
                            if ($paper == 1) {
                               $paper_q = "st";
                            }elseif ($paper == 2) {
                               $paper_q = "nd";
                            }
                             ?>
                          <?php echo '<option value="'.$sub.$paper.'_'.$chapter;?><?php echo '">'; ?>
                            <?php echo $fsub, " ", $paper, $paper_q, " ", $chapter, $q ; ?>
                          <?php echo '</option>' ;
                            $chapter++;
                          }?>

                      <!-- math 2nd -->
                      <?php
                          $max_chapter = 10;
                          $chapter = 1;
                          $sub = "math";
                          $fsub = "Math";
                          $paper = 2;
                          while ($chapter < $max_chapter+1) {
                            if ($chapter == 4 or $chapter == 5 or $chapter == 6 or
                            $chapter == 7 or $chapter == 8 or $chapter == 9 or $chapter == 10 or $chapter == 11
                            or $chapter == 12
                           ) {
                              $q = "th";
                            }elseif ($chapter == 1) {
                               $q = "st";
                            }elseif ($chapter == 2) {
                               $q = "nd";
                            }elseif ($chapter == 3) {
                               $q = "rd";
                            }
                            if ($paper == 1) {
                               $paper_q = "st";
                            }elseif ($paper == 2) {
                               $paper_q = "nd";
                            }
                             ?>
                          <?php echo '<option value="'.$sub.$paper.'_'.$chapter;?><?php echo '">'; ?>
                            <?php echo $fsub, " ", $paper, $paper_q, " ", $chapter, $q ; ?>
                          <?php echo '</option>' ;
                            $chapter++;
                          }?>

                      <!-- chemistry 1st -->
                      <?php
                          $max_chapter = 5;
                          $chapter = 1;
                          $sub = "che";
                          $fsub = "Chemistry";
                          $paper = 1;
                          while ($chapter < $max_chapter+1) {
                            if ($chapter == 4 or $chapter == 5 or $chapter == 6 or
                            $chapter == 7 or $chapter == 8 or $chapter == 9 or $chapter == 10 or $chapter == 11
                            or $chapter == 12
                           ) {
                              $q = "th";
                            }elseif ($chapter == 1) {
                               $q = "st";
                            }elseif ($chapter == 2) {
                               $q = "nd";
                            }elseif ($chapter == 3) {
                               $q = "rd";
                            }
                            if ($paper == 1) {
                               $paper_q = "st";
                            }elseif ($paper == 2) {
                               $paper_q = "nd";
                            }
                             ?>
                          <?php echo '<option value="'.$sub.$paper.'_'.$chapter;?><?php echo '">'; ?>
                            <?php echo $fsub, " ", $paper, $paper_q, " ", $chapter, $q ; ?>
                          <?php echo '</option>' ;
                            $chapter++;
                          }?>

                      <!-- chemistry 2nd -->
                      <?php
                          $max_chapter = 5;
                          $chapter = 1;
                          $sub = "che";
                          $fsub = "Chemistry";
                          $paper = 2;
                          while ($chapter < $max_chapter+1) {
                            if ($chapter == 4 or $chapter == 5 or $chapter == 6 or
                            $chapter == 7 or $chapter == 8 or $chapter == 9 or $chapter == 10 or $chapter == 11
                            or $chapter == 12
                           ) {
                              $q = "th";
                            }elseif ($chapter == 1) {
                               $q = "st";
                            }elseif ($chapter == 2) {
                               $q = "nd";
                            }elseif ($chapter == 3) {
                               $q = "rd";
                            }
                            if ($paper == 1) {
                               $paper_q = "st";
                            }elseif ($paper == 2) {
                               $paper_q = "nd";
                            }
                             ?>
                          <?php echo '<option value="'.$sub.$paper.'_'.$chapter;?><?php echo '">'; ?>
                            <?php echo $fsub, " ", $paper, $paper_q, " ", $chapter, $q ; ?>
                          <?php echo '</option>' ;
                            $chapter++;
                          }?>

                      <!-- biology 1st -->
                      <?php
                          $max_chapter = 12;
                          //value
                          $chapter = 1;
                          $sub = "bio";
                          $fsub = "Biology";
                          $paper = 1;
                          while ($chapter < $max_chapter+1) {
                            if ($chapter == 4 or $chapter == 5 or $chapter == 6 or
                            $chapter == 7 or $chapter == 8 or $chapter == 9 or $chapter == 10 or $chapter == 11
                            or $chapter == 12
                           ) {
                              $q = "th";
                            }elseif ($chapter == 1) {
                               $q = "st";
                            }elseif ($chapter == 2) {
                               $q = "nd";
                            }elseif ($chapter == 3) {
                               $q = "rd";
                            }
                            if ($paper == 1) {
                               $paper_q = "st";
                            }elseif ($paper == 2) {
                               $paper_q = "nd";
                            }
                             ?>
                          <?php echo '<option value="'.$sub.$paper.'_'.$chapter;?><?php echo '">'; ?>
                            <?php echo $fsub, " ", $paper, $paper_q, " ", $chapter, $q ; ?>
                          <?php echo '</option>' ;
                            $chapter++;
                          }?>

                      <!-- biology 2nd -->
                      <?php
                          $max_chapter = 12;
                          $chapter = 1;
                          $sub = "bio";
                          $fsub = "Biology";
                          $paper = 2;
                          while ($chapter < $max_chapter+1) {
                            if ($chapter == 4 or $chapter == 5 or $chapter == 6 or
                            $chapter == 7 or $chapter == 8 or $chapter == 9 or $chapter == 10 or $chapter == 11
                            or $chapter == 12
                           ) {
                              $q = "th";
                            }elseif ($chapter == 1) {
                               $q = "st";
                            }elseif ($chapter == 2) {
                               $q = "nd";
                            }elseif ($chapter == 3) {
                               $q = "rd";
                            }
                            if ($paper == 1) {
                               $paper_q = "st";
                            }elseif ($paper == 2) {
                               $paper_q = "nd";
                            }
                             ?>
                          <?php echo '<option value="'.$sub.$paper.'_'.$chapter;?><?php echo '">'; ?>
                            <?php echo $fsub, " ", $paper, $paper_q, " ", $chapter, $q ; ?>
                          <?php echo '</option>' ;
                            $chapter++;
                          }?>

                      <!-- ict -->
                      <?php
                          $max_chapter = 5;
                          $chapter = 1;
                          $sub = "ict";
                          $fsub = "ICT";
                          $paper = "";
                          while ($chapter < $max_chapter+1) {
                            if ($chapter == 4 or $chapter == 5 or $chapter == 6 or
                            $chapter == 7 or $chapter == 8 or $chapter == 9 or $chapter == 10 or $chapter == 11
                            or $chapter == 12
                           ) {
                              $q = "th";
                            }elseif ($chapter == 1) {
                               $q = "st";
                            }elseif ($chapter == 2) {
                               $q = "nd";
                            }elseif ($chapter == 3) {
                               $q = "rd";
                            }
                            if ($paper == 1) {
                               $paper_q = "st";
                            }elseif ($paper == 2) {
                               $paper_q = "nd";
                            }else {
                              $paper_q = "";
                            }
                             ?>
                          <?php echo '<option value="',$sub,$paper,'_',$chapter;?><?php echo '">'; ?>
                            <?php echo $fsub, " ", $paper, $paper_q, " ", $chapter, $q ; ?>
                          <?php echo '</option>' ;
                            $chapter++;
                          }?>

                      <!-- bangla -->
                      <option value="eng">Bangla</option>
                      <!-- english -->
                      <option value="eng">English</option>

                    </select>
                  </td>

                <td>  <input type="checkbox" name="chec" value=""></td>
              <td>  <input type="text" name="commnet" value="" placeholder="Take Note"></td>
              <td>  <button type="submit" name="button" class="sub_btn">Submit</button></td>
            </form>
          </tr>
        </tbody>
      </table>
      </div>
			<div class="banned_sec">
			<h1 class="blink">!!! Login to Enter this Sec</h1>
			</div>
      <div class="logininfo">
	<?php echo display_error(); ?>
<form class="login" action="register.php" method="post">
  <label for="Username"></label>
  <section>
    <hr>
    Register
  </section>
  <input type="text" name="username" placeholder="Name">
	<input type="mail" name="email" placeholder="Email">
	<input type="text" name="phone" placeholder="Phone Number">
  <input type="password" name="password_1" placeholder="Password">
	<input type="password" name="password_2" placeholder="Retype the Password">

  <br><br><button type="submit" name="register_btn" class="lgn_btn">Register</button>
	<br><br><br><br><h1>OR</h1>
</form>
<div class="reg_a">
	<p>
		<a href="login.php">Login</a>
	</p>
</div>
      </div>

    </div>
  </body>
</html>
