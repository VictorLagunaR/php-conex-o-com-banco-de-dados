<?php

$con = mysqli_connect("localhost","root", "","db_2HPW2");
$sql = "create table if not exists pessoa(
    nome char(30),
    sobrenome char(30),
    idade int
)";

if(mysqli_query($con,$sql)){

    echo "Tabela criada com sucesso";

}

else {

    echo "Erro: " .mysqli_error($con);
}

mysqli_close($con);
?>