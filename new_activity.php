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
			<br>新增活動
			
		</div>
		
		
		<div id="left">
			<div class="leftblock">註冊會員</a></div><br><br><br><br>
			<div class="leftblock"><a href="http://localhost/nukcsie_alumnus/new_activity.php">新增活動</a></div><br><br><br><br>
			<div class="leftblock"><a href="http://localhost/nukcsie_alumnus/activity.php">留言板</a></div><br><br><br><br>
			<div class="leftblock"><a href="http://localhost/nukcsie_alumnus/profile.php">個人檔案</a></div><br><br><br><br>
		</div>
		
		
		<div id="middle">
			<form action = "inserta.php" method = "POST">
				<table>			
					<tr>
						<th>活動名稱</th>
						<td><input type="text" name="a_name" id="a_name"></td>
						<th>活動日期</th>						
						<td><input type="text" name="a_date" id="a_date"></td>
					</tr>
					<tr>
					<th>活動地點</th>
						<td><input type="text" name="a_location" id="a_location"></td>
					<th>主辦人</th>
						<td><input type="text" name="a_host" id="a_host"></td>
					</tr>
				<table>	
					<th>活動內容</th>
					<tr>
						<td><textarea cols =65 rows =10 name="a_record" id="a_record" align=center></textarea></td>
					</tr>					
				</table>
				<tr>
					<td colspan="4">
						<input type="submit" name="Submit_Bottom" value="送出" style="margin-left: 48%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
					</tbody></table>
				<div class="middle"align=center><a href="http://localhost/nukcsie_alumnus/deletea.php">刪除活動</a></div><br>				
				<div class="middle"align=center><a href="http://localhost/nukcsie_alumnus/member.php">回首頁</a></div><br><br><br><br>
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