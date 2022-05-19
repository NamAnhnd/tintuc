<?php 
	include "Models/Frontend/NewsModel.php";
	class NewsCategoryController extends Controller{
		use NewsModel;
		public function index(){

		$pageSize = 3;
		$totalRecord = $this->totalRecord();
		$numPage = ceil($totalRecord/$pageSize);
		$p=isset($_GET["p"]) && is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) :0;
		$from = $p*$pageSize;

		$data = $this->fetchAll($from,$pageSize);
		$this->renderHTML("Views/Frontend/NewsCategoryView.php",array("data"=>$data,"numPage"=>$numPage));
	}
	}
 ?>