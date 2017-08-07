<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link type="text/css" rel="stylesheet" href="view/css/materialize.min.css"  media="screen,projection"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		<nav>
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo center">Data Training Umur Abalone</a>
		      <ul id="nav-mobile" class="left hide-on-med-and-down">
		      	<li><a href="index.php?back=Back">Back</a></li>
		      </ul>
		    </div>
		</nav>

		<div class="container">
			<table class="striped">
		        <thead>
		          <tr>
		              <th>No</th>
		              <th>Panjang (cm)</th>
		              <th>Diameter (cm)</th>
		              <th>Tinggi (cm)</th>
		              <th>Berat Kotor</th>
		              <th>Berat Isi</th>
		              <th>Berat Cangkang</th>
		              <th>Umur</th>
		          </tr>
		        </thead>
		        <tbody>
					<?php
						foreach($datatraining as $data){
							echo '<tr>';
							foreach ($data as $nilai){
								echo '<td>'.$nilai.'</td>';
							}
							echo '</tr>';
						}
						echo "</table>";
					?>
		        </tbody>
	      </table>
	      </div>
	</body>
</html>