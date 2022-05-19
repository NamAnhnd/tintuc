<?php 
//tao biến $area để lưu thư mục Frontend or Backend
	$area = "Frontend";
	//Nếu biến area có tồn tại trên url thì lấy nó
	$area = isset($_GET["area"]) ? $_GET["area"]: $area;
	//Lấy biến acction truyền từ url, nếu k có gán mặc định là index
	$action=isset($_GET["action"]) ? $_GET["action"]: "index";
	//lấy biến controller truyền từ url, nếu k có gán mặc định là HomenController
	//hàm ucfirst để in hoa chữ đầu tiên
	$controller = isset($_GET["controller"]) ? ucfirst($_GET["controller"]."controller"):"HomeController";
	//Đường dẫn của filecontroller
	$fileController = "Controllers/$area/$controller.php";
	
	//kiểm tra xem file có tồn tại k, nếu có thì include file
		if(file_exists($fileController)){

			include $fileController;
			//kiểm tra xem class có tồn tại k, nếu có tồn tại thì khởi tại object
			if(class_exists($controller)){
				$obj = new $controller();
				$obj->$action();
			}
			else
				die("class not exists");
		}
 ?>