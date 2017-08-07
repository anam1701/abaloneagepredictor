<?php
	include_once("model/m_KNN.php");

	class c_KNN {
		public $model;

		public function __construct(){
			$this->model = new m_KNN();
		}

		public function invoke(){
			if (isset($_GET['datatraining'])){
				$datatraining = $this->model->getDataT();
				include 'view/v_DataTraining.php';
			}
			
			else if (isset($_GET['k'])){
				$nilaiK = $this->model->getK();
				include 'view/v_SetK.php';
				if (isset($_POST['setK'])){
					$this->model->setK($_POST['angka']);
					header('Location:index.php');
				}
			}
			
			else if (isset($_GET['akurasi'])){
				$nilaiK = $this->model->getK();
				$jumlahdata 	= count($this->model->getDataU());
				$jumlahbenar 	= $this->model->trueData();
				$accuracy 		= $this->model->accuracy();
				include 'view/v_Accuracy.php';
			}
			
			else if (isset($_GET['tambah'])){
				include 'view/v_Tambah.php';
				if (isset($_POST['Add'])){
					$this->model->addDataUji(	$_POST['1'], $_POST['2'], $_POST['3'], 
												$_POST['4'], $_POST['5'], $_POST['6'], $_POST['quality']
											);
					header('Location:index.php');
				}
			}
			
			else if (isset($_GET['detail'])){
				$infoLengkap = $this->model->infoLengkap($_GET['noData']);
				include 'view/v_Detail.php';
			}
			
			else {
				$this->model->updateQuality();
				$datauji = $this->model->getDataU();
				include 'view/v_DataUji.php';
			}
		}
	}
?>