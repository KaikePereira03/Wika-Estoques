<?php
include_once('conexao.php');
if(isset($_GET['idDel'])){
	$id = $_GET['idDel'];
	$delete = "DELETE FROM produtos WHERE CodRefProduto=:id";
	try{
		$resultDel = $conect->prepare($delete);
		$resultDel->bindParam(':id',$id,PDO::PARAM_INT);
		$resultDel->execute();
		//Retorno dinâmico a página de relatório
		$contar = $resultDel->rowCount();
		if($contar>0){
			header("Location: listagem.php");
		}else{
			header("Location: listagem.php");
		}
	}catch(PDOException $e){
        echo "<strong>ERRO DE DELETE: </strong>".$e->getMessage();
    }
}