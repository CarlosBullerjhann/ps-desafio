@extends('layouts.site.site')

@section('titulo')
    Loja
@endsection

@section('conteudo')
    <div id="conteudo-container">
        <div id="filtro-categorias">
            <form class="select" action="{{ route('siteFilter') }}">
                <div id="select-container">
                    <label for="categorias">Filtrar por categorias:</label>
                    <select name="categorias" id="categorias">
                        <option class="selecione" value="default">selecione uma categoria</option>
                        <option value="">Mostrar todas</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria['categoria'] }}">{{ $categoria['categoria'] }} </option>
                        @endforeach
                    </select>
                    <input type="submit" value="Filtrar">
                </div>
            </form>
        </div>
        <div class="produtos">
            @isset($produtos)
                @if (count($produtos))
                    @foreach ($produtos as $produto)
                        <div class="each-produto-container">
                            <div class="each-produto" id="produto1-{{ $produto['id'] }}"
                                onclick="opendiv('produto1-{{ $produto['id'] }}','produto2-{{ $produto['id'] }}')">
                                <div class="info">
                                    <div class="nome-produto">
                                        <p class="titulo nome">{{ $produto['nome'] }}</p>
                                    </div>
                                    <div class="image-container">
                                        <img id="img1" src="{{ $produto['imagem'] }}" alt="">
                                    </div>
                                    <div class="info-produto">
                                        <p>{{ $produto->categoria->categoria }}</p>
                                        <p>R${{ $produto['preco'] }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="each-produto2" id="produto2-{{ $produto['id'] }}" style="display: none"
                                onclick="opendiv('produto1-{{ $produto['id'] }}','produto2-{{ $produto['id'] }}')">
                                <div class="info1">
                                    <div class="nome-produto">
                                        <p class="titulo nome">{{ $produto['nome'] }}</p>
                                    </div>
                                    <div class="image-container1">
                                        <img id="img2" src="{{ $produto['imagem'] }}" alt="">
                                    </div>
                                    <div class="info-produto">
                                        <p>{{ $produto->categoria->categoria }}</p>
                                        <p>R${{ $produto['preco'] }}</p>
                                    </div>
                                </div>
                                <div class="info-2" id="info-{{ $produto['id'] }}">
                                    <div class="titulo">
                                        <p>descrição</p>
                                        <p id="descricao">{{ $produto['descricao'] }}</p>
                                    </div>
                                    <div class="titulo">
                                        <p>quantidade</p>
                                        <p id="quantidade">{{ $produto['quantidade'] }}</p>
                                    </div>
                                </div>
                            </div>
                            <a class="btn-compra" href="{{ route('compra', $produto->id) }}">
                                <button class="btn-compra">
                                    Compra
                                </button>
                            </a>
                        </div>
                    @endforeach
                @else
                    <p>Sem produtos no momento</p>
                @endif
            @endisset
        </div>
    </div>
@endsection

{{-- {{ $produto['quantidade'] <= 0 ? 'each-produto-container0' : 'each-produto-container' }} --}}
