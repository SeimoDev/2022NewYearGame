<?php
include "config.php";
if(isset($_COOKIE['uuid'])){
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT four FROM user WHERE uuid ='" . $_COOKIE['uuid'] . "'";
$result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $a = $row["four"];
    }
    //echo $a;
if($a ==1){
    echo "

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width,user-scalable=no' name='viewport'>
    <title>Part 4</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link rel='stylesheet' href='./argon.min.css' type='text/css'>
</head>

<body>
    <div class='main-content' id='panel'>
        <div class='header bg-pink pb-6'>
            <div class='container-fluid'>
                <div class='header-body'>
                    <div class='row align-items-center py-4'>
                        <div class='col-lg-6 col-7'>
                            <h6 class='card-title mb-3'>Part 4</h6><br>
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
                    <div class='card-body'><div style='text-align:center' >
                        <h3 class='h2 text-white d-inline-block mb-0'>第四关<br>
                        </h3></div>
                        <p class='card-text mb-4'>
                            <p>

                                原来是这一句话，可这到底代表着什么？她想对我说什么呢？<br> 我们慢慢熟络，虽然我们两个不在同一个城市。但每逢节假日我们经常一起出门游玩。

                                <br> 久而久之，我和她更加亲近了，看着她的笑颜，我也开始将准备很久的计划提上日程。

                                <br> 今天我打算带她去玩密室逃脱，借此机会表明我的心意。我也提前和老板商量一些关卡的惊喜和剧情的走向。

                                <br> 前三个关卡都和我之前所预料的一样，她很开心，也没发现什么异常。

                                <br> 到了第四关，NPC将我和她带向了不同的密室。

                                <br> 当我到达密室时，我发现这和我所设计的并不相同。

                                <br> 经过一番寻找，你最后就只找到了这么<a href='https://drive.sakura-bbs.cn/s/X30cJ'> 几块拼图。</a>

                                <br> 现在面对这些拼图，毫无头绪。

                                <br> “怎么办，难道我就只能止步于此了么？”
                                <br>



                            </p>


                        </p>
                    </div>
                </div>
                <!-- 此处编写判断逻辑 -->
                <div class='card'>
                    <div class='card-header'>
                        <h3 class='mb-0'>输入你的答案！</h3>
                    </div>
                    <div class='card-body' style='text-align:center'>
                        <form>
                            <h5>输入你的答案：<input type='text'id='part4'></h5>
                            <input type='button' value='提交' type='submit' name='submit'onclick='tjp4()' class='col-auto btn btn-sm btn-success'>


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src='./jquery.min.js'></script>
    <script src='./bootstrap.bundle.min.js'></script>
    <script type='text/javascript'>
        function isChinese(str) {
            const re = /^[\u4e00-\u9fa5]+$/;
            return re.test(str);
        }

        function tjp4() {
            if (document.getElementById('part4').value == '') {
                alert('请输入答案');
            }else{
                var daan4 = document.getElementById('part4').value;
                var daan41 = document.getElementById('part4').value;
                for(i=0;;i++){
                    if(daan41.indexOf('，') == -1){
                        console.log(i);
                        break;
                    }else{
                        daan41 = daan41.replace('，', '');
                    }
                }
                if(isChinese(daan41)){
                    //alert('合法');
                    $.ajax({
                        url:'jiaoyan.php',
                        type:'post',
                        data:{p4:daan4},
                        success:function(result){
                            eval(result);
                        },
                        datatype:'text'
                    });
                }else{
                    alert('密码错误！');
                }
            }
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