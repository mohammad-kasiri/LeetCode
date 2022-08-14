<?php

print_r(twoSum1 ([2,7,11,15] , 9));
print_r(twoSum1 ([3, 2, 4]   , 6));
print_r(twoSum1 ([3,3]       , 6));


//First Way
function twoSum1($nums , $target)
{
    foreach ($nums as $key1 => $num1)
    {
        foreach ($nums as $key2 => $num2)
        {
            if ($num1 + $num2 === $target && $key1 !== $key2)
            {
                return [$key1, $key2];
            }
        }
    }
}

//Second Way
function twoSum2($nums , $target)
{
    foreach ($nums as $key1 => $num1)
    {
        $num2 = $target - $num1;

        if (in_array($num2 , $nums) && (array_search($num2, $nums) != $key1))
        {
            return [$key1 , array_search($num2, $nums)];
        }

    }
}
