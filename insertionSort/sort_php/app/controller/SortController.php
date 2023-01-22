<?php
//厦门大学计算机专业 | 前华为工程师
//专注《零基础学编程系列》  http://lblbc.cn/blog
//包含：Java | 安卓 | 前端 | Flutter | iOS | 小程序 | 鸿蒙
//公众号：蓝不蓝编程
declare (strict_types = 1);

namespace app\controller;

class SortController
{
    public function sort()
    {
        $array = [2, 1, 5, 4, 3];
        for ($i = 0; $i < count($array); $i++) {
            $insertVal = $array[$i];
            $insertIndex = $i - 1;
            while ($insertIndex >= 0 && $insertVal < $array[$insertIndex]) {
                $array[$insertIndex + 1] = $array[$insertIndex];
                $insertIndex--;
            }
            $array[$insertIndex + 1] = $insertVal;
        }
        return var_dump($array);
    }
}
