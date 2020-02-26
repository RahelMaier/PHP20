Assignment 7 W20  Functions
Write a sortArray function to sort an array. You may not call the built in functions to do the sorting. Your function should take an array as argument and return a sorted array.
Test that your function is sorted by using print_r of the returned array.

<!DOCTYPE html>
<html>
<body>

<?php


function arraysSum(array ...$arrays): array
{
    return array_map(function(array $array): int {
        return array_sum($array);
    }, $arrays);
}

print_r(arraysSum([0,0,-2], [0,0,4], [5,5,5],[5,8,9]));
?>
</body>
</html>
