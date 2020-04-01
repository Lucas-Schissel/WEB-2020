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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/t1.css')}}" type="text/css">
 
</head>

<body>  
       
    <!--Formulario.-->
    
    <div class="container mt-4 text-center">
        <h2>Cadastro de Clientes</h2>
        <div class="row">
        <div class="col-md-2 mt-2"></div>

        <div  class="col-md-8 mt-2">

            <form method="post" action="{{route('cliente_novo')}}" autocomplete="off">
            @csrf
                <div>
                
                    <input type="text" name="nome" placeholder="Nome" maxlength="150" required><BR><BR>
                    <input type="text" name="cep" onkeypress="return onlynumber();" placeholder="CEP" maxlength="9" required ><BR><BR>
                    <select type="text" name="estado"><BR><BR>
                        <option value=""></option> 
                        <option value="AC">AC</option> 
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select><BR><BR>
                    <input type="text" name="cidade" placeholder="Cidade" maxlength="150" required><BR><BR>
                    <input type="submit" value="Enviar"><BR>

                </div>

            </form>

        </div>

        <div class="col-md-2 mt-2"></div>

        </div>
    </div>

    <div><br></div> 

    <script type="text/javascript">
        document.tela_cadastro_clientes.reset();
    </script>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
    
</body>
</html>