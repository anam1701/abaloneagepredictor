<html>
	<head>
	    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link type="text/css" rel="stylesheet" href="view/css/materialize.min.css"  media="screen,projection"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
	<body>
		<nav>
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo center">Masukkan Nilai K</a>
		      <ul id="nav-mobile" class="left hide-on-med-and-down">
		      	<li><a href="index.php?back=Back">Back</a></li>
		      </ul>
		    </div>
		</nav>

		<div class="container">
		<form method='post' action=''>
			<input type='number' name='angka' value="<?php echo $nilaiK; ?>">
			<input type='submit' name='setK' value='SET'>
		</form>
		</div>
	</body>
</html>
<!-- <html>
	<head></head>
	<body>
		<form method='get' action='index.php'>
			<input type='submit' name='back' value='Back'>
		</form>
		<h2> Masukkan Nilai K </h2>
		<form method='post' action=''>
			K : <input type='number' name='angka' value="<?php echo $nilaiK; ?>">
			<input type='submit' name='setK' value='SET'>
		</form>
	</body>
</html> -->