<?php

namespace MyGreeter;

class Client {
    /**
     * 问候语
     */
    public function getGreeting()
    {
        $hour = $this->getHour();
        // 判断时间范围，返回问候语
        if ($hour >= 6 && $hour < 12) {
            return "Good morning"; // 上午
        } elseif ($hour >= 12 && $hour < 18) {
            return "Good afternoon"; // 中午
        } elseif (($hour >= 0 && $hour < 6) || ($hour >= 18 && $hour < 24)) {
            return "Good evening";   // 晚上
        } else {
            return "bad time!";
        }
    }
    /**
     * 获取当前时间
     */
    public function getHour()
    {
        // 获取当前时间
        // $hour = -1;
        // $hour = 25;
        $hour = date('G', time());
        return $hour;
    }
}

$greeting = (new Client)->getGreeting();
var_dump($greeting);