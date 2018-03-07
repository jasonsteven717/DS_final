<?php session_start(); ?>
<?php
	include("mysql_connect.php");
	$account=$_SESSION['account'];
	$sql = "SELECT * FROM user where account = '$account'";
    $result = mysql_query($sql) or die('MySQL query error');
	while($row = mysql_fetch_array($result)){
		$name =$row['name'];
	}
	if(($_SESSION['right']=='2')||($_SESSION['right']=='1')){ 
		$a_name = $_POST["a_name"];
		$a_date = $_POST["a_date"];
		$a_location = $_POST["a_location"];
		$a_host = $_POST["a_host"];
		$a_record = $_POST["a_record"];
		mysql_query("SET NAMES 'utf8mb4'");
		mysql_select_db($db_name);
		$sql ="insert into `activity`(`activity_no`,`activity_name`,`activity_date`,`activity_location`,`activity_host`,`activity_record`)
		values(NULL,'$a_name','$a_date','$a_location','$a_host','$a_record');"or die("insert error");
		$result = mysql_query($sql) or die('該活動已存在，請回上一頁重新輸入');
	}
	else{
		die('您的權限不足請返回上一頁!');
		echo '<meta http-equiv=REFRESH CONTENT=1;url=new_activity.php>';
	}
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
				font-size: 30px;
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
			<br>活動建立成功
			
		</div>
		
		
		<div id="left">
			
		</div>
		
		
		<div id="middle" align=center><br>
			<div class="middle"><a href="http://localhost/nukcsie_alumnus/gmail.php">邀請所有會員</a></div><br>
			<a href="http://localhost/nukcsie_alumnus/member.php">返回首頁</a>
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
			<p>Hello <?php echo"$name " ;?></p>
			<br>
				<p>Welcome!!!</p>					
		</div>
		
		
		<div id="bottom">
			<font size = 8 , face="標楷體">
			<marquee >WELCOME TO NUKCSIE</marquee>
			<img src="http://i109.photobucket.com/albums/n47/ralgia/Backgrounds/Grass-Slider-Background1.png" style="width: 100%; height: 100%;">
		</div>
		
	</body>
</html>