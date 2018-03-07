<?php session_start(); ?>
<?php	
	header('conten-type:text/html;charset=utf-8');
	$account=$_SESSION['account'];
	include("mysql_connect.php");
	require("../PHPMailer-master/PHPMailerAutoload.php");
date_default_timezone_set('Etc/UTC');
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->isHTML(true); 

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "jungle0717@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "jasonsteven717";

//Set who the message is to be sent from
$mail->setFrom('jungle0717@gmail.com', "NUKCSIE");

//Set an alternative reply-to address
$mail->addReplyTo('jasonsteven717@gmail.com', "管理員");
	
	$sql = "SELECT * FROM user ";
    $result = mysql_query($sql) or die('MySQL query error');
    while($row = mysql_fetch_array($result)){
		$email =$row['email'];			
		echo "$email";
		//Set who the message is to be sent to
		$mail->addAddress($email);
    }
	$mail->Subject = "NUKCSIE";//發信主題

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));//內文來源
$sql1 = "select max(activity_no) from activity"; 
$rs = mysql_query($sql1)or die('MySQL query error'); 
$row = mysql_fetch_array($rs);
$MAX = $row[0]; 
$sql = "SELECT * FROM activity WHERE activity_no=$MAX";
    $result = mysql_query($sql) or die('MySQL query error');
	while($row = mysql_fetch_array($result)){
		$a_name = $row['activity_name'];
		$a_date = $row['activity_date'];
		$a_location =$row['activity_location'];
		$a_host = $row['activity_host'];
		$a_record = $row['activity_record'];		
	}
		$mail->Body = "高大資工系友會誠摯邀請您<br>
		活動名稱:$a_name<br>
		時間:$a_date<br>
		地點:$a_location<br>
		主辦人:$a_host<br>
		活動內容:$a_record<br>";

//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';//如果使用純文字

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');//夾帶圖片

if (!$mail->send()) {
    echo "發送錯誤: " . $mail->ErrorInfo;
	echo '<meta http-equiv=REFRESH CONTENT=2;url=activity.php>';
} else {
    echo "成功發送邀請!";
	echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
}

?>
 