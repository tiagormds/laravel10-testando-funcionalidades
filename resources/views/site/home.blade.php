@extends('site.layout')
@section('titulo', 'Página HOME')

@section('conteudo')
    <h1>Essa é nossa home</h1>

    @include('includes.mensagem', ['titulo' => 'Mensagem de sucesso!'] )
    @component('components.sidebar')
        @slot('paragrafo')
            Texto qualquer vindo do slot
        @endslot
    @endcomponent
@endsection
