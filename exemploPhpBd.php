<?php

$con = mysqli_connect("localhost","etec",123456,"bd_exemplo");


if(mysqli_connect_errno()){

    echo "Erro ao conectar com a base de dados: " . mysqli_connect_error();

}

else {

    $sql="CREATE DATABASE if not exists db_2HPW2";

    if(mysqli_query($con,$sql)){

        echo "<br/>Base de dados criada com sucesso!";
    }

    else{

        echo "<br/>Erro! " .mysqli_error();

    }

    mysqli_close($con);
}

?>