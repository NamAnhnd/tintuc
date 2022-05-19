<?php 
	include "Models/Frontend/NewsModel.php";
	class NewsDetailController extends Controller{
		use NewsModel;
		public function index(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			//lấy một bản ghi
			$record = $this->fetch($id);
			$this->renderHTML("Views/Frontend/NewsDetailView.php",array("record"=>$record));
		}
	}
 ?>