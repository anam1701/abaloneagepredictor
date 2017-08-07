<?php
	class m_KNN {
		
		public function setK($K){
			include 'connection.php';
			if ($K > count($this->getDataT()))
				$K = count($this->getDataT());
			else if ($K < 1)
				$K = 1;
			$mysqli->query("UPDATE k SET k= '$K'");
		}
		public function getK(){
			include 'connection.php';
			$data = $mysqli->query('SELECT * FROM k');
			$row = $data->fetch_assoc();
			return $row['k'];
		}
		
		public function getDataT(){
			include 'connection.php';
			$data = $mysqli->query('SELECT * FROM datatrining');
			$rows = array();
	
			while($row = $data->fetch_assoc()) {
				$rows[] = $row;
			}
			return $rows;
		}
		
		public function getDataU(){
			include 'connection.php';
			$data = $mysqli->query('SELECT * FROM datauji');
			$rows = array();
	
			while($row = $data->fetch_assoc()) {
				$rows[] = $row;
			}
			return $rows;
		}
		
		public function addDataUji($fitur1, $fitur2, $fitur3, $fitur4, $fitur5, $fitur6, $quality){
			include 'connection.php';
			$query = $mysqli->query("INSERT INTO datauji (`no`, `1`, `2`, `3`, `4`, `5`, `6`, `quality`, `prediksi`)
									VALUES (NULL,'$fitur1', '$fitur2', '$fitur3', '$fitur4', '$fitur5', '$fitur6', '$quality', '0')");
		}
		
		public function updateQuality(){
			include 'connection.php';
			foreach ($this->getDataU() as $DU){
				$aJarak = $this->arrayJarak($DU);
				sort($aJarak);
				
				
				$JarakTerdekat = $this->JarakTerdekat($aJarak);
				

				sort($JarakTerdekat);
				$modus = $this->modus($JarakTerdekat);
				
				$update = $mysqli->query("UPDATE datauji SET prediksi = '".$modus."' WHERE datauji.no = ".$DU['no']."");
			}
		}
		
		public function accuracy(){
			return ($this->trueData())/count($this->getDataU())*100;
		}
		
		public function trueData(){
			include 'connection.php';
			$jumlah = 0;
			foreach ($this->getDataU() as $DU){
				if ($DU['quality'] == $DU['prediksi'])
					$jumlah++;
			}
			return $jumlah;
		}
		
		public function arrayJarak($DU){
			$aJarak = array();
			foreach ($this->getDataT() as $DT){
				//Jarak Euclidian
				$jarak = sqrt(	pow($DU['1']-$DT['1'],2) + pow($DU['2']-$DT['2'],2) + 
								pow($DU['3']-$DT['3'],2) + pow($DU['4']-$DT['4'],2) + 
								pow($DU['5']-$DT['5'],2) + pow($DU['6']-$DT['6'],2)  
							);
				$aJarak[] = array($jarak, $DT['quality']);
			}
			return $aJarak;
		}
		
		private function JarakTerdekat($aJarak){
			$JarakTerdekat = array();
			$i = 0;
			while ($i < $this->getK()){
				$JarakTerdekat[] = array($aJarak[$i][1],$aJarak[$i][0]);
				$i++;
			}
			return $JarakTerdekat;
		}
		
		private function modus($JarakTerdekat){
			$modus 	= $JarakTerdekat[0][0];
			$max 	= 0;
			$counter= 1;
			for ($i = 1 ; $i < count($JarakTerdekat) ; $i++){
				if ($JarakTerdekat[$i][0] == $JarakTerdekat[$i-1][0]){
					$counter++;
				}
				else {
					if ($counter >= $max){
						$max = $counter;
						$modus = $JarakTerdekat[$i-1][0];
					}
					$counter = 1;
				}
			}
			return $modus;
		}
		
		public function infoLengkap($noData){
			$baris;
			foreach ($this->getDataU() as $data){
				if ($data['no'] == $noData)
					$baris = $data; 
			}
			$arrayJarak = $this->arrayJarak($baris);
			$dataT = $this->getDataT();
			
			$hasil = array();
			for ($i=0 ; $i<count($dataT) ; $i++ ){
				$temp = array();
				foreach ($dataT[$i] as $data){
					$temp[] = $data;
				}
				$temp[] = $arrayJarak[$i][0];
				$hasil[] = $temp;
			}
			return $hasil;
		}
	}
	//$knn = new m_KNN();
	//$knn->getK();
?>
