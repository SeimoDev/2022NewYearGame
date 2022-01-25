<?php
if(isset($_POST['action'])){
            
            if($_POST['action'] == "guangnian"){
                //echo "密码正确";
                //header("www.baidu.com");
                echo "location.href = 'http://www.baidu.com'";
            }else{
                echo "alert('密码错误')";
            }
            // code...
        
        
        
    }