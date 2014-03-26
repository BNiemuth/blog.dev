<html>
<head>
	<title>Roll Dice!</title>
</head>
<body>
<?php 

	<?=	echo "Your roll was "$random;?><br><?
	<?= echo "Your guess was "$guess;
	
	<?php if ($random == $guess); ?>
	<h1>You guessed correctly!<h1>
		<?php else ?>
		<h1>Try again<h1>
?>
</body>
</html>