<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos</h1>
    <p>{{$subtitulo}}</p>
    @foreach ($produtos as $produto )
      <p>
        {{$produto->nome}}
        <img src="{{Voyager::image($produto->foto)}}">
     </p>
    @endforeach

    <a href="{{route('produtos.browse')}}">Listar Produtos</a>
    <a href="{{route('empresaListar')}}">Listar Empresas</a>
    <a href="{{route('listarCategoria')}}">Listar Categorias</a>

</body>
</html>
