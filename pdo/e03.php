<?php

	$conn = new PDO ("mysql:dbname=dbphp7;host=localhost", "root", "");

		$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

			$login ="jose";
			$password ="12345";

		$stmt->bindParam(":LOGIN", $login);
		$stmt->bindParam(":PASSWORD", $password);

			$stmt->execute();
	$mesangen = "Dados Inseridos com Sucesso! OK!";

	echo "$mesangen";
?>