<?php session_start(); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include("mysql_connect.php");
	$account=$_SESSION['account'];
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
		$password =$row['password'];
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
			<br>修改會員資料
			
		</div>
		
		
		<div id="left">
			<div class="leftblock">註冊會員</a></div><br><br><br><br>
			<div class="leftblock">新增活動</div><br><br><br><br>
			<div class="leftblock">留言板</div><br><br><br><br>
			<div class="leftblock">個人檔案</div><br><br><br><br>
		</div>
		
		
		<div id="middle">
			<form action = "insert_modify.php" method = "POST">
				<table>			
					<tr>
						<th>學號</th>
						<td><?php echo "$account";?></td>
					</tr>	
					<tr>
						<th>姓名</th>
						<td><input type="text" name="name" id="name" value="<?php echo "$name";?>"></td>
					</tr>
					<tr>
					<th>性別</th>
						<td>
							<input type="radio" name="sex" value= "男" id="sex" CHECKED>男
							<input type="radio" name="sex" value= "女" id="sex">女
						</td>
					</tr>
						<th>身分</th>
						<td><?php echo "$identity";?></td>
					<tr>
						<th>電話</th>
						<td><input type="text" name="phone" id="phone" value="<?php echo "$phone";?>"></td>
					</tr>	
					<tr>
						<th>信箱</th>
						<td><input type="text" name="email" id="email" value="<?php echo "$email";?>"></td>
					</tr>			
					<tr>
						<th>住址</th>
						<td colspan="3"><input type="text" name="address" style="width: 100%" id="address" value="<?php echo "$address";?>"></td>
					</tr>
						<th>FB</th>
						<td><input type="text" name="fb" id="fb" value="<?php echo "$fb";?>"></td>
					</tr>	
					<tr>
						<th>LINE</th>
						<td><input type="text" name="line" id="line" value="<?php echo "$line";?>"></td>						
					</tr>
						<th>在職狀況</th>
						<td><input type="text" name="work" id="work" value="<?php echo "$work";?>"></td>
					</tr>	
					<tr>
						<th>密碼</th>
						<td><input type="text" name="password" id="password" value="<?php echo "$password";?>"></td>
					</tr>
					<tr>
						<td colspan="4">
							<input type="submit" name="Submit_Bottom" value="送出" style="margin-left: 40%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset" name="Reset_Bottom" value="重設">
						</td>
					</tr>					
				</table>
				<div class="middle"align=center><a href="http://localhost/nukcsie_alumnus/profile.php">回上一頁</a></div><br><br><br><br>
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
			<p>Hello <?php echo"$name " ;?></p>
			<br>
				<p>Welcome!!!</p>
			
		</div>
		
		
		<div id="bottom">
			<img src="http://i109.photobucket.com/albums/n47/ralgia/Backgrounds/Grass-Slider-Background1.png" style="width: 100%; height: 100%;">
		</div>
		
	</body>
</html>