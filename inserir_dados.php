<?php

$con = mysqli_connect("localhost","root", "","db_2HPW2");

if(mysqli_connect_errno()){

    echo "Erro ao conectar com a base de dados: " . mysqli_connect_error();

}else{
    $sql= "insert into pessoa value('$_POST[nome]','$_POST[sobrenome]','$_POST[idade]')";

    if (mysqli_query($con,$sql)) {
        echo "Pessoa inserida com sucesso!!!";
    }
    else{
        echo "Erro ao inserir: ".mysqli_error($con);
    }
    mysqli_close($con);
}

?>