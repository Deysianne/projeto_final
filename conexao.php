<?php
$nome = $_POST['nome_contato'];
$email = $_POST['email_contato'];
$mensagem = $_POST['mensagem_contato'];

$conexao = mysqli_connect('http://ec2-3-231-215-130.compute-1.amazonaws.com', 'av_deysiannesouza', 'deysiannesouza', 'bd_av4i_deysiannesouza');
$sql = "insert into contato(nome_contato, email_contato, mensagem_contato) values ('$nome_contato', '$email_contato', '$mensagem_contato')";

$inserir = mysqli_query($conexao,$sql);

if ($inserir) {
echo "Cadastro realizado com sucesso!";
}
else{
echo "erro";
}
mysqli_close ($conexao);
?>
