<?php  
class database{

	//DB Params
	private $dns = "mysql:host=bgq2lmwjcnixl0ybr080-mysql.services.clever-cloud.com;dbname=bgq2lmwjcnixl0ybr080";
	private $username = "uthgimfoskmma3e1";
	private $password = "cpx4KF0ZlLbkni7WXbfK";
	private $conn;

	//DB Connect
	public function connect(){
		$this->conn = null;
		try{
			$this->conn = new PDO($this->dns,$this->username,$this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $e){
			echo "Connection failed: ".$e->getMessage();
		}

		return $this->conn;
	}
}
?>

