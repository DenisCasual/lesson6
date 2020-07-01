<?php

	function calc($a, $b, $operation)
	{
		$a = intval($a);
		$b = intval($b);
		
		if ($operation == '+')
			$c = $a + $b;
		elseif ($operation == '-')
			$c = $a - $b;
		elseif ($operation == '*')
			$c = $a * $b;
		elseif ($operation == '/')
		{
			if ($b == 0)
				return 'Ошибка! Делить на 0 нельзя.';
			else
				$c = $a / $b;
		}
		else
			return 'Ошибка!';
		
		return $a .' '. $operation .' '. $b .' = '. $c;
	}

	
	if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['operation']))
		echo calc($_POST['a'], $_POST['b'], $_POST['operation']);
	
	echo '<html>';
	echo '<head>';
	echo '<title>Калькулятор</title>';
	echo '</head>';
	echo '<body>';
	echo '<form action="" method="post">';
	echo '<input type="text" name="a" size="2" value="0" style="width: 100px;
    height: 20px;">';
	echo '<input type="text" name="b" size="2" value="0"style="width: 100px;
    height: 20px;"><br>';
	echo '<input type="submit" value="+" name="operation" style="width: 100px;
    height: 100px;"/>';
	echo '<input type="submit" value="-" name="operation" style="width: 100px;
    height: 100px;"/>';
	echo '<input type="submit" value="/" name="operation" style="width: 100px;
    height: 100px;"/>';
	echo '<input type="submit" value="* " name="operation" style="width: 100px;
    height: 100px;"/>';
	echo '</form>';

?>