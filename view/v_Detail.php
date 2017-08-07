<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link type="text/css" rel="stylesheet" href="view/css/materialize.min.css"  media="screen,projection"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		<nav>
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo center">Detail Jarak Data Uji No-<?php echo $_GET['noData'];?></a>
		      <ul id="nav-mobile" class="left hide-on-med-and-down">
		      	<li><a href="index.php?back=Back">Back</a></li>
		      </ul>
		    </div>
		</nav>
		<table border="1">
			<th>No</th>
			<th>Panjang(cm)</th>
			<th>Lebar(cm)</th>
			<th>Tinggi(cm)</th>
			<th>Berat Total</th>
			<th>Berat Isi</th>
			<th>Berat Cankang</th>
			<th>Umur</th>
			<th>Jarak</th>
		<?php
			foreach($infoLengkap as $data){
				echo '<tr>';
				foreach ($data as $nilai){
					echo '<td>'.$nilai.'</td>';
				}
				echo '</tr>';
			}
			echo "</table>";
		?>
	</body>
</html>