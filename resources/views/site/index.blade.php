@extends('layouts.site.site')

@section('titulo')
    Loja
@endsection

@section('conteudo')
    <div id="conteudo-container">
        <div id="filtro-categorias">
            <form class="select" action="">
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
                        <div class="each-produto">
                            <div class="nome-produto">
                                <p>nome:{{ $produto['nome'] }}</p>
                            </div>
                            <div class="image-container">
                                <img src="{{ $produto['imagem'] }}" alt="">
                            </div>
                            <div class="info-produto">
                                <!--<p>{{ $produto['descricao'] }}</p>-->
                                <p>categoria:{{ $produto->categoria->categoria }}</p>
                                <p>valor:{{ $produto['preco'] }}</p>
                                <!--<p>{{ $produto['quantidade'] }}</p>-->
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Sem produtos no momento</p>
                @endif
            @endisset
        </div>
    </div>
@endsection
