<html>
	<head>
	    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link type="text/css" rel="stylesheet" href="view/css/materialize.min.css"  media="screen,projection"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
	<body>
		<nav>
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo center">Tambah Data Uji</a>
		      <ul id="nav-mobile" class="left hide-on-med-and-down">
		      	<li><a href="index.php?back=Back">Back</a></li>
		      </ul>
		    </div>
		</nav>
		<div class="container">
		<form method='post' action=''>
			<table>
				<tr><td>Panjang(cm)			</td><td> <input type='text' name='1'></td></tr>
				<tr><td>Diameter(cm)	</td><td> <input type='text' name='2'></td></tr>
				<tr><td>Tinggi(cm)			</td><td> <input type='text' name='3'></td></tr>
				<tr><td>Residual sugar		</td><td> <input type='text' name='4'></td></tr>
				<tr><td>Chlorides			</td><td> <input type='text' name='5'></td></tr>
				<tr><td>Free sulfur dioxide	</td><td> <input type='text' name='6'></td></tr>
				<tr><td>Total sulfur dioxide</td><td> <input type='text' name='7'></td></tr>
				<tr><td>Density				</td><td> <input type='text' name='8'></td></tr>
				<tr><td>pH					</td><td> <input type='text' name='9'></td></tr>
				<tr><td>Sulphates			</td><td> <input type='text' name='10'></td></tr>
				<tr><td>Alcohol				</td><td> <input type='text' name='11'></td></tr>
				<tr><td>Umur				</td><td> <input type='text' name='quality'></td></tr>
			</table>
			<input type='submit' name='Add' value='Add' class="waves-effect waves-light btn">
		</form>
		<table>
		</table>
		</div>
	</body>
</html>