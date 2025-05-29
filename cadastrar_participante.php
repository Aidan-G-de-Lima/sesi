<?php
echo "<h2>Cadastro de Participante Realizado com Sucesso!</h2>";
echo "<p>Nome: ". $_POST['nome'] ."</p>";
echo "<p>Idade: ". $_POST['idade'] ."</p>";
echo "<p>Telefone: ". $_POST['telefone'] ."</p>";
echo "<p>Tipo: ". $_POST['tipo'] ."</p>";
if ($_POST['tipo'] == 'Aluno') {
  echo "<p>RM: ". $_POST['rm'] ."</p>";
} else {
  echo "<p>CPF: ". $_POST['cpf'] ."</p>";
}
?>
