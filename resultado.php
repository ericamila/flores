<?php
include "conexao.php";

$nome = $_POST['nome'];

$res = mysqli_query($link,"SELECT nome, quantidade FROM flores WHERE nome = '$nome';");


    if($nome == "" || $nome == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo nome deve ser preenchido');
    window.location.href='index.html';</script>";

    }else{
      if (mysqli_query($link,"SELECT nome, quantidade FROM flores WHERE nome = '$nome';")) { 
        echo"<script language='javascript' type='text/javascript'>
                alert('Consulta realizada com sucesso!');
                </script>"; 
      } else{
        echo"<script language='javascript' type='text/javascript'>
                alert('Falha na consulta!');
                window.location.href='index.html'
                </script>";
      }
    }
 ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Estoque de flores</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/principal.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1>Flores</h1>
        </header>
		    <br>
        <main>
  			<br>
  			<section style="height:100px; width:400px; ">
  				<fieldset>
  					<legend>Resultado do estoque de flores:</legend>
  					<form>
  						<br>
              <table id="tabelas"><tr><td>
                <h4>Flor</h4></td><td><h4>Quantidade em estoque</h4></td><td><h4>Falta comprar</h4></td></tr>
    						<?php
    						while($escrever=mysqli_fetch_array($res)){
    						 	echo "<tr><td>" . $escrever['nome'] . "</td><td>" . $escrever['quantidade'] . "</td><td>" . 
                  (10-$escrever['quantidade']) . "</td></tr>"; 
    						}
                ?>
  						</table> 
  						<?php mysqli_close($link);?>
  					</form><br>
  					<a href="index.html"><input name="voltar" type="submit" id="voltar" value="Voltar"/></a>
  				</fieldset>
  			</section>
  			<br><br><br><br><br>
        </main>
		    <br>
        <footer>
            <p>Desenvolvido por Erica Camila Silva Cunha - 2022</p>
        </footer>

    </body>
</html>