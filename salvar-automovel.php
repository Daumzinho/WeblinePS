<?php

	include_once"conexao.php";
	switch($_REQUEST["acao"]){
		case'cadastrar':
		$nome= $_POST["nome"];
		$placa= $_POST["placa"];
		$chassi= $_POST["chassi"];
		$montadora= $_POST["montadora"];

		$sql= "INSERT INTO automoveis (nome, placa, chassi, montadora) VALUES('{$nome}', '{$placa}','{$chassi}','{$montadora}')";

		$res = $conn->query($sql);
		break;

		if($res==true){
			print"<script>alert('Cadastro com sucesso');</script>";
			print"<script>location.href='?page=listar';</script>";
		}else{
			print"<script>alert('Nao foi possivel cadastrar');</script>";
			print"<script>location.href='?page=listar';</script>";
		}break;

		case'editar':
		$nome= $_POST["nome"];
		$placa= $_POST["placa"];
		$chassi= ($_POST["chassi"]);
		$montadora= $_POST["montadora"];

		$sql = "UPDATE automoveis SET
					nome='{$nome}',
					placa='{$placa}',
					chassi='{$chassi}',
					motandora='{$montadora}'
				WHERE
					id=".$_REQUEST["id"];

		$res = $conn->query($sql);

		if($res==true){
			print"<script>alert('Cadastro com sucesso');</script>";
			print"<script>location.href='?page=listar';</script>";
		}else{
			print"<script>alert('Nao foi possivel cadastrar');</script>";
			print"<script>location.href='?page=listar';</script>";
		}

		break;

		case'excluir':
			$sql = "DELETE FROM automoveis WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql);

		if($res==true){
			print"<script>alert('Excluido com sucesso');</script>";
			print"<script>location.href='?page=listar';</script>";
		}else{
			print"<script>alert('Nao foi possivel excluir');</script>";
			print"<script>location.href='?page=listar';</script>";
		}
		break;
	}