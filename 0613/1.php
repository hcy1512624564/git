<?php
echo time();
// mktime -----> 给我一个年月日时分秒，我返回一个时间戳，用的很少

//2033-2-12的时间戳是多少
//cho mktime(0,0,1,2,12,2033);

// strtotime --> 使用的是英文的写法
echo "获取指定日期2020-1-1的时间戳:".strtotime('2020-1-1');

echo "获取3天前的时间戳:".strtotime('-3 day');

echo "获取3天后的时间戳:".strtotime('+3 day');