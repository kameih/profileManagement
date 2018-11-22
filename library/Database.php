<?php
/**
* Database by Jai
*/	

class Database{

		
		private $host=DB_HOST;
		private $user=DB_USER;
		private $pass=DB_PASSWORD;
		private $dbname=DB_DATABASE;
		private $conn;
		
		 public function __construct()
		{
			if (session_status() == PHP_SESSION_NONE) {
							session_start();
							}

			$this->conn = mysqli_connect($this->host, $this->user, $this->pass,$this->dbname);

			if ($this->conn->connect_error) {
				die("Connection failed: " . $this->conn->connect_error);
			} 
					

		}

		public function selectAll($table, $data1=null, $data2=null)
		{
			if($data1!=null && $data2==null)
			{
				$query="SELECT * FROM $table WHERE email='$data1'";
			}
			elseif($data1!=null && $data2!=null){
				$query="SELECT * FROM $table WHERE email='$data1' AND id='$data2'";
			}
			else
				{
					$query="SELECT * FROM $table";
				}
			$result=mysqli_query($this->conn,$query);
			$data = array();
			while($row = mysqli_fetch_assoc($result)){
					array_push($data, $row);
				}
			$obj = json_decode (json_encode ($data), FALSE);
			return $obj;

		}

		public function insertFieldData($field_data, $tablename)
		{
			
		    $columns = implode(", ",array_keys($field_data));

		    $escaped_values = array_map(array($this->conn,'real_escape_string'), array_values($field_data));
		    foreach ($escaped_values as $idx=>$data) $escaped_values[$idx] = "'".$data."'";	    
		    $values  = implode(", ", $escaped_values);
		    $query = "INSERT INTO $tablename ($columns) VALUES ($values)";
		    mysqli_query($this->conn, $query) or die(mysqli_query());
		    mysqli_close($this->conn);
		}

		public function validateUsername($username, $password, $tablename, $userid=null)
		{
			if($userid!=null)
			{
				$query="SELECT * FROM $tablename WHERE username='$username' AND password='$password' AND id!='$userid'";
			}
			else
			{
				$query="SELECT * FROM $tablename WHERE username='$username' AND password='$password'";
			}
			
			// $result=$this->conn->query($query);
			// $row = $result->fetch_array(MYSQLI_NUM);
			$result=mysqli_query($this->conn,$query);
			$row = mysqli_fetch_assoc($result);
			

			return $row;
		}

		public function emailExist($email,$tablename, $userid=null)
		{
			if($userid!=null)
			{
				$query="SELECT * FROM $tablename WHERE email='$email' AND id!='$userid'";
			}
			else
			{
				$query="SELECT * FROM $tablename WHERE email='$email'";
			}
			
			$result=mysqli_query($this->conn,$query);
			$row = mysqli_fetch_assoc($result);
			return $row;
			// print_r($row);
			// return false;
			// die;

		}
		public function loginUser($email, $password, $tablename)
		{
			
			if (session_status() == PHP_SESSION_NONE) {
							session_start();
							}

			$query="SELECT * FROM $tablename WHERE email='$email' AND password='$password'";
			$result=$this->conn->query($query);
			$row = $result->fetch_array(MYSQLI_NUM);
			//return $row;
			if($row)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function deleteAll($id,$tablename)
		{
			$query="DELETE FROM $tablename WHERE id='$id'";
			$result=$this->conn->query($query);
			if($result)
			{
				return true;
			}
		}

		public function updateAll($id,$data,$tablename,$column=null)
		{
			
			$updatearr=array();
			foreach($data as $key=>$value)
			{
				if(is_numeric($value))
				{
					$col_data=$key."=".$value;
				}
				else
				{
					$col_data=$key."="."'".mysqli_real_escape_string($this->conn,$value)."'";
				}
				array_push($updatearr, $col_data);
			}
			
			// print_r($updatearr);
			// die;
			$col_value= implode(", ",$updatearr);

			$query="UPDATE $tablename ";
			$query.="SET ".$col_value." WHERE id='$id' ";
			$result=mysqli_query($this->conn, $query);
			if($result)
			{
				return true;
			}
			
			else
			{
				return false;
			}
			
		}



// class end
}
