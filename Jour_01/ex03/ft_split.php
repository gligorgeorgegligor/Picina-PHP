#!/usr/bin/php
<?php

	function ft_split($str)
	{
		$array = explode(" ", $str);
		foreach ($array as $i => $values)
		{
			if (!$array[$i])
				unset($array[$i]);
		}
		sort($array);
		return (array_values($array));
	}

?>