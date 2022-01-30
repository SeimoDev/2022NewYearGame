<?php
include "config.php";
if(isset($_COOKIE['uuid'])){
echo "

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width,user-scalable=no' name='viewport'>
    <title>Part 1</title>
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
                            <h6 class='h2 text-white d-inline-block mb-0'>第一关</h6></div>
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
                        <h3 class='card-title mb-3'>Part 1
                        </h3>
                        <p class='card-text mb-4'>
                        <p>

                            我和她在同一个高中，她比我高一级。<br> 起初我们毫无联系，但不经意间，我们在体育课相遇。

                            <br> 刚跑完一千米的我没带水，她看见了顺手把水给了我。我好像一见钟情了……

                            <br> 我借感谢她的理由加到了她的联系方式。

                            <br> 但自从感谢完了之后我就和她没有联系了，也不敢冒昧去打扰她，只是偷偷关注她的动态。

                            <br> 有一天，她的动态里分享了一首诗，但这首诗总觉得怪怪的，有些读起来甚至没有条理。
                        <div style='text-align:center;'>
                            <br> 尘心洗尽兴难尽，
                            <br> 龙德先天天不违。
                            <br> 凭高始见三吴势，
                            <br> 仙鹤裴回天上游。
                            <br> 港转黄栀横野艇，
                            <br> 春楼望远背朱城。
                            <br> 今年游寓独游秦，
                            <br> 空昙摩泛海路长。
                            <br> 渠侬去矣涯之北，
                            <br> 水阁山楼望九霄。
                        </div>
                        <br> 而第二天的动态更加让我无法理解，居然发出了一段我根本看不懂的东西。

                        <br>
                        --***/*****/****-/-****/***--/**---/-----/****-/*****/---**/-****/***--/*----/--***/**---/****-/----*/*****/---**/-****

                        <br> 通过一番了解我才知道，这可能是一段密文，但我怎么破译呢？

                        <br> 思考了一段时间后，恍然大悟。

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
                            <h5>输入你的答案：<input type='text' id='part1'></h5>
                            <input type='button' value='提交' type='submit' name='submit' onclick='tjp1()'
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

        function tjp1() {
            if (document.getElementById('part1').value == '') {
                alert('请输入答案');
            }else{
                var daan1 = document.getElementById('part1').value;
                var daan11 = document.getElementById('part1').value;
                for(i=0;;i++){
                    if(daan11.indexOf('，') == -1){
                        console.log(i);
                        break;
                    }else{
                        daan11 = daan11.replace('，', '');
                    }
                }
                if(isChinese(daan11)){
                    //alert('合法');
                    $.ajax({
                        url:'jiaoyan.php',
                        type:'post',
                        data:{p1:daan1},
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
            <br>本游戏策划团队版权所有，遵循AGPL开源协议。游戏所有源码将于结束后开源，可关注B站@Seimo 或加入官方鹅群获取详情
        </div>
    </div>
</footer>

</html>";
    }else{
        echo "<script>location.href='no-login.html'</script>";
    }