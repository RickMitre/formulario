<?php
//dados do formularios
$nome = $_POST["nome"];
$genero = $_POST["gen"];
$dataNasc = $_POST["data_nasc"];
$telefone = $_POST["tel"];
$email = $_POST["email"];

$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$telefone = filter_var($telefone, FILTER_VALIDATE_INT);

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo '<script>alert ("'.$email.' is a valid email address")</script>';
} else {
    echo '<script>alert ("'.$email.' is not a valid email address")</script>';
}

if (!filter_var($telefone, FILTER_VALIDATE_INT) === false) {
    echo '<script>alert ("'.$telefone.' is a valid telefone address")</script>';
} else {
    echo '<script>alert ("'.$telefone.' is not a valid telefone address")</script>';
}
?>  