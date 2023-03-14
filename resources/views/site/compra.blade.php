@extends('layouts.site.site')

@section('titulo')
    Compra
@endsection

@section('conteudo')
    <div id="container-compra">
        <div id="nome-compra">{{ $produto['nome'] }}</div>{{-- {{ $produto['nome'] }} --}}
        <div class="container-info">
            <div class="imagem-compra">
                <img src="{{ $produto['imagem'] }}" alt="">{{-- {{ $produto['imagem'] }} --}}
            </div>
            <div class="info-site-compra">
                <div>
                    <p class="titulo-info">descrição</p>
                    <p class="texto-info">{{ $produto['descricao'] }}</p>
                </div>
                <div>
                    <p class="titulo-info">categoria</p>
                    <p class="texto-info">{{ $produto->categoria->categoria }}</p>
                </div>
                <div>
                    <p class="titulo-info">quantidade</p>
                    <p class="texto-info">{{ $produto['quantidade'] }} unidades</p>
                </div>
                <div>
                    <p class="titulo-info">preço</p>
                    <p class="texto-info">R${{ $produto['preco'] }}</p>
                </div>
            </div>
        </div>
        <form id="comprar" method="POST" action="{{ route('comprar', ['id' => $produto->id]) }}">
            @csrf
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" value="1">
            <button type="submit">Comprar</button>
        </form>
    </div>
@endsection
