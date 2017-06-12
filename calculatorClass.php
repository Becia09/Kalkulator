<?php
	
	class Calculator
	{
		public function add($a, $b)
		{
			return $a + $b;
		}
		public function substract($a, $b)
		{
			return $a - $b;
		}
		public function multiply($a, $b)
		{
			return $a * $b;
		}
		public function division($a, $b)
		{
			if ($b==0)
				return "nie dziel przez zero !";
			return $a / $b;
		}
	}

?>