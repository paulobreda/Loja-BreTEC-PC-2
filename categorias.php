<?php

$ligacao = new mysqli("localhost","root","","lojabre");

$resultados = $ligacao->query("select * from categorias");

while( $linha= $resultados->fetch_assoc())
{
    echo $linha["id_categoria"]." ".$linha["categoria"]."<br>";
}

$ligacao->close();
?>