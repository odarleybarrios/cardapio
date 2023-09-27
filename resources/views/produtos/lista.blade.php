@extends('exemplo.template')
@section('conteudo')


<h1>Produtos</h1>
@foreach ($produtos as $produto)
 <div class="card" style="width: 18rem;">
    <img src="{{Voyager::image($produto->foto)}}"
     class="card-img-top" alt="imagem do produto">
    <div class="card-body">
      <h5 class="card-title">{{$produto->nome}}</h5>
      <p class="card-text">
        {{!!$produto->decrição!!}}
        </p>
      <a href="#" class="btn btn-primary">Visualizar</a>
    </div>
  </div>
@endforeach

@endsection
