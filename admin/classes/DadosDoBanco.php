<?php
include_once("conexaoMySQL.php");


class DadosCategoria extends conexaoMySQL{
	private $id, $categoria, $ordem_categoria, $activo_categoria;
	
	/*Modificar o valor do id*/
	public function setId($id){
		$this->id = $id;
	}

	/*Retorna o valor do id*/
	public function getId(){
		return $this-> id;
	}
	
	public function getCategoria(){
		return $this-> categoria;
	}
	
	public function getOrdemCategoria(){
		return $this-> ordem_categoria;
	}
	public function getAtivo(){
		return $this-> activo_categoria;
	}

public function mostrarCategoria(){
	$sql= "SELECT * FROM categorias WHERE id_categoria= '$this->id'";
	$qry = self::executarSQL($sql);
	$linha = self::listar($qry);
	
	$this->id 				= $linha["id_categoria"];
	$this->categoria  		= $linha["categoria"];
	$this->ordem_categoria  = $linha["ordem_categoria"];
	$this->activo_categoria  = $linha["activo_categoria"];
}

public function comboCategoria($id){
	$sql= "SELECT * FROM categorias";
	$qry = self::executarSQL($sql);

	while ($linha = self::listar($qry)){
		if($id==$linha["id_categoria"]){
			$selecionado = "selected = 'selected'";
		} else{
			$selecionado = "";
		}
		echo "<option value=$linha[id_categoria] $selecionado>$linha[categoria] </option>\n";
	}
}

public function totalRegistos($sql){
	$qry=self::executarSQL($sql);
	$total=self::contaDados($qry);

	return $total;
}


public function verCategorias($sql, $i){
	$qry = mysqli_query($this->conexao, $sql);
	while ($i=mysqli_fetch_array($qry)) {
		$this->id= $i["id_categoria"];
		$this->categoria = $i["categoria"];
		$this->ordem_categoria = $i["ordem_categoria"];
	}
}
}
class DadosSubcategoria extends conexaoMySQL{
	private $id, $categoria, $ordem_categoria, $activo_categoria;
	
	/*Modificar o valor do id*/
	public function setId($id){
		$this->id = $id;
	}

	/*Retorna o valor do id*/
	public function getId(){
		return $this-> id;
	}
	
	public function getCategoria(){
		return $this-> subcategoria;
	}
	
	public function getOrdemCategoria(){
		return $this-> ordem_subcategoria;
	}
	public function getAtivo(){
		return $this-> activo_subcategoria;
	}

public function mostrarSubcategoria(){
	$sql= "SELECT * FROM subcategorias WHERE id_subcategorias= '$this->id'";
	$qry = self::executarSQL($sql);
	$linha = self::listar($qry);
	
	$this->id 				= $linha["id_subcategorias"];
	$this->subcategoria  		= $linha["subcategoria"];
	$this->ordem_subcategoria  = $linha["ordem_subcategoria"];
	$this->activo_subcategoria  = $linha["activo_subcategoria"];
}

public function comboSubcategoria($id){
	$sql= "SELECT * FROM subcategorias";
	$qry = self::executarSQL($sql);

	while ($linha = self::listar($qry)){
		if($id==$linha["id_subcategorias"]){
			$selecionado = "selected = 'selected'";
		} else{
			$selecionado = "";
		}
		echo "<option value=$linha[id_subcategorias] $selecionado>$linha[subcategoria] </option>\n";
	}
}
}

class DadosConsola extends conexaoMySQL{
	private $id, $nome, $ordem_consolas, $activo_consolas;
	
	/*Modificar o valor do id*/
	public function setId($id){
		$this->id = $id;
	}

	/*Retorna o valor do id*/
	public function getId(){
		return $this-> id;
	}
	
	public function getCategoria(){
		return $this-> nome;
	}
	
	public function getOrdemCategoria(){
		return $this-> ordem_consolas;
	}
	public function getAtivo(){
		return $this-> activo_consolas;
	}

public function mostrarConsolas(){
	$sql= "SELECT * FROM consolas WHERE id_consolas= '$this->id'";
	$qry = self::executarSQL($sql);
	$linha = self::listar($qry);
	
	$this->id 				= $linha["id_consolas"];
	$this->nome  		    = $linha["nome"];
	$this->ordem_consolas   = $linha["ordem_consolas"];
	$this->activo_consolas  = $linha["activo_consolas"];
}

public function comboConsolas($id){
	$sql= "SELECT * FROM consolas";
	$qry = self::executarSQL($sql);

	while ($linha = self::listar($qry)){
		if($id==$linha["id_consolas"]){
			$selecionado = "selected = 'selected'";
		} else{
			$selecionado = "";
		}
		echo "<option value=$linha[id_consolas] $selecionado>$linha[nome] </option>\n";
	}
}
	}

	class DadosGenero extends conexaoMySQL{
		private $id, $generos, $ordem_genero, $generos_activos;
		
		/*Modificar o valor do id*/
		public function setId($id){
			$this->id = $id;
		}
	
		/*Retorna o valor do id*/
		public function getId(){
			return $this-> id;
		}
		
		public function getCategoria(){
			return $this-> generos;
		}
		
		public function getOrdemCategoria(){
			return $this-> ordem_genero;
		}
		public function getAtivo(){
			return $this-> generos_activos;
		}
	
	public function mostrarGenero(){
		$sql= "SELECT * FROM género WHERE id_genero= '$this->id'";
		$qry = self::executarSQL($sql);
		$linha = self::listar($qry);
		
		$this->id 				= $linha["id_genero"];
		$this->generos  		= $linha["generos"];
		$this->ordem_genero     = $linha["ordem_genero"];
		$this->generos_activos  = $linha["generos_activos"];
	}

	public function comboGenero($id){
		$sql= "SELECT * FROM género";
		$qry = self::executarSQL($sql);
	
		while ($linha = self::listar($qry)){
			if($id==$linha["id_genero"]){
				$selecionado = "selected = 'selected'";
			} else{
				$selecionado = "";
			}
			echo "<option value=$linha[id_genero] $selecionado>$linha[generos] </option>\n";
		}
	}
}

class DadosBanner extends conexaoMySQL{
	private $id, $generos, $ordem_genero, $generos_activos;
	
	/*Modificar o valor do id*/
	public function setId($id){
		$this->id = $id;
	}

	/*Retorna o valor do id*/
	public function getId(){
		return $this-> id;
	}
	
	public function getTitulo(){
		return $this-> titulo_banner;
	}
	
	public function getAlt(){
		return $this-> alt;
	}
	public function getUrl(){
		return $this-> url_banner;
	}
	public function getActivo(){
		return $this-> activo_banner;
	}
	public function getImagem(){
		return $this-> imagem_banner;
	}

public function mostrarBanner(){
	$sql= "SELECT * FROM banner WHERE id_banner= '$this->id'";
	$qry = self::executarSQL($sql);
	$linha = self::listar($qry);
	
	$this->id 				= $linha["id_banner"];
	$this->titulo_banner  	= $linha["titulo_banner"];
	$this->alt              = $linha["alt"];
	$this->url_banner       = $linha["url_banner"];
	$this->activo_banner    = $linha["activo_banner"];
	$this->imagem_banner    = $linha["imagem_banner"];
}
}

class DadosUtilizador extends conexaoMySQL{
	private $id, $nome, $email, $login, $password;
	
	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this-> id;
	}
	
	public function getNome(){
		return $this-> nome;
	}
	public function getEmail(){
		return $this-> email;
	}
	public function getLogin(){
		return $this-> login;
	}
	public function getPass(){
		return $this-> password;
	}

public function mostrarAdministrador(){
	$sql= "SELECT * FROM utilizadores WHERE id_utilizador= '$this->id'";
	$qry = self::executarSQL($sql);
	$linha = self::listar($qry);
	
	$this->id 			= $linha["id_utilizador"];
	$this->nome  		= $linha["nome_utilizador"];
	$this->email        = $linha["email"];
	$this->login        = $linha["login"];
	$this->password     = $linha["password"];
}
}

class DadosProdutos extends conexaoMySQL{
	private $id, $nome_produto, $imagem_produto, $imagem_url, $preco;
	
	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this-> id;
	}

	public function getNome_produto(){
		return $this-> nome_produto;
	}
	
	public function getImagem(){
		return $this-> imagem_produto;
	}
	public function getUrl(){
		return $this-> imagem_url;
	}
	public function getPreco(){
		return $this-> preco;
	}
	

public function mostrarProdutos(){
	$sql= "SELECT * FROM produtos WHERE id_produto= '$this->id'";
	$qry = self::executarSQL($sql);
	$linha = self::listar($qry);
	
	$this->id         = $linha["id_produto"];
	$this->nome_produto		  = $linha["nome"];
	$this->imagem_url = $linha["imagem_url"];
	$this->preco      = $linha["preco"];

}
}

?>
