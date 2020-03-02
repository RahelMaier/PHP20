<html>
<body>
<!--Write a class to represent a basic artithmetic operations calculator. Your class should have the ability to add, subtract, multiply or divide two numbers. Be sure to add several tests for your calculator class..-->
<?php
class MyCalculator {
private $_fval, $_sval;
public function __construct( $fval, $sval ) {
$this->_fval = $fval;
$this->_sval = $sval;
}
public function add() {
return $this->_fval + $this->_sval;
}
public function subtract() {
return $this->_fval - $this->_sval;
}
public function multiply() {
return $this->_fval * $this->_sval;
}
public function divide() {
return $this->_fval / $this->_sval;
}
}
$mycalc = new MyCalculator(16, 2); 
echo $mycalc-> add()."\n"; 
echo $mycalc-> multiply()."\n"; 
echo $mycalc-> subtract()."\n"; 
echo $mycalc-> divide()."\n";
?>


</body>
</html>
