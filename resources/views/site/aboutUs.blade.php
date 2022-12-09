@extends('site.layouts.main')
@section('title',$title)
@section('about_content')
<main>
    <div class="conteudo-pagina">
        <div class="page-title">
            <h1>Olá, eu sou o Super Gestão</h1>
        </div>
        <div class="page-information">
            <p>
                O Super Gestão é o sistema online de controle administrativo que pode transformar e
                potencializar
                os negócios da sua empresa.
            </p>
            <p>
                Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus
                negócios!
            </p>

        </div>
    </div>
</main>
@include('site.layouts._partials.footer')
@endsection