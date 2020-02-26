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
