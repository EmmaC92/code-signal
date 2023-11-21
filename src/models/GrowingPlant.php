<?php

namespace Acme\models;

/*
    Caring for a plant can be hard work, but since you tend to it regularly,
    you have a plant that grows consistently. Each day, its height increases by 
    a fixed amount represented by the integer upSpeed. But due to lack of sunlight,
    the plant decreases in height every night, by an amount represented by downSpeed.

    Since you grew the plant from a seed, it started at height 0 initially. Given an 
    integer desiredHeight, your task is to find how many days it'll take for the plant 
    to reach this height.
*/

class GrowingPlant {

    static public function growingPlant($upSpeed, $downSpeed, $desiredHeight){
        // $days = ceil($desiredHeight / $upSpeed);
        // $totalDown = ($days * $downSpeed);
        // $totalIncreased = ($upSpeed * $days) - $totalDown ;
        // $difference = $desiredHeight - $totalIncreased;

        // $daysMore = ceil($difference / $upSpeed);

        // var_dump("UP: $upSpeed, DOWN: $downSpeed, DESIRED: $desiredHeight");
        // var_dump("days: $days, totaldown: $totalDown, totalIncreased: $totalIncreased, difference: $difference, more: $daysMore");
        // return $days + $daysMore;

        return ($desiredHeight-$downSpeed)/($upSpeed-$downSpeed);
    }
}