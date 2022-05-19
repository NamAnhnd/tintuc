<?php 
	include "Models/Frontend/CategoryModel.php";
	class CategoryController extends Controller{
		use CategoryModel;
		public function index(){
			$data= $this->fetchAll();
			$this->renderHTML("Views/Frontend/CategoryView.php",array("data"=>$data));
		}
	}
 ?>