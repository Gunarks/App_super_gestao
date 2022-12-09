@extends('site.layouts.main')
@section('title',$title)

@section('main_page')
<main>
     <div class="conteudo-destaque">
          <div class="left">
               <div class="information">
                    <h1>Sistema Super Gestão</h1>
                    <p>Software para gestão empresarial, ideal para a sua empresa.</p>
                    <div class="calling">
                         <img src="{{ asset('assets/img/check.png') }}" alt="imagem da chamada">
                         <span class="text-white">Gestão completa e descomplicada</span>
                    </div>
                    <div class="calling">
                         <img src="{{ asset('assets/img/check.png') }}" alt="imagem da chamada">
                         <span class="text-white">Sua empresa na nuvem</span>
                    </div>
                    <div class="video">
                         <img src="{{ asset('assets/img/player_video.jpg') }}" alt="video">
                    </div>
               </div>
          </div>

          <div class="right">
               <div class="contact">
                    <h1>Contato</h1>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário
                         abaixo.</p>

                    @component('site.layouts._components.form_contato', ['class' => 'white-border'])
                    @endcomponent
               </div>
          </div>
     </div>
</main>
@endsection