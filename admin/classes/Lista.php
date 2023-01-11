
<?php
	


	include_once("Paginacao.php");
	
	class Lista extends Paginacao{ /*esta classe vai herdar da Paginacao*/
		private $strNumPagina, $strPaginas, $strUrl; /*criação de 3 atributos*/
		
		public function setNumPagina($valor){ /*métodos para alterar os valores*/
			$this->strNumPagina = $valor;
		}
		
		public function setUrl($valor){
			$this->strUrl = $valor;
		}
		
		public function getPaginas(){
			return $this-> strNumPagina;
		}
		
		public function listaCategoria(){
			/*Faz a consulta de tudo que está dentro da tabela categorias*/
			$sql = "SELECT * FROM categorias";
			$this->setParametro($this->strNumPagina);
			/*Qual o arquivo que ele vai chamar*/
			$this->setFileName($this->strUrl);
			/*Máximo de registos por tela e o resto vai fazer a paginação*/
			$this->setInfoMaxPag(10);
			/*Máximo de links por tela tipo 1 2 3 4 5 6 7 8 9...*/
			$this->setMaximoLinks(50);
			$this->setSQL($sql);
			
			self::iniciaPaginacao();
			/*Inicia o contador*/
			$cont = 1;
			
			/*Laço de repetição*/
			while ($linha = self::results()){
				/*Incrementa o contador*/
				$cont++;
				echo "<tr>
				<td> $linha[id_categoria] </td>
				<td> $linha[categoria] </td>
				<td> $linha[activo_categoria] </td>
				<td> <a href='index.php?link=3&acao=Alterar&id=$linha[id_categoria]'> <img src='imagens/alterar.gif' border='0' /></a> </td>
				<td> <a href='index.php?link=3&acao=Excluir&id=$linha[id_categoria]'> <img src='imagens/excluir.gif' border='0' /></a> </td>		
				</tr>";
				
				self::setContador($cont);
			}		
			
		}
		
		public function listaSubcategoria(){
			$sql = "SELECT * FROM Subcategorias";
			$this->setParametro($this->strNumPagina);
			$this->setFileName($this->strUrl);
			$this->setInfoMaxPag(20);
			$this->setMaximoLinks(50);
			$this->setSQL($sql);
			
			self::iniciaPaginacao();
			$cont = 0;
			
			while ($linha = self::results()){
				$cont++;
				echo "
				
				<tr>
				<td> $linha[id_subcategorias] </td>
				<td> $linha[subcategoria] </td>
				<td> $linha[activo_subcategoria] </td>
				<td> <a href='index.php?link=5&acao=Alterar&id=$linha[id_subcategorias]'> <img src='imagens/alterar.gif' border='0' /></a> </td>
				<td> <a href='index.php?link=5&acao=Excluir&id=$linha[id_subcategorias]'> <img src='imagens/excluir.gif' border='0' /></a> </td>		
				</tr>
				
				
				";
				
				self::setContador($cont);
			}		
			
		}
		
		public function listaConsolas(){
			$sql = "SELECT * FROM consolas";
			$this->setParametro($this->strNumPagina);
			$this->setFileName($this->strUrl);
			$this->setInfoMaxPag(10);
			$this->setMaximoLinks(50);
			$this->setSQL($sql);
			
			self::iniciaPaginacao();
			$cont = 0;
			
			while ($linha = self::results()){
				$cont++;
				echo "
				
				<tr>
				<td> $linha[id_consolas] </td>
				<td> $linha[nome] </td>
				<td> $linha[activo_consolas] </td>
				<td> <a href='index.php?link=7&acao=Alterar&id=$linha[id_consolas]'> <img src='imagens/alterar.gif' border='0' /></a> </td>
				<td> <a href='index.php?link=7&acao=Excluir&id=$linha[id_consolas]'> <img src='imagens/excluir.gif' border='0' /></a> </td>		
				</tr>
				
				
				";
				
				self::setContador($cont);
			}		
			
		}
		
		public function listaGenero(){
			$sql = "SELECT * FROM género ";
			$this->setParametro($this->strNumPagina);
			$this->setFileName($this->strUrl);
			$this->setInfoMaxPag(10);
			$this->setMaximoLinks(50);
			$this->setSQL($sql);
			
			self::iniciaPaginacao();
			$cont = 0;
			
			while ($linha = self::results()){
				$cont++;
				echo "<tr>
				<td> $linha[id_genero] </td>
				<td> $linha[generos] </td>
				<td> $linha[generos_activos] </td>
				<td> <a href='index.php?link=9&acao=Alterar&id=$linha[id_genero]'> <img src='imagens/alterar.gif' border='0' /></a> </td>
				<td> <a href='index.php?link=9&acao=Excluir&id=$linha[id_genero]'> <img src='imagens/excluir.gif' border='0' /></a> </td>		
				</tr>
				
				
				";
				
				self::setContador($cont);
			}		
			
		}

		public function listaBanner(){
			$sql = "SELECT * FROM banner ";
			$this->setParametro($this->strNumPagina);
			$this->setFileName($this->strUrl);
			$this->setInfoMaxPag(10);
			$this->setMaximoLinks(50);
			$this->setSQL($sql);
			
			self::iniciaPaginacao();
			$cont = 0;
			
			while ($linha = self::results()){
				$cont++;
				echo "
				
				<tr>
				<td> $linha[id_banner] </td>
				<td> $linha[titulo_banner] </td>
				<td> $linha[activo_banner] </td>
				<td> <a href='index.php?link=11&acao=Alterar&id=$linha[id_banner]'> <img src='imagens/alterar.gif' border='0' /></a> </td>
				<td> <a href='index.php?link=11&acao=Excluir&id=$linha[id_banner]'> <img src='imagens/excluir.gif' border='0' /></a> </td>		
				</tr>
				
				
				";
				
				self::setContador($cont);
			}		
			
		}

		public function listaAdministradores(){
			$sql = "SELECT * FROM utilizadores ";
			$this->setParametro($this->strNumPagina);
			$this->setFileName($this->strUrl);
			$this->setInfoMaxPag(10);
			$this->setMaximoLinks(50);
			$this->setSQL($sql);
			
			self::iniciaPaginacao();
			$cont = 0;
			
			while ($linha = self::results()){
				$cont++;
				echo "
				
				<tr>
				
				<td> $linha[id_utilizador] </td>
				<td> $linha[nome_utilizador] </td>
				<td> $linha[email] </td>
				<td> $linha[login] </td>
				<td> <a href='index.php?link=13&acao=Alterar&id=$linha[id_utilizador]'> <img src='imagens/alterar.gif' border='0' /></a> </td>
				<td> <a href='index.php?link=13&acao=Excluir&id=$linha[id_utilizador]'> <img src='imagens/excluir.gif' border='0' /></a> </td>		
				</tr>
				
				
				";
				
				self::setContador($cont);
			}		
			
		}

		public function listaProdutos(){
			$sql = "SELECT * FROM produtos ";
			$this->setParametro($this->strNumPagina);
			$this->setFileName($this->strUrl);
			$this->setInfoMaxPag(10);
			$this->setMaximoLinks(50);
			$this->setSQL($sql);
			
			self::iniciaPaginacao();
			$cont = 0;
			
			while ($linha = self::results()){
				$cont++;
				echo "
				
				<tr>
				<td> $linha[id_produto] </td>
				<td> $linha[nome] </td>
				<td> $linha[imagem_url] </td>
				<td> $linha[preco] </td>
				<td> $linha[idcategoriaFK] </td>
				<td> $linha[idsubcategoriaFK] </td>
				<td> $linha[idconsolasFK] </td>
				<td> $linha[idgéneroFK] </td>
				<td> <a href='index.php?link=15&acao=Alterar&id=$linha[id_produto]'> <img src='imagens/alterar.gif' border='0' /></a> </td>
				<td> <a href='index.php?link=15&acao=Excluir&id=$linha[id_produto]'> <img src='imagens/excluir.gif' border='0' /></a> </td>		
				</tr>
				
				
				";
				
				self::setContador($cont);
			}		
			
		}
	}
	
	
?>