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
        <div id="comprar">
            <p>valor total da compra</p>
            <div id="quantidade-compra">
                <button id="btn-1">-</button>
                <input type="text">
                <button id="btn-2">+</button>
            </div>
            <button class="btn-site-compra">comprar</button>
        </div>
    </div>
@endsection
