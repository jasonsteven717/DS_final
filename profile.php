<?php session_start(); ?>
<?php
	include("mysql_connect.php");
	header('conten-type:text/html;charset=utf-8');
	$account=$_SESSION['account'];
	$sql = "SELECT * FROM user where account = '$account'";
    $result = mysql_query($sql) or die('MySQL query error');
	while($row = mysql_fetch_array($result)){
		$name =$row['name'];
	}
    mysql_query("SET NAMES 'utf8mb4'");
    mysql_select_db($db_name);
    $sql = "SELECT * FROM user where account = '$account'";
    $result = mysql_query($sql) or die('MySQL query error');
    while($row = mysql_fetch_array($result)){
	$account = $row['account'];
	$name =$row['name'];
	$sex =$row['sex'];
	$phone =$row['phone'];
	$email =$row['email'];
	$address =$row['address'];
	$identity =$row['identity'];
	$fb =$row['fb'];
	$line =$row['line'];
	$work =$row['work'];	
    }
?>

<!DOCTYPE html>
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
			<br>個人檔案
			
		</div>
		
		
		<div id="left">
			<div class="leftblock">註冊會員</a></div><br><br><br><br>
			<div class="leftblock"><a href="http://localhost/nukcsie_alumnus/new_activity.php">新增活動</a></div><br><br><br><br>
			<div class="leftblock"><a href="http://localhost/nukcsie_alumnus/activity.php">留言板</a></div><br><br><br><br>
			<div class="leftblock"><a href="http://localhost/nukcsie_alumnus/profile.php">個人檔案</a></div><br><br><br><br>
		</div>
		
		
		<div id="middle">
			<form>
				<table>
					<tr>
						<th>學號</th>
						<th><?php echo "$account ";?></th>
					</tr>
					<tr>
						<th>姓名</th>
						<th><?php echo "$name ";?></th>
					</tr>
					<tr>
						<th>性別</th>
						<th><?php echo "$sex ";?></th>
					</tr>					
					<tr>
						<th>電話</th>
						<th><?php echo "$phone ";?></th>
					</tr>
					<tr>
						<th>信箱</th>
						<th><?php echo "$email ";?></th>
					</tr>			
					<tr>
						<th>住址</th>
						<th><?php echo "$address ";?></th>
					</tr>					
					<tr>
						<th>身分</th>
						<th><?php echo "$identity ";?></th>
					</tr>
					<tr>
						<th>FB</th>
						<th><?php echo "$fb ";?></th>
					</tr>
					<tr>
						<th>LINE</th>
						<th><?php echo "$line ";?></th>
					</tr>
					<tr>
						<th>在職狀況</th>
						<th><?php echo "$work ";?></th>
					</tr>			
				</table>
				<div class="middle"align=center><a href="http://localhost/nukcsie_alumnus/modify_profile.php">修改個人檔案</a></div><br>
				<div class="middle"align=center><a href="http://localhost/nukcsie_alumnus/delete_user.php">刪除會員</a></div><br>
				<div class="middle"align=center><a href="http://localhost/nukcsie_alumnus/member.php">回首頁</a></div><br><br>
			</form>			
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
			<br>
			</br>
			<p>Hello <?php echo"$name " ;?></p>
			<br>
				<p>Welcome!!!</p>
			<p>
			<form action = "logout.php" method = "POST">
				<td colspan="5">
					<input type="submit" name="Submit_Bottom" value="登出" style="margin-left: 10%;"></a>  <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>				
			</p>
		</div>
		
		
		<div id="bottom">
			<font size = 8 , face="標楷體">
			<marquee >WELCOME TO NUKCSIE</marquee>
			<img src="http://i109.photobucket.com/albums/n47/ralgia/Backgrounds/Grass-Slider-Background1.png" style="width: 100%; height: 100%;">
		</div>
		
	</body>
</html>