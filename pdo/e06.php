<?php

	$conn = new PDO ("mysql:dbname=dbphp7;host=localhost", "root", "");

	$conn->beginTransaction();

		$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

			$id = 5;

		$stmt->execute(array($id));

//			$conn->rollback();

			$conn->commit();

	$mesangen = "Dados Deletados com Sucesso! OK!";

	echo "$mesangen";
?>