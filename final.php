<?php include 'database.php' ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Quizzer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>PHP Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>You're Done!</h2>
			<p>Congrats! You have completed the test</p>
			<p>Final Score: <?php echo $_SESSION['score'] ?></p>
			<a class="start" href="question.php?n=1">Try Again</a>
		</div>		
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2017, PHP Quizzer
		</div>
	</footer>
</body>
</html>