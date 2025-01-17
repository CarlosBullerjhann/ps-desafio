{{-- @if ($errors->any())
    <div class="alert alert-danger alert-elevate col-sm-12" role="alert">
        <div class="alert-text" data-type="danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    </div>
@endif --}}
@if (Session::has('errors'))
    <div class="alert alert-danger alert-elevate col-sm-12 " role="alert">

        <div class="alert-text" data-type="errors">
            {{ Session::get('errors') }}<br>

        </div>

    </div>
@endif

@if (Session::has('erro'))
    <div class="mensagem-compra erro" role="alert">

        <div class="alert-text" data-type="erro">
            {{ Session::get('erro') }}<br>

        </div>

    </div>
@endif

@if (Session::has('danger'))
    <div class="alert alert-danger alert-elevate col-sm-12" role="alert">
        <div class="alert-text" data-type="danger">
            {{ Session::get('danger') }}<br>
        </div>
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning alert-elevate col-sm-12" role="alert">
        <div class="alert-text" data-type="warning">
            {{ Session::get('warning') }}<br>
        </div>
    </div>
@endif

@if (Session::has('sucesso'))
    <div class="mensagem-compra sucesso" role="alert">
        <div class="alert-text" data-type="sucesso">
            {{ Session::get('sucesso') }}<br>
        </div>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success  col-sm-12" role="alert">
        <div class="alert-text" data-type="success">
            {{ Session::get('success') }}<br>
        </div>
    </div>
@endif

@if (Session::has('info'))
    <div class="alert alert-info alert-elevate col-sm-12" role="alert">
        <div class="alert-text" data-type="info">
            {{ Session::get('info') }}<br>
        </div>
    </div>
@endif
