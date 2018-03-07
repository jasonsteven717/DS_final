<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
					
			#middle {
				float: left;
				width: 100%;
				height: 450px;
				padding-top: 70px;	
			}
		


		
		</style>
		
	</head>
	
	<body style="background-color: #D5EDFA;">
	
		<div id="top">
			<br>刪除會員
			
		</div>		
		
		
		<div id="middle">
			<form action = "deleteu_finish.php" method = "POST" align=left>

					<?php
				include("mysql_connect.php");
if(($_SESSION['account'] != null)&&($_SESSION['right']=='2'))
{
		mysql_query("SET NAMES 'utf8mb4'");
		mysql_select_db($db_name);
		$sql = "SELECT * FROM user ORDER BY account ASC;";
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
			echo '-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------','<br>';
			echo "$account ",'/',"$name ",'	',"$sex ",'		',"$phone ",'	',"$email ",'	',"$phone ",'	',"$address ",'		',"$identity ",'	',"$fb ",'	',"$line ",'	',"$work ",'	','<br>';
			
		}			

        echo "<form name=\"form\" method=\"post\" action=\"deleteu_finish.php\">",'<br>';
        echo "要刪除的帳號：<input type=\"text\" name=\"account\" /> <br>";
        echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
        echo "</form>";
}
else
{
        echo '您無權限刪除留言!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=profile.php>';
}
?>
					
			</form>				
		</div>
		<div class="middle"align=center><a href="http://localhost/nukcsie_alumnus/profile.php">回上一頁</a></div><br><br><br><br>

	</body>
</html>

