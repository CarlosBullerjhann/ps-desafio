@extends('layouts.site.site')

@section('titulo')
    Compra
@endsection

@section('conteudo')
    <div id="container-compra">
        <div>nome</div>
        <div class="container-info">
            <div class="imagem-compra">
                <div></div>
            </div>
            <div class="info-site-compra">
                <p>descrição</p>
                <p>categoria</p>
                <p>quantidade</p>
                <p>preço</p>
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
