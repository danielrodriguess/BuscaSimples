<?php    
	class conexao {
		private $arrayconexao = array();
		protected $instacias = null;
		public function __set($name, $value){
			$this->arrayconexao[$name] = $value;
		}	
		function __construct($instacias = null){
			$this->instacias = $instacias;
			if ($this->instacias == null){
				$this->conecta();
			}
		}
		public function conecta(){
			try{
				$this->instacias = new PDO("mysql:host=localhost;dbname=sistemacarona",
				"root",
				"",
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			}catch (PDOException $e) {
				print "Error!: " . $e->getMessage() . "<br/>";
				die();
			}
		}
		public function desconecta(){
			$this->instacias = null;
		}
		public function paraselect($sql){
			$stmt = $this->instacias->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>