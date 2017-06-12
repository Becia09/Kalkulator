<?php

require 'calculatorClass.php';

if(!function_exists("readline")) {
    function readline($prompt = null){
        if($prompt){
            echo $prompt;
        }
        $fp = fopen("php://stdin","r");
        $line = rtrim(fgets($fp, 1024));
        return $line;
    }
}

function loadNumber()
{
	$flag = true;
	$number = NULL;
	while ($flag)
	{
		$number = readline();
		
		$number = str_replace(',','.',$number);	//convert comma to dot
		if (!is_numeric($number))
			echo "To nie jest liczba\nWpisz poprawna wartosc: ";
		else
			$flag = false;
	}
	return $number;
}


while(1)
{
	for ($i = 0; $i < 3; $i++)
	{
		echo "\n";
	}

echo<<<END

	KALKULATOR
	--------------------------------------
	Wybierz odpowiedni numer, aby wykonac:
	1 - Dodawanie
	2 - Odejmowanie
	3 - Mnozenie
	4 - Dzielenie
	5 - Zakoncz kalkulator
	
	Wpisz numer opcji: 
END;

	do
	{
	$digit = loadNumber();
	if ($digit < 1 || $digit > 5)
		echo "Nie ma takiej opcji\nWpisz prawidlowy numer opcji kalkulatora: ";
	}
	while ($digit < 1 || $digit > 5);

	if ($digit == 5)
		exit;
	
	echo "\nPodaj 2 liczby na ktorych chcesz wykonac wybrane dzialanie: \n";
	$array;
	for ($i = 0; $i < 2; $i++)
	{
		do
		{
		echo "Wpisz liczbe nr ".($i+1).": ";
		$array[$i] = loadNumber();
		if (strlen($array[$i]) > 138)
			echo "Ta liczba jest za duza ! Podaj mniejsza wartosc";
		}
		while (strlen($array[$i]) > 138);
	}
	echo "\n";

	$calculator = new Calculator();

	switch ($digit)
	{
		case 1:
			echo "$array[0]+$array[1]=";
			echo $calculator->add($array[0], $array[1]);
			break;
			
		case 2:
			echo "$array[0]-$array[1]=";
			echo $calculator->substract($array[0], $array[1]);
			break;
			
		case 3:
			echo "$array[0]x$array[1]=";
			echo $calculator->multiply($array[0], $array[1]);
			break;
			
		case 4:
			echo "$array[0]:$array[1]=";
			echo $calculator->division($array[0], $array[1]);
			break;
			
		default:
			echo "Nie ma takiej opcji";
	}
	sleep(3);
}

?>