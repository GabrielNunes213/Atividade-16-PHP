<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$conexao = new PDO("mysql:host=localhost;dbname=banco16_Gabriel", "root", "");   

$inserir = $conexao->prepare("INSERT INTO tabela_pessoas (nome_pessoa, telefone_pessoa, email_pessoa) VALUES (:n, :t, :e)");
$inserir->bindParam(":n", $nome);
$inserir->bindParam(":t", $telefone);
$inserir->bindParam(":e", $email);
$inserir->execute();

$delete = $conexao->prepare("DELETE FROM tabela_pessoas WHERE id_pessoa = :id");
$id = 3;
$delete->bindParam(":id", $id);
$delete->execute();

$update = $conexao->prepare("UPDATE tabela_pessoas SET nome_pessoa = 'Kayque' WHERE id_pessoa = :idupdate");
$idupdate = 4;
$update->bindParam(":idupdate", $idupdate);
$update->execute();

?>