<?php
include "config.php";
if(isset($_COOKIE['uuid'])){
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT ending FROM user WHERE uuid ='" . $_COOKIE['uuid'] . "'";
$result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $a = $row["ending"];
    }
    //echo $a;
if($a ==1){
    echo "

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width,user-scalable=no' name='viewport'>
    <title>The ending</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link rel='stylesheet' href='./argon.min.css' type='text/css'>
</head>

<body>
    <div class='main-content' id='panel'>
        <div class='header bg-pink pb-6'>
            <div class='container-fluid'>
                <div class='header-body'>
                    <div class='row align-items-center py-4'>
                        <div class='col-lg-6 col-7'><div style="text-align:center" >
                            <h6 class='h2 text-white d-inline-block mb-0'>The ending</h6></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <div class='container-fluid mt--6'>
        <div class='row'>
            <div class='col-xl-8 center'>
                <div class='card'>
                    <div class='card-body'>
                        <h3 class='card-title mb-3'>The ending
                        </h3>
                        <p class='card-text mb-4'>
                            <p>



                                没有想到，原来她的父母也是支持我的这门婚事的。<br> 有情人，终成眷属。

                                <br> ......

                                <br> 婚礼即将开始，我终于可以迎娶我的爱人了。

                                <br> 感谢年少时的我奋力拼搏，我终于走进了她的未来。

                                <br> 她的未来会有我的参与，我与她的爱最终成为了我们的未来。

                                <br> 到了婚礼上，主持人问她。

                                <br> “此时此刻，你想对你的爱人说些什么吗？”

                                <br> 她会心一笑，只说了一句话。

                                <br> “我欲与君相知，长命无绝衰”

                                <br> （全剧终）
                                <br>

                                <br>


                            </p>


                        </p>
                    </div>
                </div>
                <!-- 此处编写跳转逻辑（下一页还没想好） -->
                <div class='card'>
                    <div class='card-header'>
                        <h3 class='mb-0'>了解我们的团队</h3>
                    </div>
                    <div class='card-body' style='text-align:center'>
                        <form>
                            <h4>这次解密游戏倾注了我们极大的心血，欢迎了解我们的团队</h4>
                            <input type='button' value='立即跳转' type='submit' name='submit'onClick='b()' class='col-auto btn btn-sm btn-success'>


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src='./jquery.min.js'></script>
    <script src='./bootstrap.bundle.min.js'></script>
    <script>
    function b(){
        location.href='about.html';
    }
    </script>


</body>
<footer>
    <div class='card'>
        <div class='card-header' style='text-align:center'>
            联系我们：seimo@sakura-bbs.cn
            <br> 官方鹅群：542645899
            <br>本游戏策划团队版权所有，遵循AGPL开源协议。游戏所有源码将于结束后开源，可关注B站@Seimo 或加入官方鹅群获取详情</div>
    </div>
</footer>

</html>
";
    }else{
        echo "<script>location.href='jump.html'</script>";
    }
}else{
    echo "<script>location.href='no-login.html'</script>";
}