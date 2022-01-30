<?php
include "config.php";
if(isset($_COOKIE['uuid'])){
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT five FROM user WHERE uuid ='" . $_COOKIE['uuid'] . "'";
$result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $a = $row["five"];
    }
    //echo $a;
if($a ==1){
    echo "

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width,user-scalable=no' name='viewport'>
    <title>Part 5</title>
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
                            <h6 class='h2 text-white d-inline-block mb-0'>Part 5</h6><br>
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
                        <h3 class='card-title mb-3'>第五关<br>
                        </h3></div>
                        <p class='card-text mb-4'>
                            <p>
                                四年后，我们准备结婚了。我们也将订婚的日子定在了大年初一。<br> 今天要去见她的家长，也是我第一次见到她的父母。她的父母也是名牌大学毕业，怪不得他们的女儿也如此的优秀。

                                <br> 但她的父亲似乎不太喜欢我，我知道她对于她的父母来说是珍宝，而我将要带走她，对他们来说肯定是恋恋不舍。

                                <br> 我本以为可能需要花费大量的彩礼钱才能与她订婚，可出乎我的意料的是，她父亲给了我一张纸，上面写道：

                                <br> “小伙子，其实在这三年里，我和她妈妈都一直在看着你。”

                                <br> “起初认为你这也不行，那也不行，和我们家闺女都搭不上边。”

                                <br> “但现在的情况我们也知道了，你通过你的努力证明了你自己，我和她妈妈都很欣慰。”

                                <br> “可她毕竟也是我们的掌上明珠，如果随便出手，那未免太草率了。”

                                <br> “所以，我们给你设置了

                                <a href='https://drive.sakura-bbs.cn/s/69PTO'> 最后一个考验</a>。”<br> “只要你通过了，我们也就可以把她放心地托付给你。”

                                <br> “如果没有通过，很抱歉，我们只能中断这场婚事。”

                                <br> “你，想清楚了么？”

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
                            <h5>输入你的答案：<input type='text'id='part5'></h5>
                            <input type='button' value='提交' type='submit' name='submit'onclick='tjp5()' class='col-auto btn btn-sm btn-success'>


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

        function tjp5() {
            if (document.getElementById('part5').value == '') {
                alert('请输入答案');
            }else{
                var daan5 = document.getElementById('part5').value;
                var daan51 = document.getElementById('part5').value;
                for(i=0;;i++){
                    if(daan51.indexOf('，') == -1){
                        console.log(i);
                        break;
                    }else{
                        daan51 = daan51.replace('，', '');
                    }
                }
                if(isChinese(daan51)){
                    //alert('合法');
                    $.ajax({
                        url:'jiaoyan.php',
                        type:'post',
                        data:{p5:daan5},
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