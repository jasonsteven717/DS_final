<?php session_start(); ?>
<?php
	include("mysql_connect.php");
	$m_account=$_SESSION['account'];
	$message = $_POST["message"];
    mysql_query("SET NAMES 'utf8mb4'");
    mysql_select_db($db_name);
    $sql ="insert into `message_board`(`activity_no`,`message_no`,`account`,`message_time`,`message`)
	values('1',NULL,'$m_account',NULL,'$message');"or die("insert error");
	if(mysql_query($sql))
    {
        echo '留言成功!';
		echo '<meta http-equiv=REFRESH CONTENT=1;url=activity.php>';
    }
    else
    {
        echo '留言失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=activity.php>';
    }

 ?>
 