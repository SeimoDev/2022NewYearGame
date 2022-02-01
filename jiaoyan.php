<?php
include "config.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['p1'])) {
    if ($_SERVER['HTTP_REFERER'] == $url."part1.php") {
        if ($_POST['p1'] == "独上高楼，望尽天涯路") {
            $sql1 = "UPDATE user SET two=1 WHERE uuid ='" . $_COOKIE['uuid'] . "'";
            mysqli_query($conn, $sql1);
            mysqli_close($conn);
            echo "location.href='part2.php'";
        } else {
            echo "alert('密码错误！')";
        }
    } else {
        echo "无权调用";
    }
}

if (isset($_POST['p2'])) {
    if ($_SERVER['HTTP_REFERER'] == $url."part2.php") {
        if ($_POST['p2'] == "我欲穿花寻路，直入白云深处") {
            $sql2 = "UPDATE user SET three=1 WHERE uuid ='" . $_COOKIE['uuid'] . "'";
            mysqli_query($conn, $sql2);
            mysqli_close($conn);
            echo "location.href='part3.php'";
        } else {
            echo "alert('密码错误！')";
        }
    } else {
        echo "无权调用";
    }
}

if (isset($_POST['p3'])) {
    if ($_SERVER['HTTP_REFERER'] == $url."part3.php") {
        if ($_POST['p3'] == "众里寻他千百度，蓦然回首，那人却在，灯火阑珊处"||$_POST['p3'] == "蓦然回首，那人却在，灯火阑珊处") {
            $sql3 = "UPDATE user SET four=1 WHERE uuid ='" . $_COOKIE['uuid'] . "'";
            mysqli_query($conn, $sql3);
            mysqli_close($conn);
            echo "location.href='part4.php'";
        } else {
            echo "alert('密码错误！')";
        }
    } else {
        echo "无权调用";
    }
}

if (isset($_POST['p4'])) {
    if ($_SERVER['HTTP_REFERER'] == $url."part4.php") {
        if ($_POST['p4'] == "身无彩凤双飞翼，心有灵犀一点通") {
            $sql4 = "UPDATE user SET ftf=1 WHERE uuid ='" . $_COOKIE['uuid'] . "'";
            $sql5 = "UPDATE user SET five=1 WHERE uuid ='" . $_COOKIE['uuid'] . "'";
            mysqli_query($conn, $sql4);
            mysqli_query($conn, $sql5);
            mysqli_close($conn);
            echo "location.href='425.php'";
        } else {
            echo "alert('密码错误！')";
        }
    } else {
        echo "无权调用";
    }
}

if (isset($_POST['p5'])) {
    if ($_SERVER['HTTP_REFERER'] == $url."part5.php") {
        if ($_POST['p5'] == "有情人终成眷属") {
            $sql6 = "UPDATE user SET ending=1 WHERE uuid ='" . $_COOKIE['uuid'] . "'";
            mysqli_query($conn, $sql6);
            mysqli_close($conn);
            echo "location.href='end.php'";
        } else {
            echo "alert('密码错误！')";
        }
    } else {
        echo "无权调用";
    }
}
