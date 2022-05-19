<?php 
	include "Models/Frontend/HotNewsModel.php";
	class HotNewsController extends Controller{
		use HotNewsModel;
		public function index(){
			$data=$this->fetchAll();
			$this->renderHTML("Views/Frontend/HotNewsView.php",array("data"=>$data));

		}
	}
 ?>