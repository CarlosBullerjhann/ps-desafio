@extends('layouts.site.site')

@section('titulo')
    Compra
@endsection

@section('conteudo')
    <div id="container-compra">
        <div>{{ $produto['nome'] }}</div>{{-- {{ $produto['nome'] }} --}}
        <div class="container-info">
            <div class="imagem-compra">
                <img src="{{ $produto['imagem'] }}" alt="">{{-- {{ $produto['imagem'] }} --}}
            </div>
            <div class="info-site-compra">
                <p>{{ $produto['descricao'] }}</p>{{-- {{ $produto['descricao'] }} --}}
                <p>{{ $produto->categoria->categoria }}</p>{{-- {{ $produto->categoria->categoria }} --}}
                <p>{{ $produto['quantidade'] }}</p>{{-- {{ $produto['quantidade'] }} --}}
                <p>R${{ $produto['preco'] }}</p>{{-- R${{ $produto['preco'] }} --}}
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
