<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->

<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.php");
$account = $_POST['account'];
$password = $_POST['password'];

//搜尋資料庫資料
$sql = "SELECT * FROM user where account = '$account'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($account != null && $password != null && $row[0] == $account && $row[1] == $password)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['account'] = $account;
		if(($row[7]=="在校生")||($row[7]=="畢業生")){
		$_SESSION['right'] = '0';}
		elseif($row[7]=="老師"){
		$_SESSION['right'] = '1';}
		elseif($row[7]=="管理員"){
		$_SESSION['right'] = '2';}		
		echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=nukcsie_alumnus.php>';
}
?>