<!DOCTYPE HTML>
<html lang="pl">
<head> 
	<meta charset="utf-8" />
	<title> Wynik </title>
</head>

<body> 
<h2>Oto moje wyliczenia: <br/></h2>
<?php
$day = $_POST["day"];
$month = $_POST["month"];
$year = $_POST["year"];

if (@checkdate($month, $day, $year) && $year<2037 && $year>1902)
{
	$data = date('N', mktime(0, 0, 0, $month, $day, $year));
	$czas = floor((time() - mktime(0, 0, 0, $month, $day, $year))/60/60/24);

	switch ($data)
	{
		case 1: $dzien = "w poniedziałek"; break;
		case 2: $dzien = "we wtorek"; break;
		case 3: $dzien = "w środę"; break;
		case 4: $dzien = "w czwartek"; break;
		case 5: $dzien = "w piątek"; break;
		case 6: $dzien = "w sobotę"; break;
		case 7: $dzien = "w niedzielę"; break;
	}
	if ($czas>=0)
	{
	    echo "OOO! Urodziłeś(aś) się $dzien. Od Twoich narodzin minęło $czas dni. <br/> Miłego dnia! :)";
	    echo "<br/><br/><a href=index.php>Powrót do strony głównej</a>";
	}
	else
	{
		$czas2 = -$czas;
		echo "OOO, skoro tak, to urodzisz się w $dzien. Do Twoich urodzin pozostało $czas2 dni. <br/> Miłego dnia! :)";
		echo "<br/><br/><a href=index.php>Powrót do strony głównej</a>";
	}
}
else 
{
	echo "Niestety, z tych danych nie jestem w stanie nic policzyć!";
    echo "<br/><br/><a href=index.php>Powrót do strony głównej</a>";
}
?>
</body>
</html>