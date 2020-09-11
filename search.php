<?php
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $_SESSION['user']['username']; ?> | raaahad</title>
	<meta charset="utf-8">
			<meta name="author" content="raaahad">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" type="text/css" href="style.css">

        <style>

.input{
				  position: absolute;
				  top: 65px;
				  left: 0;
				  right: 0;
				}

        * {
	margin: 0px;
	padding: 0px;
}
body {
	font-size: 120%;
    min-height: 768px;
	background: -webkit-linear-gradient(top, rgb(6, 120, 250) 0%,rgb(6, 213, 250) 0%,rgba(41,137,216,1) 98%,rgba(41,137,216,1) 98%,rgba(41,137,216,1) 99%,rgba(41,137,216,1) 100%,rgba(125,185,232,1) 100%,rgba(41,137,216,1) 100%);
}
@media print {
    body{
        background: transparent;
    }
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
.profile_info a{
	float: right;
	padding-right: 5px
}
.logout_btn {
	width: 70px;
	position: absolute;
	top: 100px;
	border: none;
    padding: 5px;
    color: black;
    background: orange;
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
	border-bottom: 10px;
	border: 3px solid white;
	display: inline-block;
	width: 50px;
	height: 50px;
	margin: 5px;
	float: right;
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
.row:hover {
background: red;
}
.mask{
    text-decoration: none;
    background: yellow;
    padding: 0 5px 0 5px;
}
        </style>
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

      $(window).load(function () {
    $(".trigger_popup_fricc").click(function(){
       $('.hover_bkgr_fricc').show();
    });
   // $('.hover_bkgr_fricc').click(function(){
     //   $('.hover_bkgr_fricc').hide();
    //});
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
});
      </script>
</head>
<body>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<div class="profile_info">
			<img src="images/avater.JPG">
			<a href="index.php?logout='1'" target="_new" style="color: red"><button class="logout_btn" >Logout</button></a>

			<div class= "userinfo">

			<?php  if (isset($_SESSION['user'])) : ?>
					<strong style="color: red;">Name: <?php echo $_SESSION['user']['username']; ?></strong>
					<small>
						<br>
                        <strong style="color: red;">Email: <?php echo $_SESSION['user']['email']; ?></strong>
                        <br>
                        <hr>
                        <button onclick="window.print()">Print</button>
                        <a href = "index.php"><button>HOME</button></a>
					</small>

                    <?php endif ?>

			</div>
        </div>

	</div>

<body>
    <div class="container">
      <div class="title">
            <h3>Make something better <p class= "mask"><?php echo $_GET[q]; ?></p>.</h3>
            <hr>
      </div>
			<div class="tableData" style="position: unset">

				<table class="data">
					<thead>
						<th>ID</th>
						<th>Date</th>
						<th>Subject</th>
						<th>Status</th>
						<th>Note</th>
					</thead>
						<tbody>
						    <?php

                                                       date_default_timezone_set("Asia/Dhaka");
                                                       $today = date("Y-m-d");
                                
                                    $q = $_GET['q'];
                                
						       $query = "SELECT *from data WHERE date = '$q' ";

						       if($result = mysqli_query($db, $query)){
						          if(mysqli_num_rows($result) > 0){
						            while ($row = mysqli_fetch_array($result)){
						   ?>
						    <tr class= "row">
						        <td><?php echo htmlentities($row['id']) ?></td>
						        <td><?php echo htmlentities($row['date']) ?></td>
						        <td><?php echo htmlentities($row['sub']) ?></td>
						        <td><?php echo htmlentities($row['status']) ?></td>
						        <td><?php echo htmlentities($row['note']) ?></td>

						    </tr>
<?php }?>
						        <?php } else { echo "No record found"; }?>

						    <?php } else {
						        die("Database query failed. ". mysqli_error($db));
						    } ?>
					</tbody>
				</table>
      </div>

    </div>

</body>
</html>
