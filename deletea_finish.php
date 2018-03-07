<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");
$activity_no = $_POST['activity_no'];

if($_SESSION['account'] != null)
{
        //刪除資料庫資料語法
        $sql = "delete from activity where activity_no='$activity_no'";
        if(mysql_query($sql))
        {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
        else
        {
                echo '刪除失敗!';
                
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=nukcsie_alumnus.php>';
}
?>