<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>

</head>
<body>    

    <h1>Lista de Clientes</h1>
        <ul>
            @foreach ($clientes as $c)
                <li>{{ $c->id }}</li>
            	<li>{{ $c->nome }}</li>
            	<li>{{ $c->cep}}</li>
                <li>{{ $c->estado}}</li>
                <li>{{ $c->cidade}}</li>
            @endforeach
            
        </ul>               
    
</body>
</html>