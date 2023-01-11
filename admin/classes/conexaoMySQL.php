<?php
	class conexaoMySQL
	{
		protected $servidor;
		protected $usuario;
		protected $senha;
		protected $banco;
		protected $conexao;
		protected $qry;
		protected $dados;
		protected $totalDados;
		
		
		public function __construct()
		{
			$this->servidor 	="localhost";
			$this->usuario		="root";
			$this->senha		="";
			$this->banco		="lojabre";
			self::conectar();
		}
		function conectar()
		{
	     	$this->conexao = mysqli_connect('localhost', 'root', '', 'lojabre');
			
			$this->banco  = mysqli_select_db($this->conexao, $this->banco);	
		}

		function executarSQL($sql)
		{
			$this->qry = mysqli_query($this->conexao, $sql);
			return $this->qry;
		}
		function listar($qr)
		{
			$this->dados= mysqli_fetch_assoc($qr);
			return $this->dados;
		}
		
		function contaDados($qry){
			$this->totalDados = mysqli_num_rows($qry);
			return $this->totalDados;
		}
		
		
	}
?>