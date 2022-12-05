<?php
$link = mysqli_connect("localhost", "erica", "erufg4", "atvflores");
 
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

/*
echo"<script language='javascript' type='text/javascript'>
          alert('Sucesso: Sucesso ao conectar-se com a base de dados MySQL.');</script>" . PHP_EOL;
 
mysqli_close($link);*/
?> 