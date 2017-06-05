
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

<?php
// Khai báo thư viên phpmailer
require "contact/PHPMailerAutoload.php";
	
$ms = $_POST['message'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$subject = $_POST['subject'];
// Khai báo tạo PHPMailer
$mail = new PHPMailer();
//Khai báo gửi mail bằng SMTP
$mail->IsSMTP();
//Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
// 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
// 1 = Thông báo lỗi ở client
// 2 = Thông báo lỗi cả client và lỗi ở server
//$mail->SMTPDebug  = 2;
 
$mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
$mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
$mail->Port       = 587; // cổng để gửi mail
$mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
$mail->SMTPAuth   = true; //Xác thực SMTP
$mail->Username   = "colordesignweb@gmail.com"; // Tên đăng nhập tài khoản Gmail
$mail->Password   = "Ht0909088210"; //Mật khẩu của gmail
$mail->AddAddress("colordesignweb@gmail.com", "Portfolio");//Email của người nhận
$mail->Subject = "Hire me for CV"; 
$mail->Body = "$name <br> $subject<br>$ms"; 

// $mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
 
//Tiến hành gửi email và kiểm tra lỗi
if(!$mail->Send()) {
  echo "Có lỗi khi gửi mail: " . $mail->ErrorInfo;
} else {
  echo "Đã gửi thư thành công!";
}

?>
    

</body>

</html>