<?php
include("config.php");
if($_COOKIE['mail'] != ''){
    $mail = $_COOKIE['mail'];
}else{
    echo "<script>alert('请输入账号');location.href='login.html'</script>";
}
if($_COOKIE['password'] != ''){
    $pw = $_COOKIE['password'];
}else{
    echo "<script>alert('请输入密码');location.href='login.html'</script>";
}

$conn =mysqli_connect($servername, $username, $password, $dbname);
$sql ="SELECT pw FROM user WHERE mail ='".$mail."'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $a=$row["pw"];
}
mysqli_close($conn);
if($a != ''){
if($pw == $a){
    echo"密码正确";
}else{
    echo"密码错误";
}}else{
    echo"邮箱错误或未注册";
}