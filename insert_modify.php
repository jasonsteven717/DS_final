<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include("mysql_connect.php");
	$password = $_POST["password"];
	$name = $_POST["name"];
	$sex = $_POST["sex"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$fb = $_POST["fb"];
	$line = $_POST["line"];
	$work = $_POST["work"];
	if($_SESSION['account'] != null && $password != null)
	{
    $account = $_SESSION['account'];
    $sql = "update user set password='$password', name='$name', sex='$sex',phone='$phone', email='$email', address='$address', fb='$fb', line='$line', work='$work' where account='$account'";
    if(mysql_query($sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=profile.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=profile.php>';
    }
	}
	else
	{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=nukcsie_alumnus.php>';
	}
 ?>
