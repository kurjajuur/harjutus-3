<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-3 - andmetüübid</title>
</head>

<body>
    <h2>Muutujad</h2>
    <?php
    $variable = 10;
    echo $variable;
    // Lisan veebilehitsejas parema loetavuse saamiseks reamurdmise elemendi:
    echo "<br>";
    $variable = 20;
    echo $variable;
	?>

	<h2>stringid</h2>
	<?php
		echo "2426";
		echo "<br>";
		echo "let's go";
		echo "<br>";
		echo 'mihkel ütles: "lähme koju"';
		echo "<br>";

		$number1 = "24";
		$number2 = "26";
		echo $number1 . $number2;
	?>

	<h2>Nimekirja väljastamine muutujate ja stringide abil</h2>
	<?php
		$student1 = "Kaspar";
		$student2 = "Syret";
		$student3 = "Fränk";
		$student4 = "Eve";
		$student5 = "Maile";

	?>

	<?php
		echo "<li>" . $student1 . "</li>";
		echo "<li>" . $student2 . "</li>";
		echo "<li>" . $student3 . "</li>";

	?>	

	<ul>
		<li><?php echo $student1; ?></li>
		<li><?php echo $student2; ?></li>
		<li><?php echo $student3; ?></li>
		<li><?php echo $student4; ?></li>
		<li><?php echo $student5; ?></li>
	</ul>

	<ul>
	<?php
	 echo "<li>$student1</li>
	 <li>$student3</li>
	 <li>$student5</li>";
	 ?>
	</ul>

	<?php
		$firstName = "Silja";
		$lastName = "Hagu";
		$fullName = $firstName . " " . $lastName;

		echo $fullName;
	?>


	<h2>Stringi interpolatsioon</h2>

	<?php
		$test = "Proovime";
		echo "$test kas testimine töötab";
		echo "<br>";
		echo "tere" . 15 . "tsau";
		echo "<br>";

		$age = "15";
		echo "Ma olen $age-e aastane";
	?>

	<?php
		$source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
		echo "<br>" . $source;

		$lower = strtolower($source);
		echo "<p>{$lower}</p>";

		$upper = strtoupper($source);
		echo "<p>{$upper}</p>";

		$upperCaseFirst = ucfirst($lower);
		echo "<p>{$upperCaseFirst}</p>";
		echo "<br>";

		echo strtolower(ucfirst($source));
		echo ucfirst(strtolower($source));
		echo ucfirst("väike algustäht");

		$example = "Hello   world";
		echo "<br>";
		echo "<br>";
		echo strlen($example);
		echo "<br>";
	?>


	<?php echo "See " . trim("   siin peaks olema     ") . " trim"; ?> 


	<h2>TÄisarvud</h2>
	<?php
		$arv1 = 5;
		$arv2 = 7;
		echo $arv1 * ($arv2 - 3);

		echo "<br>";
	?>

	<?php
	echo abs(-300);
	echo "<br>";?>

	<?php
    // Viis ruudus:
    echo pow(5, 2);
    echo "<br>";

    // Seitse kuubis:
    echo pow(7, 3);
    echo "<br>";

    // Kolm astmel seitse:
    echo pow(3, 7);
    echo "<br>";
?>

<?php
    // Ruutjuur 25-st:
    echo sqrt(25);
    echo "<br>";
?>
<?php
    // Suvaline number
    echo rand();
    echo "<br>";

    // Suvaline number vahemikus 7 - 22:
    echo rand(7, 22);
    echo "<br>";
    echo "<br>";
?>

<?php //Numbrite kasvatamine ja kahandamine
    $sample_nr = 45;
    $sample_nr = $sample_nr + 5; //liitmine
  	echo $sample_nr;
  	echo "<br>";
?>
<?php
    $sample_nr2 = 45;
    $sample_nr2 += 5; //sama mis eelmine
    echo $sample_nr2;
    echo "<br>";
?>
<?php
    $sample_nr2 = 45;
    $sample_nr2 -= 5; //lahutamine
    echo $sample_nr2;
    echo "<br>";
?>
<?php
    $sample_nr3 = 45;
    $sample_nr3 *= 5; //korrutamine
    echo $sample_nr3;
    echo "<br>";

    $sample_nr2 = 45;
    $sample_nr2 /= 5; //jagamine
    echo $sample_nr2;
    echo "<br>";
?>

 <?php //Numbri ja stringi liitmine
 //   echo 5 + "7 teksapüksi"; <-pole hea mõte liita 
?>
</body>
</html>