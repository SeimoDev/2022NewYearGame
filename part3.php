<?php
include "config.php";
if(isset($_COOKIE['uuid'])){
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT three FROM user WHERE uuid ='" . $_COOKIE['uuid'] . "'";
$result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $a = $row["three"];
    }
    //echo $a;
if($a ==1){
    echo "

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width,user-scalable=no' name='viewport'>
    <title>Part 3</title>
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
                            <h6 class='h2 text-white d-inline-block mb-0'>Part 3</h6><br>
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
                        <h3 class='card-title mb-3'>第三关<br>
                        </h3></div>
                        <p class='card-text mb-4'>
                            <p>

                                原来是这样的加密方式，我还是第一次接触。<br> 但是她为什么会给我发一些诗句呢？她是在给我暗示着什么吗？

                                <br> ......

                                <br> 在话剧社的半年里，我对她也算是慢慢有了了解，我们之间的接触也是越来越多。

                                <br> 时间过得好快，不知不觉已经元旦了，学校要举行元旦晚会，而话剧社要负责一个节目，她顺理成章地被大家推选成为女主人公。

                                <br> 为了和她一起参加元旦晚会，我暗地里努力。最终我成为了男主人公，我终于可以站在她的旁边，默默陪着她了。

                                <br> 晚会快开始了，我看得出来她很紧张，便在她的手里塞了一颗糖，元旦晚会结束后，她和我退回了后台，她拉住了我的衣袖，说了一声谢谢。

                                <br> 我不知如何回答，只回答了一声没关系。

                                <br> 久而久之，我们便成为了朋友。

                                <br> 我感觉我离她更近了。我多想跟她说，我喜欢你，可是嘴边的话却哽住了，她会不会不同意，会不会觉得是玩笑话。

                                <br> ...... 很快到了大年三十，我们互相祝对方新年快乐。

                                <br> “新年快乐鸭。可能你不知道，我有一个习惯，就是在春节的时候给一些人送明信片。我给你也送了一份。”

                                <br> “真的么，你看我这都没准备啥，怪不好意思的。”

                                <br> “没事的，心意到了就可以。哦对了，不出意外的明信片应该是到了，我还有点事情，先下了。”

                                <br> 我出门看了一下门口的信箱，果然有一封信静静的躺在里面。

                                <br> 拆开后，发现是一张<a href='https://drive.sakura-bbs.cn/s/GwEcq'>图片</a> ，背后还有一句话。

                                <br> “苦苦追寻，却得不到回应。任其放纵，一切尽收眼底。”

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
                            <h5>输入你的答案：<input id='part3' type='text'></h5>
                            <input type='button' value='提交' type='submit' name='submit'onclick='tjp3()' class='col-auto btn btn-sm btn-success'>


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

        function tjp3() {
            if (document.getElementById('part3').value == '') {
                alert('请输入答案');
            }else{
                var daan3 = document.getElementById('part3').value;
                var daan31 = document.getElementById('part3').value;
                for(i=0;;i++){
                    if(daan31.indexOf('，') == -1){
                        console.log(i);
                        break;
                    }else{
                        daan31 = daan31.replace('，', '');
                    }
                }
                if(isChinese(daan31)){
                    //alert('合法');
                    $.ajax({
                        url:'jiaoyan.php',
                        type:'post',
                        data:{p3:daan3},
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