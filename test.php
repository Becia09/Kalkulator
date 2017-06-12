<?php

	require 'calculatorClass.php';
	
	function testTrue($result, $operation, $method, $line = 0)
	{
		if ($result == $operation)
		{
			//echo "Wynik poprawny w: $method w funkcji 'testTrue'\n";
			return true;
		}
		else
		{
			echo "Blad w metodzie: $method w funkcji 'testTrue' linia $line\n";
			return false;
		}
	}
	function testFalse($result, $operation, $method)
	{
		if ($result != $operation)
		{
			//echo "Wynik poprawny w: $method w funkcji 'testFalse'\n";
			return true;
		}
		else
		{
			echo "Blad w metodzie: $method w funkcji 'testFalse' linia $line\n";
			return false;
		}
	}
	
	$calculator = new Calculator();
	
	if (
		testTrue(5, $calculator->add(2,3), "add", __LINE__) &&
		testTrue(4, $calculator->add(8,-4), "add", __LINE__) &&
		testTrue(-9, $calculator->add(-2,-7), "add", __LINE__) &&
		testTrue(10.4, $calculator->add(9.3,1.1), "add", __LINE__) &&
		testFalse(2, $calculator->add(9,3), "add", __LINE__) &&
		testFalse(9, $calculator->add(-20,-7), "add", __LINE__) &&
		testFalse(15.4, $calculator->add(9.8,1.9), "add", __LINE__) &&
		
		testTrue(12, $calculator->substract(20,8), "substract", __LINE__) &&
		testTrue(-136, $calculator->substract(-128,8), "substract", __LINE__) &&
		testTrue(2, $calculator->substract(-10,-12), "substract", __LINE__) &&
		testTrue(8.2, $calculator->substract(9.6,1.4), "substract", __LINE__) &&
		testFalse(5, $calculator->substract(30,12), "substract", __LINE__) &&
		testFalse(-138, $calculator->substract(128,-15), "substract", __LINE__) &&
		testFalse(10.2, $calculator->substract(100.6,1.4), "substract", __LINE__) &&
		
		testTrue(28, $calculator->multiply(4,7), "multiply", __LINE__) &&
		testTrue(-27, $calculator->multiply(-3,9), "multiply", __LINE__) &&
		testTrue(40, $calculator->multiply(-10,-4), "multiply", __LINE__) &&
		testTrue(56.1, $calculator->multiply(3.4,16.5), "multiply", __LINE__) &&
		testFalse(100, $calculator->multiply(5,6), "multiply", __LINE__) &&
		testFalse(-48, $calculator->multiply(-18,-4), "multiply", __LINE__) &&
		testFalse(5.1, $calculator->multiply(8.4,6.5), "multiply", __LINE__) &&
		
		testTrue(6, $calculator->division(54,9), "division", __LINE__) &&
		testTrue(-5, $calculator->division(25,-5), "division", __LINE__) &&
		testTrue(15, $calculator->division(-30,-2), "division", __LINE__) &&
		testTrue("nie dziel przez zero !", $calculator->division(54,0), "division", __LINE__) &&
		testFalse(12.4, $calculator->division(40,7), "division", __LINE__) &&
		testFalse("nie dziel przez zero !", $calculator->division(22,8), "division", __LINE__) &&
		testFalse(65.9, $calculator->division(6,0), "division", __LINE__) )
	{
		echo "\nWszystkie testy zaliczone !\n";
	}

?>