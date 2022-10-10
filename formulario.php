<?php
//dados do formularios
$nome = $_POST["nome"];
$genero = $_POST["gen"];
$dataNasc = $_POST["data_nasc"];
$telefone = $_POST["tel"];
$email = $_POST["email"];
$arquivo =  'arquivo.txt';
$openarq = fopen($arquivo, 'a');

$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$telefone = filter_var($telefone, FILTER_VALIDATE_INT);

//nome
if  (!preg_match( "/^[a-zA-z]*$/" ,  $nome )) {  
    echo '<script>alert ("'.$nome.' não é um nome valido")</script>';
}  else  {  
    $savename = "Nome: $nome \n";
}

//telefone
if (!filter_var($telefone, FILTER_VALIDATE_INT) === false) {
    //echo '<script>alert ("'.$telefone.' é um telefone valido")</script>';
    $savetel = "Telefone: $telefone \n";   
} else {
    echo '<script>alert ("'.$telefone.' não é um telefone valido")</script>';
}

//email
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $savemail = "email: $email \n";
} else {
    echo '<script>alert ("'.$email.' não é um email valido")</script>';
}
fwrite($openarq, $savename);
fwrite($openarq, $savetel);
fwrite($openarq, $savemail);
fclose($openarq);
?>  