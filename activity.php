<?php session_start(); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include("mysql_connect.php");
	$account=$_SESSION['account'];
	$sql = "SELECT * FROM user where account = '$account'";
    $result = mysql_query($sql) or die('MySQL query error');
	while($row = mysql_fetch_array($result)){
		$name =$row['name'];
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
			<br>留言板
		</div>
		
		
		<div id="left">			
			<div class="leftblock">註冊會員</a></div><br><br><br><br>
			<div class="leftblock"><a href="http://localhost/nukcsie_alumnus/new_activity.php">新增活動</a></div><br><br><br><br>
			<div class="leftblock"><a href="http://localhost/nukcsie_alumnus/activity.php">留言板</a></div><br><br><br><br>
			<div class="leftblock"><a href="http://localhost/nukcsie_alumnus/profile.php">個人檔案</a></div><br><br><br><br>
		</div>		
		
		<div id="middle" align=center>
			<div align=left style="width:500px;height:200px;overflow-x:hidden;overflow-y:auto;background-color:white;">
			<?php 
				include("mysql_connect.php");
				mysql_query("SET NAMES 'utf8mb4'");
				mysql_select_db($db_name);
				$sql = "SELECT * FROM message_board ORDER BY message_no ASC;";
				$result = mysql_query($sql) or die('MySQL query error');
				while($row = mysql_fetch_array($result)){
						$message_no = $row['message_no'];
						$m_account = $row['account'];	
						$message = $row['message'];
						$m_time = $row['message_time'];
						$sql = "SELECT * FROM user where account = '$m_account'";						
						$result1 = mysql_query($sql) or die('MySQL query error');
						while($row1 = mysql_fetch_array($result1)){
							$m_name =$row1['name'];	
								echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
								echo "$message_no ",'. ',"$m_name ",' : ',"$message ",'<br>','&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp',"$m_time ",'<br>';
						}
				}			
			?>
			</style>
			</div>
			<div class="middle"align=center><a href="http://localhost/nukcsie_alumnus/delete.php">刪除留言</a></div><br>
			<form action = "insertm.php" method = "POST" align=center>
			我要留言<P>
			<textarea cols = 70 rows = 5 name="message" wrap = "off" align=center></textarea><br>
			<P>
			<input type = "submit" name = "send" value = "送出">
			</form>
			<div class="middle"align=center><a href="http://localhost/nukcsie_alumnus/member.php">回首頁</a></div><br>
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