<?php 
	//controller sử dụng để điều phối view
	class Controller{
		//Khai báo biến $fileLayout để lưu đường dẫn của file template
		public $fileLayout = NULL;
		//Khai báo biến $view để lưu dữ liệu của view trong mvs
		public $view=NULL;
		public function renderHTML($fileName, $data = NULL){
			//Nếu $data không bằng NULL thì extract dữ liệu
			if($data!=NULL)
					extract($data);
			//Nếu tồn tại đường dẫn $fileName thì include nó
			// if($this->fileLayout!=NULL && file_exists($fileLayout))
			// {
				if(file_exists($fileName)){
				//---
				//đọc nội dung của đường đãn tại biến $fileName
				ob_start();
				include $fileName;
				$content = ob_get_contents();
				ob_get_clean();
				//Gán dữ liệu vào biến view
				$this->view = $content;
				//nếu đường dẫn tại biến $fileLayout có tồn tại thì xuất template ra, nếu khoong thì chỉ xuất view trong mvc
				if($this->fileLayout != NULL && file_exists($this->fileLayout))
					include $this->fileLayout;
				else
					echo $this->view;
				//---
			// }
				// else {
				// 	//load chính view đó
				// if(file_exists($fileName))
				// 	include $fileName;
			}
		}
		//Hàm xác thực đăng nhập
		public function authentication(){
			if($_SESSION["email"]==NULL)
					header('location:index.php?area=Backend&controller=Login');
		}
	}
 ?>