<?php
include "config.php";
if (isset($_POST['email'])) {
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $mail = $_POST['email'];
    $sql = "SELECT pw FROM user WHERE mail ='" . $mail . "'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $a = $row["pw"];
    }
    if (!$conn) {
        echo mysqli_error();
    } else {
        mysqli_close($conn);
        if (isset($a)) {
            if ($_POST['password'] == $a) {
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                $mail = $_POST['email'];
                $sql2 = "SELECT uuid FROM user WHERE mail ='" . $mail . "'";
                $result2 = mysqli_query($conn, $sql2);
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    $b = $row2["uuid"];
                }
                setcookie("uuid",$b,time()+43200);
                mysqli_close($conn);
                echo "location.href='part1.php'";
            } else {
                echo "alert('密码错误')";
            }
        } else {
            echo "alert('邮箱错误或未注册')";
        }
    }
}
