#!/usr/bin/php
<?PHP
	$stdin = new SplFileObject("php://stdin");
	$var = 1;
	while ($stdin->valid())
	{
		echo "Entrez un nombre: ";
		$var = $stdin->current();
		$var = explode("\n", $var);
		if (!$stdin->valid())
		{
			echo "^D\n";
			break;
		}
		if (!is_numeric($var[0]))
			echo "'$var[0]' n'est pas un chiffre\n";
		else
		{
			if (!($var[0] % 2))
				echo "Le chiffre $var[0] est Pair\n";
			else
				echo "Le chiffre $var[0] est Impair\n";
		}
		$stdin->next();
	}
?>