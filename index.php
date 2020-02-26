<!DOCTYPE html>
<html>
<body>
<?php 

    $str = 'radar';
    $strLen = strlen($str)-1;
    $revStr = '';
    for($i=$strLen; $i>=0; $i--){
        $revStr.=$str[$i];
    }
    if($revStr == $str)
        echo 'Palindrome';
    else
        echo "Not Palindrome";
      echo "String: " . $word . "<br>";  
          $str = 'cat';
    $strLen = strlen($str)-1;
    $revStr = '';
    for($i=$strLen; $i>=0; $i--){
        $revStr.=$str[$i];
    }
    if($revStr == $str)
        echo 'Palindrome';
    else
        echo "Not Palindrome";

echo "String: " . $word . "<br>";
?>
</body>
</html>
