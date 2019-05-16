<?php

if(empty ($_POST['nome'])



$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$observacao = $_POST['observacao'];

if(strlen($nome) >=10 ){
    echo $nome."<br>";
    echo strlen($nome)."<br>";

}else{
    echo "<script> alert('Nome muito curto');";
    echo "jascript:window.location='index.php';</script>";


}
echo $email."<br>";
echo $senha."<br>";
echo $observacao."<br>";



?>