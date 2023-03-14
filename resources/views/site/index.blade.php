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
                            <div class="{{ $produto['quantidade'] <= 0 ? 'each-produto0' : 'each-produto' }}"
                                id="produto1-{{ $produto['id'] }}"
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
                            <div class="{{ $produto['quantidade'] <= 0 ? 'each-produto20' : 'each-produto2' }}"
                                id="produto2-{{ $produto['id'] }}" style="display: none"
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
                                    <div>
                                        <p class="titulo">descrição</p>
                                        <p id="descricao">{{ $produto['descricao'] }}</p>
                                    </div>
                                    <div>
                                        <p class="titulo">quantidade</p>
                                        <p id="quantidade">{{ $produto['quantidade'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @if ($produto['quantidade'] <= 0)
                                <p id="esgotado">Esgotado</p>
                            @else
                                <a class="btn-compra" href="{{ route('compra', $produto->id) }}">
                                    Comprar
                                </a>
                            @endif
                        </div>
                    @endforeach
                @else
                    <p><br><br><br><br><br><br>Sem produtos no momento<br><br><br><br><br><br><br><br><br><br></p>
                @endif
            @endisset
        </div>
    </div>
@endsection
