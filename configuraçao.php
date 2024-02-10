<?php
 
  $con = mysqli_connect('localhost', 'root', '', 'data');

  
  $nome = $_POST['nome'];
  $data = $_POST['data_aniversario'];
  var_dump($nome, $data);

  if(!$con){
    die("erro na conecção!" . mysqli_connect_error());
  }

  $sql = "INSERT INTO usuarios( data_de_aniversario, Nome ) VALUES('$data', '$nome')";

 $re = mysqli_query($con, $sql);

  if($re){
    echo "você foi cadastrado com sucesso";
  }
