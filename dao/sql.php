<?php
//criação da classe
	class Sql extends PDO{ //a CLASSE EXTENDE DA CLASSE PDO. Tudo que o PDO já faz, essa classe já sabe fazer. Tem acesso as info
		private $conn;  //definindo a variável de conexão como private.
		
		//conexão automática com o banco de dados após a instaciação (new)
		public function __construct(){
			$this->conn = new PDO("mysql:host=localhost;dbname=app3", "root", "");
		}

		private function setParams($statement, $parameters = array()){
			foreach ($parameters as $key => $value){
				$this->setParam($statement, $key, $value);
			}
		}
		
		private function setParam($statement, $key, $value){
			$statement->bindParam($key, $value);
		}
		
		//execução de comandos
		public function query($rawQuery, $params = array()){  
			$stmt = $this->conn->prepare($rawQuery); 
			$this->setParams($stmt, $params);
			$stmt->execute();
			return $stmt;
		}
		
		public function select($rawQuery, $params = array()){   //:array
			$stmt = $this->query($rawQuery, $params);
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>