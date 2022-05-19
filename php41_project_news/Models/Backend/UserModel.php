<?php 
	trait UserModel{
		//lấy danh sách các bản ghi: từ bẩn ghi nào đến bản ghi nào
		public function fetchAll($from, $pageSize){
			$conn = Connection::getInstance();
			//thực hiện truy vấn
			$query = $conn->query("select * from tbl_user order by id desc limit $from, $pageSize");
			//lấy tất cả kết quả trả về
			return $query->fetchAll();

		}
		//tính tổng số lượng bản ghi
		public function totalRecord(){
			$conn = Connection::getInstance();
			//thực hiện truy vấn
			$query = $conn->query("select id from tbl_user");
			//lấy tất cả kết quả trả về
			return $query->rowCount();
		}
		//lấy một bản ghi
		public function fetch($id){
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//chuản bị truy vấn
			$query = $conn->prepare("select * from tbl_user where id=:id");
			//thực hiện truy vấn
			$query->execute(array("id"=>$id));
			//trả về tổng số lượng bản ghi
			return $query->Fetch();
		}
		public function Update($id){
			
			$name=$_POST["name"];
			$password=$_POST["password"];
			//update bản ghi
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//chuản bị truy vấn
			$query = $conn->prepare("Update tbl_user set name=:name where id=:id ");
			//thực hiện truy vấn
			$query->execute(array("id"=>$id,"name"=>$name));

			//nếu password không rỗng thì update password
			if($password != ""){
				//mã hóa password bằng hàm md5
				$password = md5($password);
				//update trong password
				//chuẩn bị truy vấn
				$query = $conn->prepare("update tbl_user set password=:pass where id=:id");
				//thực hiện truy vấn
				$query->execute(array("id"=>$id,"pass"=>$password));
			}
		}
			public function Insert(){
			
			$name=$_POST["name"];
			$password=$_POST["password"];
			$password = md5($password);
			$email=$_POST["email"];
			//insert bản ghi
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//chuản bị truy vấn
			$query = $conn->prepare("insert into tbl_user set name=:name, email=:email, password=:password ");
			//thực hiện truy vấn
			$query->execute(array("name"=>$name,"email"=>$email,"password"=>$password));

		}
		public function deleteUser($id){
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//chuản bị truy vấn
			$query = $conn->prepare("delete from tbl_user where id=:id ");
			//thực hiện truy vấn
			$query->execute(array("id"=>$id));
		}
	}
 ?>