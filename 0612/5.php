<?php
if(false){
    echo "注册成功";
}else{
    echo "密码错误";

    error_log('这小子密码写错了，如果记录超过3次，要注意了');
}

trigger_error("这小子有毛病?啊？毛上啥病?",E_USER_ERROR);