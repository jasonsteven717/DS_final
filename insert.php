<?php
	include("mysql_connect.php");
	$account = $_POST["account"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$sex = $_POST["sex"];
	$address = $_POST["address"];
	$identity = $_POST["identity"];
	$fb = $_POST["fb"];
	$line = $_POST["line"];
	$work = $_POST["work"];
    mysql_query("SET NAMES 'utf8mb4'");
    mysql_select_db($db_name);
    $sql ="insert into `user`(`account`,`password`,`name`,`sex`,`phone`,`email`,`address`,`identity`,`fb`,`line`,`work`)
	values('$account','$password','$name','$sex','$phone','$email','$address','$identity','$fb','$line','$work');"or die("insert error");
    $result = mysql_query($sql) or die('該帳戶已存在，請回上一頁重新輸入');
 ?>

<html>
	<head>
		<title>高大資工系友管理系統</title>
		<meta charset="UTF-8">
		
		<style>
			#top {
				width: 99%;
				height: 200px;
				background-image: url("CSIE.jpg");
				background-size: 100% 200px;
				text-align: center;
				line-height:150px;
				color: black;
				font-family: fantasy;
				font-size: 50px;
			}
		
			#left {
				float: left;
				width: 15%;
				height: 450px;
				text-align: center;	
				padding-top: 40px;
				background-color: #7092C0;
			}
			
			.leftblock {
				background-color: #7092C0;
				color: white;
				font-family: fantasy;
				font-size: 28px;
				font-weight: bolder;
			}
			
			.leftblock:hover {
				background-color: #D5EDFA;
				color: black;
			}
					
			#middle {
				float: left;
				width: 63%;
				height: 450px;
				padding-top: 70px;	
			}
		
			#right {
				float: left;
				width: 20%;
				height: 300px;
				text-align: center;
				line-height: 20px;
				font-family: fantasy;
				font-size: 22px;
				border-style: solid;
				border-width: 5px;
				background-color: #7092C0;
				border-radius: 20px;
				margin-top: 30px;
			}
			
			#right p {
				color: white;
			}
			
			table, th, td {
				margin-left: auto; 
				margin-right: auto;
				border: 2px solid black;
				border-collapse: collapse; 
			}
			
			th, td {
				padding: 10px;
			}		
			
			#bottom {
				width: 100%; 
				height: 150px; 
				margin-top: 580px;
			}			
		</style>
		
	</head>
	
	<body style="background-color: #D5EDFA;">
	
		<div id="top">
			<br>註冊成功
			
		</div>
		
		
		<div id="left">
			
		</div>
		
		
		<div id="middle" align=center>			
			<a href="http://localhost/nukcsie_alumnus/nukcsie_alumnus.php">請重新登入</a>
		</div>
		
		
		<div id="right">
			<script language="JavaScript">
				function ShowTime(){
　				document.getElementById('showbox').innerHTML = new Date();
　				setTimeout('ShowTime()',1000);
				}
			</script>
			<body onload="ShowTime()">
			<div id="showbox"></div>
			</body>
			<p>Hello Guest!</p>
			<br>
			<p>
				Welcome!!!<br>
				<img src="http://49.media.tumblr.com/777597e4c5463d8631cb86c2a9fd583a/tumblr_muttcwX7Tc1sjre2oo1_400.gif" style="width: 110px; height: 90px;">
			</p>			
		</div>
		
		
		<div id="bottom">
			<font size = 8 , face="標楷體">
			<marquee >WELCOME TO NUKCSIE</marquee>
			<img src="http://i109.photobucket.com/albums/n47/ralgia/Backgrounds/Grass-Slider-Background1.png" style="width: 100%; height: 100%;">
		</div>
		
	</body>
</html>