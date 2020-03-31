<?php
//Lucas Schissel - ASAE9.

?>

<!DOCTYPE html>
<!--Inicio da página html.-->

<html>
<head>
    <title>Cadastro de Clientes</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">z

</head>
<body>    
        <h1>Cadastro de Clientes</h1>

    <!--Formulario.-->
    
        <form method="post" action="{{}}">
            @csrf
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="cep" placeholder="CEP">
            <input type="text" name="estado" placeholder="Estado">
            <input type="text" name="cidade" placeholder="Cidade">
            <input type="submit" value="Enviar">
        </form>
            
    
</body>
</html>