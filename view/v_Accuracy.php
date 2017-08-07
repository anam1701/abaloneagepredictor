<html>
	<head>
	    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link type="text/css" rel="stylesheet" href="view/css/materialize.min.css"  media="screen,projection"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
	<body>
		<nav>
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo center">Menghitung Akurasi Metode K-NN</a>
		      <ul id="nav-mobile" class="left hide-on-med-and-down">
		      	<li><a href="index.php?back=Back">Back</a></li>
		      </ul>
		    </div>
		</nav>
		<div class="container center">
			<?php echo "<br><br><br>K = $nilaiK <br>
						Jumlah Data	Uji = $jumlahdata <br>
						Jumlah Data Benar = $jumlahbenar <br>
						Nilai Keakuratan = $accuracy%" ?> 
		</div>
	</body>
</html>