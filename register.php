<?php
include("config.php");
$mail = $_COOKIE['mail'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT mail FROM user WHERE mail ='".$mail."'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $a=$row["mail"];
}
mysqli_close($conn);
if($a ==""){
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql2 = "INSERT INTO `user` (`un`, `pw`,`mail`,`code`) VALUES ('" . $_COOKIE['username'] . "', '" . $_COOKIE['password'] . "','" . $_COOKIE['mail'] . "','" . $_COOKIE['code'] . "')";
    mysqli_query($conn, $sql2);
    mysqli_close($conn);
    echo "<script>alert('注册成功！');/*location.href='login.html'*/</script>";
}else{
    echo "<script>alert('该邮箱已被注册');location.href='register.html'</script>";
}