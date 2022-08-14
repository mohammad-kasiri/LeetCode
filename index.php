<?php
print_r (AddTwoNumbers(  [2,4,3]         , [5,6,4]    ));
print_r (AddTwoNumbers(  [0]             , [0]        ));
print_r (AddTwoNumbers(  [9,9,9,9,9,9,9] , [9,9,9,9]  ));


function AddTwoNumbers(array $list1, array $list2) : array
{
    $list1 = (int) implode(array_reverse($list1));
    $list2 = (int) implode(array_reverse($list2));

    return array_reverse(str_split((string) ($list1 + $list2)));
}
