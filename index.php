<link rel="stylesheet" href="style.css">
<body>
<section>
<?php

echo '<h1>Exercice retour vers le futur</h1>';

$presentTime = new DateTime('21-10-2015 16:06');
$destinationTime = new DateTime('21-10-2015 16:29');


echo $presentTime->format('M-d-Y g:i A');
echo '<br>';
echo $destinationTime->format('M-d-Y g:i A');
echo '<br>';

$origin = new DateTime('21-10-2015 16:06');
$target = new DateTime('21-10-2015 16:29');
$interval = $origin->diff($target);
echo '<h2>Temps entre les deux dates :</h2>';
echo $interval->format('%H:%I:%S');

?>
</section>
</body>
