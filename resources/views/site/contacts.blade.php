@extends('site.layouts.main')
@section('title', $title)
@section('contact')
<main>
    <div class="conteudo-pagina">
        <div class="page-title">
            <h1>Entre em contato conosco</h1>
        </div>
        <div class="page-information">
            <div class="main-contact">
                @component('site.layouts._components.form_contato', ['class' => 'black-border'])
                <p>A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível. </p>
                <p>Nosso tempo médio de resposta é de 48 horas.</p>
                @endcomponent
            </div>
        </div>
    </div>
</main>
@include('site.layouts._partials.footer')
@endsection