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
			<br>刪除活動
			
		</div>		
		
		
		<div id="middle">
			<form action = "deletea_finish.php" method = "POST" align=center>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if(($_SESSION['account'] != null)&&($_SESSION['right']=='2'))
{
        echo "<form name=\"form\" method=\"post\" action=\"deletea_finish.php\">";
        echo "要刪除的活動編號：<input type=\"text\" name=\"activity_no\" /> <br>";
        echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
        echo "</form>";
}
else
{
        echo '您無權限刪除活動!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=new_activity.php>';
}
?>
			</form>				
		</div>
		<div class="middle"align=center><a href="http://localhost/nukcsie_alumnus/new_activity.php">回上一頁</a></div><br><br><br><br>

	</body>
</html>