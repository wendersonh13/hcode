<?php

	$conn = new PDO ("mysql:dbname=dbphp7;host=localhost", "root", "");

		//$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");
		//$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
		$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

			$id = 1;

		$stmt->bindParam(":ID", $id);

			$stmt->execute();

	$mesangen = "Dados Deletados com Sucesso! OK!";

	echo "$mesangen";
?>