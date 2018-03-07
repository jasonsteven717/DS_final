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
			<br>高大資工系友管理系統管理系統
			
		</div>
		
		
		<div id="left">			
			<div class="leftblock"><a href="http://localhost/nukcsie_alumnus/%E8%A8%BB%E5%86%8A%E6%9C%83%E5%93%A1.html">註冊會員</a></div><br><br><br><br>
			<div class="leftblock">新增活動</div><br><br><br><br>
			<div class="leftblock">活動成果</div><br><br><br><br>
			<div class="leftblock">個人檔案</div><br><br><br><br>
		</div>
		
		
		<div id="middle">
			<pre>
			<font size = 5 , face="標楷體">
			成立宗旨
			為了促進畢業系友及系上學弟妹的互動，
			及團結各系友互助，使在校的學弟妹們未
			來出社會後有更多的發展空間，達到在生
			活及事業上有更多耀眼的表現，期待透過
			系友會之成立，深化本系與系友的關係，
			透過系友取得資源與經驗分享，提供產學
			互動的橋樑及學弟妹接觸產業的管道，發
			揮系所影響力。
			</font>
			</pre>
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
			<form name="form" method="post" action="connect.php">
			<table>			
					<tr>
						<th>帳號</th>
						<td><input type="text" name="account"></td>
					</tr>
					<tr>
						<th>密碼</th>
						<td><input type="text" name="password"></td>
					</tr>			
			</table>
			<p>
				<td colspan="5">
					<input type="submit" name="Submit_Bottom" value="登入" style="margin-left: 20%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>				
			</p>
			<font size = 3 , face="標楷體" color="red">
			提醒:會員帳號為學號!
			</font>
		</div>
		<div id="bottom">
			<font size = 8 , face="標楷體">
			<marquee >WELCOME TO NUKCSIE</marquee>
			<img src="http://i109.photobucket.com/albums/n47/ralgia/Backgrounds/Grass-Slider-Background1.png" style="width: 100%; height: 100%;">
		</div>
		
	</body>
</html>