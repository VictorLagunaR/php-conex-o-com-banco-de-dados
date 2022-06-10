<?php

$con = mysqli_connect("localhost","root", "","db_2HPW2");

if(mysqli_connect_errno()){

    echo "Erro ao conectar com a base de dados: " . mysqli_connect_error();

}

$sql1= "insert into pessoa value('Ana','Souza',20)";
mysqli_query($con,$sql1);
$sql2= "insert into pessoa (nome,sobrenome,idade) value('Carlos','Costa',21)";
mysqli_query($con,$sql2);

mysqli_close($con);
?>