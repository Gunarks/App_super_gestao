<h1>Provider view(index)</h1>

{{-- Fica o mentário que será descartado pelo blade --}}


@php

/*
Enquanto o if verifica se o retorno é true

*/
@endphp

{{--
@if (count($providers) > 0 && count($providers) < 10)
    <h2>There are some registered suppliers</h2>
@elseif(count($providers) > 10)
    <h2>There are several registered suppliers</h2>
@else
    <h2>There are no registered providers yet.</h2>
@endif --}}

{{-- Operador unless verifica se o retorno é false --}}


@php

/*
O isset verifica em (normalmente em forma de verificação if else), se uma determinada variável
existe ou não. Entra no bloco true se a variável estiver definada(existe), e entra no bloco false
se a variável não estiver definida(não existe).
*/

@endphp



@isset($providers)
<ul>
    @foreach ($providers as $provider )
    <!-- Também poderia ser : $providers as indice => $provider  -->
    <li>Providers: {{$provider['nome'] ?? ''}}</li>
    <li>Status: {{$provider['status'] ?? ''}}</li>
    <li>CNPJ: {{$provider['CNPJ'] ?? ''}}</li>
    <li>DDD({{$provider['ddd'] ?? ''}}) Telefone: {{$provider['telefone'] ?? ''}} {{ $provider['cidade'] }} </li>
    <hr>
    @endforeach
</ul>


<!-- 
        $variável testada nãi estiver definada (isset)
        ou 
        $variável testada possuir valor null
    -->

@endisset
<br><br>


@php
/*
O operador empty é usado para verificar se uma determinda variável está ou não vázia
o no PHP ele é um método que entra geralmente nos blocos de controle de decisão,
mais específicamente no if else.

O empty retorna true se a variável estiver vázia, e false se ela tiver valor.
*/
@endphp