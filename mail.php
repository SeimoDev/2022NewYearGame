<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include "config.php";

if($_SERVER['HTTP_REFERER']==$url."register.html"){
if (isset($_POST['email'])) {
    if ($_POST['email'] == "seimo") {
        echo "alert('fuck seimo!!')";
    } else {
        /*if (time() - $_COOKIE['time'] >= 60) {
            setcookie("time", time());*/
        $code = rand(100000, 999999);
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //服务器配置
            $mail->CharSet = "UTF-8";                     //设定邮件编码
            $mail->SMTPDebug = 0;                        // 调试模式输出
            $mail->isSMTP();                             // 使用SMTP
            $mail->Host = 'xxxxxxxx';                // SMTP服务器
            $mail->SMTPAuth = true;                      // 允许 SMTP 认证
            $mail->Username = 'xxxxxxxx';                // SMTP 用户名  即邮箱的用户名
            $mail->Password = 'xxxxxxxx';             // SMTP 密码  部分邮箱是授权码(例如163邮箱)
            $mail->SMTPSecure = 'ssl';                    // 允许 TLS 或者ssl协议
            $mail->Port = 465;                            // 服务器端口 25 或者465 具体要看邮箱服务器支持

            $mail->setFrom('xxxxxxxxx', '新年解密制作组');  //发件人
            $mail->addAddress($_POST['email']);  // 收件人
            //$mail->addAddress('ellen@example.com');  // 可添加多个收件人
            $mail->addReplyTo('xxxxxxxxx', 'info'); //回复的时候回复给哪个邮箱 建议和发件人一致
            //$mail->addCC('cc@example.com');                    //抄送
            //$mail->addBCC('bcc@example.com');                    //密送

            //发送附件
            // $mail->addAttachment('../xy.zip');         // 添加附件
            // $mail->addAttachment('../thumb-1.jpg', 'new.jpg');    // 发送附件并且重命名

            //Content
            $mail->isHTML(false);                                  // 是否以HTML文档格式发送  发送后客户端可直接显示对应HTML内容
            $mail->Subject = '2022新年解密验证码';
            $mail->Body    = '您的验证码为' . $code . '祝您玩得愉快';
            //$mail->AltBody = '如果邮件客户端不支持HTML则显示此内容';

            $mail->send();
            echo "alert('邮件发送成功')";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $sql3 = "SELECT code FROM re_mail WHERE mail ='" . $_POST['email'] . "'";
            $result2 = mysqli_query($conn, $sql3);
            while ($row = mysqli_fetch_assoc($result2)) {
                $b = $row["code"];
            }
            if (isset($b)) {
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                $sql2 = "UPDATE re_mail SET code=" . $code . " WHERE mail ='" . $_POST['email'] . "'";
                mysqli_query($conn, $sql2);
                mysqli_close($conn);
            } else {
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                $sql = "INSERT INTO `re_mail` (`mail`, `code`) VALUES ('" . $_POST['email'] . "', '" . $code . "')";
                mysqli_query($conn, $sql);
                mysqli_close($conn);
            }
        } catch (Exception $e) {
            echo "alert('邮件发送失败:" . $mail->ErrorInfo . "')";
        }

        //echo "success";

        /*} else {
            $lasttime = 60 - time() + $_COOKIE['time'];
            echo "alert('" . $lasttime . "秒后获取')";
        }*/
    }
}
}else{
    echo "无权调用";
}
