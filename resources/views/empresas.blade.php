<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Empresas</h1>

    @foreach ($empresas as $empresa )
      <p>
        {{$empresa->nome}}

      </p>
      <p>
        {{$empresa->descricao}}

      </p>


    @endforeach

    <a href="{{route('produtos.browse')}}">Listar Produtos</a>
    <a href="{{route('empresaListar')}}">Listar Empresas</a>
    <a href="{{route('listarCategoria')}}">Listar Categorias</a>
    
</body>
</html>
