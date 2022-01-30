<?php
include "config.php";
if(isset($_COOKIE['uuid'])){
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT two FROM user WHERE uuid ='" . $_COOKIE['uuid'] . "'";
$result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $a = $row["two"];
    }
    //echo $a;
if($a ==1){
    echo "
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width,user-scalable=no' name='viewport'>
    <title>Part 2</title>
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
                            <h6 class='card-title mb-3'>Part 2</h6><br>
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
                        <h3 class='h2 text-white d-inline-block mb-0'>第二关<br>
                        </h3></div>
                        <p class='card-text mb-4'>
                        <p>

                            这句话代表什么意思呢？我不知道，但很奇怪，那条动态没有一个人点赞和回复。<br> 过了一年，她要参加高考了，我也是通过动态得知她考上了xxx。

                            <br> 那是我遥不可及的高度，但我还是放不下她，我期望我的未来能有她。

                            <br> 高三那年我发奋苦读，也许是感动了上天，很幸运，我去到了和她一样的学校。

                            <br> 初来乍到，我对这里的一切环境都是陌生的。

                            <br> 到了社团招新会的那一天，我面对这么多社团，不知该如何选择。

                            <br> 当走过话剧社时，我看到了那个熟悉的身影，是她！

                            <br> 我们相互对视，直到现在，我依旧清晰地记得她看见我时惊讶的模样。

                            <br> 我内心雀跃不已，原来她还记得我。

                            <br> 她随后笑着对我说:“欢迎加入。”

                            <br> ......

                            <br> 有一天，她突然给我发消息。

                            <br> “给你推荐一首歌，我觉得还挺好听的。”

                            <br> 说完，她就给我发了一个

                            <a href='https://drive.sakura-bbs.cn/s/Q30sN'>音频。</a> <br> “你别说，这首歌确实不错。”

                            <br> “是吧，我也是这么觉得的，我还有事，先下了。”

                            <br> 这首歌确实不错，也是我喜欢的类型。

                            <br> 不过，我总觉得这首歌有什么问题，到底是哪里呢？

                            <br> PS：原子邦妮都给我听！！！

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
                            <h5>输入你的答案：<input type='text' id='part2'></h5>
                            <input type='button' value='提交' type='submit' name='submit' onclick='tjp2()'
                                class='col-auto btn btn-sm btn-success'>


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

        function tjp2() {
            if (document.getElementById('part2').value == '') {
                alert('请输入答案');
            } else {
                var daan2 = document.getElementById('part2').value;
                var daan21 = document.getElementById('part2').value;
                for (i = 0; ; i++) {
                    if (daan21.indexOf('，') == -1) {
                        console.log(i);
                        break;
                    } else {
                        daan21 = daan21.replace('，', '');
                    }
                }
                if (isChinese(daan21)) {
                    //alert('合法');
                    $.ajax({
                        url: 'jiaoyan.php',
                        type: 'post',
                        data: { p2: daan2 },
                        success: function (result) {
                            eval(result);
                        },
                        datatype: 'text'
                    });
                } else {
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
            <br>本游戏策划团队版权所有，遵循AGPL开源协议。游戏所有源码将于结束后开源，可关注B站@Seimo 或加入官方鹅群获取详情
        </div>
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